<?php

class View {    
    
    protected $viewFile;

    public function __construct($controllerClass, $action) {
        $controllerName = str_replace("Controller", "", $controllerClass);
        $this->viewFile = "views/" . $controllerName . "/" . $action . ".php";
    }

    /**
    * Views by default name have same name as action method in controller
    * e.g. public function index() in HomeController has view index.php in views
    **/
    public function present($model, $template = "master") {
        $templateFile = "views/" . $template . ".php";
        if (file_exists($this->viewFile)) {
            if ($template) {
                if (file_exists($templateFile)) {
                    require($templateFile);
                } else {
                    require("views/error/badtemplate.php");
                }
            } else {
                require($this->viewFile);
            }
        } else {
            require("views/error/badview.php");
        }
    }
}

?>