<?php

namespace App\Manager;

use App\config\Connect;
use PDO;

class ArticleManager
{

    public static function getAllArticles()
    {
        $req = Connect::getPDO()->prepare('SELECT id, title, date_add FROM articles ORDER BY id DESC');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }


//recover an article
    public static function getArticle($id)
    {
        $req = Connect::getPDO()->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute(array($id));

        if ($req->rowCount() == 1) {
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        } else {
            header('Location: index.php');
            $req->closeCursor();
        }
    }


    public function addNewArticle($article): bool
    {
        $stmt = Connect::getPDO()->prepare("
            INSERT INTO articles (title, content, date_add) VALUES (:title, :content, :date_add)
        ");

        $stmt->bindValue(':title', $article->getTitle());
        $stmt->bindValue(':content', $article->getContent());
        $stmt->bindValue(':date_add', $article->getDate());

        $result = $stmt->execute();
        $article->setId(Connect::getPDO()->lastInsertId());
        return $result;
    }


public function deleteArticle($article)
{
    return Connect::getPDO()->exec("DELETE FROM  articles (title, content, date_add) VALUES (:title, :content, :date_add)");
}
}
