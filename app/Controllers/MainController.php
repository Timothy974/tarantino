<?php

namespace Tarantino\Controllers;

use Tarantino\Models\Fiche;

class MainController extends CoreController {

    public function home (){

        $ficheModel = new Fiche();
        $movies = $ficheModel->findAll();

        $this->display('homepage', [
            'movies'=> $movies,
        ]);
    }


    public function bio (){
        $this->display('biographie');
    }

    public function quizPage (){
        $this->display('tarantiquiz');
    }

    public function quotePage (){
        $this->display('citations');
    }



    

 
}