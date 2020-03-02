<?php


class PostData
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getPostId($id)
    {
        $stmt=$this->pdo->prepare("SELECT * FROM posts where id=:id");
        if($stmt->execute(["id"=>$id])){
            return $stmt->fetch();
        };
        return null;
    }
/*public function likeOnePost($id)
{
    $stmt=$this->prepare("Select * From posts where id=:id");

}*/
    public function getAllPosts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function insertPost($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts (title,description,datePublication,photo,user_id)
        values (:title,:description,:datePublication,:photo,:user_id)");
        if ($stmt->execute([
            "title" => $data["title"],
            "description" => $data["description"],
            "datePublication" => $data["datePublication"],
            "photo"=>$data["photo"],
            "user_id"=>$data["user_id"],
        ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id=:id");
        if ($stmt->execute(["id" => $id])) {
            return 1;
        };
        return -1;
    }
    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare("UPDATE posts  set title=:title, description=:description, photo=:photo
                                              WHERE id=:id");
        if ($stmt->execute([
            "title" => $data["title"],
            "description" => $data["description"],
            "photo" => $data["photo"],
            "id" => $data["id"]])) {
            return 1;
        };
        return -1;
    }
}

