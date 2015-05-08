<?php

require("models/home.php");

class HomeController extends BaseController {
    
    public function __construct($action, $urlValues) {
    	parent::__construct($action, $urlValues);
    	$this->model = new HomeModel();
    }

    protected function index() {
        $this->view->present($this->model);
    }

    protected function help() {
        $this->view->present($this->model);
    }

    protected function post_help() {
        $this->view->present($this->model);
    }
}

?>
