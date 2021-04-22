<?php

class MainController {

    public function home (){
        $this->display('homepage');
    }

    public function fiche (){
        
        $this->display('fiche');
    }

    public function bio (){
        $this->display('biographie');
    }

    public function quizPage (){
        $this->display('tarantiquiz');
    }

    public function display ($viewName, $viewVars=[]){

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/'.$viewName.'.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }

 
}