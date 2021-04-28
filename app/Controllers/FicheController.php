<?php

namespace Tarantino\Controllers;

use Tarantino\Models\Fiche;
use Tarantino\Models\Soundtrack;

class FicheController extends CoreController {
    
    public function fiche ($params){

        $ficheModel = new Fiche() ;
        $movies = $ficheModel->find($params['id']);

        $soundtrackModel = new Soundtrack();
        $songs = $soundtrackModel->findAll($params['id']);



        $this->display('fiche', [
            'id' => $params['id'],
            'movies'=> $movies,
            'songs' => $songs
        ]);
    
    }
}