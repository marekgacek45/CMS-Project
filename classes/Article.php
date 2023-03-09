<?php

class Article
{

    public static function getAll($conn)
    {

        $sql = "SELECT * FROM article";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>