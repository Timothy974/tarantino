<?php

namespace Tarantino\Models;

use PDO;
use Tarantino\Utils\Database;

class Soundtrack extends CoreModel {

    private $movieName;
    private $title;
    private $author;
    private $movie_id;

    public function find($movie_id)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `soundtrack` WHERE `movie_id` = " . $movie_id;

        $pdoStatement = $pdo->query($sql);

        $song = $pdoStatement->fetchObject(self::class);

        return $song;
    }

    public function findAll($movieId)
    {
        // On récupère notre connexion à la BDD
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `soundtrack`
        WHERE `movie_id` =" . $movieId ;

        // On l'envoie à la BDD grace à PDO et on récupère le  résultat sous la forme d'un objet PDOStatement.
        $pdoStatement = $pdo->query($sql);

        // On récupère les marques sous forme d'un tableau d'objets instanciés depuis le model Brand. 
        $soundtracks = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $soundtracks;

    }


    /**
     * Get the value of movie_id
     */ 
    public function getMovie_id()
    {
        return $this->movie_id;
    }

    /**
     * Set the value of movie_id
     *
     * @return  self
     */ 
    public function setMovie_id($movie_id)
    {
        $this->movie_id = $movie_id;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of movieName
     */ 
    public function getMovieName()
    {
        return $this->movieName;
    }

    /**
     * Set the value of movieName
     *
     * @return  self
     */ 
    public function setMovieName($movieName)
    {
        $this->movieName = $movieName;

        return $this;
    }
}