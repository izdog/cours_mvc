<?php 

namespace App\Controller;

class Controller {
    
    private const PATH = ROOT.'/src/View/';
    private const TEMPLATE_PATH = ROOT.'/src/View/template/default.php';

    /**
     *  @param String La vue a afficher
     * @param Array  Données de la BDD sous forme de tableau associatif
     * @return void Permet d'afficher la page web demandé
     */
    protected function render(string $view, array $data = []){
        ob_start();
        extract($data);
        require self::PATH.$view.'.php';
        $content = ob_get_clean();
        require self::TEMPLATE_PATH;
    }

    protected function redirect(string $view){
        $location = 'Location: '.PATH_URL.'/'.$view;
        header($location);
        exit();
    }
}