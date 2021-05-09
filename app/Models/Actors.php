<?php

namespace Tarantino\Models;

use PDO;
use Tarantino\Utils\Database;

class Actors extends CoreModel {

    private $role;

    /**
     * Permet de récupérer tous les acteurs de la BDD filtrés par film
     *
     * @param int $movie_id
     * @return void
     */
    public function findAllByMovie($movie_id)
    {
        // On instancie PDO grace à la classe utilitaire Database
        $pdo = Database::getPDO();
        
        // On prépare une requete à la BDD
        $sql = "SELECT * FROM `actors`
                WHERE `movie_id` = $movie_id
                ";

        // On l'envoie à la BDD grace à PDO et on récupère le  résultat sous la forme d'un objet PDOStatement.
        $pdoStatement = $pdo->query($sql);

        $actors = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $actors;
    }


    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}