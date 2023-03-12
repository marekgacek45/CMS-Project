<?php

class Article
{
    public $id;
    public $title;
    public $content;
    public $published_at;
    public $errors = [];

    protected function validate()
    {
        if ($this->title === '') {
            $this->errors[] = 'title is required';
        }
        if ($this->content === '') {
            $this->errors[] = 'content is required';
        }

        return empty($this->errors);
    }


    public static function getAll($conn)
    {

        $sql = "SELECT * FROM article";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getSingleArticle($conn, $id, $columns = "*")
    {

        $sql = "SELECT $columns FROM article WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');

        if ($stmt->execute()) {
            return $stmt->fetch();
        }
    }

public static function getPage($conn,$limit,$offset){
    $sql="SELECT * FROM article ORDER BY id LIMIT :limit OFFSET :offset";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':limit',$limit,PDO::PARAM_INT);
    $stmt->bindValue(':offset',$offset,PDO::PARAM_INT);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

public static function getTotalPages($conn){
    return $conn->query('SELECT COUNT(*) FROM article')->fetchColumn();
}


    public function create($conn)
    {
        if ($this->validate()) {
            $sql = "INSERT INTO article(title,content,published_at)
                VALUES ( :title,:content,:published_at)";


            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);
            $stmt->bindValue(':published_at', $this->published_at, PDO::PARAM_STR);


            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();
                return true;
            }
        } else {
            return false;
        }
    }

    public function update($conn)
    {
        if ($this->validate()) {
            $sql = "UPDATE article SET title =:title, content=:content, published_at=:published_at
            WHERE id = :id";


            $stmt = $conn->prepare($sql);


            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);
            $stmt->bindValue(':published_at', $this->published_at, PDO::PARAM_STR);


            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();


                return true;
            }
        } else {
            return false;
        }

    }
    public function delete($conn)
    {
$sql = "DELETE FROM article WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id',$this->id,PDO::PARAM_INT);

return $stmt->execute();

    }

}

?>