<?php

namespace Tarantino\Controllers;

use Tarantino\Models\Fiche;

class FicheController extends CoreController {
    
    public function fiche ($params){

        $ficheModel = new Fiche() ;
        $movies = $ficheModel->find($params['id']);


        $this->display('fiche', [
            'movies'=> $movies,
        ]);
    
    }
}