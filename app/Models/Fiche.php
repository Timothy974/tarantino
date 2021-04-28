<?php

namespace Tarantino\Models;

use PDO;
use Tarantino\Utils\Database;

class Fiche extends CoreModel
{
    private $realise;
    private $scenario;
    private $decor;
    private $costume;
    private $montage;
    private $date;
    private $budget;
    private $synopsis;

    
        
    public function find($movieId)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `movie` WHERE `id` = " . $movieId;

        $pdoStatement = $pdo->query($sql);

        $movie = $pdoStatement->fetchObject(self::class);

        return $movie;
    }

    public function findAll()
    {
        // On instancie PDO grace à la classe utilitaire Database
        $pdo = Database::getPDO();
        
        // On prépare une requete à la BDD
        $sql = "SELECT * FROM `movie`";

        // On l'envoie à la BDD grace à PDO et on récupère le  résultat sous la forme d'un objet PDOStatement.
        $pdoStatement = $pdo->query($sql);

        // Php n'étant pas capable d'exploiter un résultat sous la forme PDOStatement, on demande à le traduire sous un format exploitable (tableau).
        $movies = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $movies;
    }

    /**
     * Get the value of synopsis
     */ 
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @return  self
     */ 
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of budget
     */ 
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set the value of budget
     *
     * @return  self
     */ 
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of montage
     */ 
    public function getMontage()
    {
        return $this->montage;
    }

    /**
     * Set the value of montage
     *
     * @return  self
     */ 
    public function setMontage($montage)
    {
        $this->montage = $montage;

        return $this;
    }

    /**
     * Get the value of costume
     */ 
    public function getCostume()
    {
        return $this->costume;
    }

    /**
     * Set the value of costume
     *
     * @return  self
     */ 
    public function setCostume($costume)
    {
        $this->costume = $costume;

        return $this;
    }

    /**
     * Get the value of decor
     */ 
    public function getDecor()
    {
        return $this->decor;
    }

    /**
     * Set the value of decor
     *
     * @return  self
     */ 
    public function setDecor($decor)
    {
        $this->decor = $decor;

        return $this;
    }

    /**
     * Get the value of scenario
     */ 
    public function getScenario()
    {
        return $this->scenario;
    }

    /**
     * Set the value of scenario
     *
     * @return  self
     */ 
    public function setScenario($scenario)
    {
        $this->scenario = $scenario;

        return $this;
    }

    /**
     * Get the value of realise
     */ 
    public function getRealise()
    {
        return $this->realise;
    }

    /**
     * Set the value of realise
     *
     * @return  self
     */ 
    public function setRealise($realise)
    {
        $this->realise = $realise;

        return $this;
    }
}