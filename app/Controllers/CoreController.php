<?php

namespace Tarantino\Controllers;

class CoreController {


    /**
     * Methode permettant de gérer l'affichage des templates
     *
     * @param [type] $viewName
     * @param array $viewVars
     * @return void
     */
    public function display ($viewName, $viewVars=[]){

        global $router;

        extract($viewVars);

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/'.$viewName.'.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }

    /**
     * Méthode permettant de générer des URL absolues d'après un nom de page
     *
     * @param string $pageName Nom de la page
     * @return string
     */
    public function generateUrl($pageName)
    {

        // On génère une URL absolue en concaténant : le nom de domaine (localhost) + les dossiers dans lesquels sont rangés mon projet + le nom de la page
        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['BASE_URI'] . '/' . $pageName;
        
        return $url;
    }
}