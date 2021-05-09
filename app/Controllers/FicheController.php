<?php

namespace Tarantino\Controllers;

use Tarantino\Models\Actors;
use Tarantino\Models\Fiche;
use Tarantino\Models\Soundtrack;

class FicheController extends CoreController {
    
    public function fiche ($params){

        $ficheModel = new Fiche() ;
        $movies = $ficheModel->find($params['id']);

        $soundtrackModel = new Soundtrack();
        $songs = $soundtrackModel->findAll($params['id']);

        $actorsModel = new Actors();
        $actors = $actorsModel->findAllByMovie($params['id']);




        $this->display('fiche', [
            'id' => $params['id'],
            'movies'=> $movies,
            'songs' => $songs,
            'actors' => $actors
        ]);
    
    }
}