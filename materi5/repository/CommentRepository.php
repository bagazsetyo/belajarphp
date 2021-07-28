<?php

    namespace Repository{

        use Models\Comment;

        interface CommentRepository{

            function inset(Comment $comment): Comment;

            function findById(int $id): ?Comment;

            function findAll():array;

        }

        class CommentRepositoryImpl implements CommentRepository{

            public function __construct(private \PDO $connection)
            {
                
            }

            public function inset(Comment $comment): Comment
            {
                $sql = 'INSERT INTO comment(email, comment) VALUES (?,?)';
                $statment = $this->connection->prepare($sql);
                $statment->execute([$comment->getEmail(), $comment->getComment()]);

                $id = $this->connection->lastInsertId();
                $comment->setId($id);

                return $comment;
            }

            public function findById(int $id): ?Comment
            {
                $sql = "SELECT * FROM comment where id = ?";
                $statment = $this->connection->prepare($sql);
                $statment->execute([$id]);

                if($row = $statment->fetch()){
                    return new Comment(
                        id: $row['id'],
                        email: $row['email'],
                        comment: $row['comment']
                    );
                }else{
                    return null;
                }
            }
            public function findAll(): array
            {
                $sql = "SELECT * FROM comment";
                $statment = $this->connection->query($sql);

                $array = [];

                while($row = $statment->fetch()){
                    $array[] = new Comment(
                        id: $row['id'],
                        email: $row['email'],
                        comment: $row['comment']
                    );
                }

                return $array;
            }
        }

    }