<?php
require("models/error.php");

class ErrorController extends BaseController {    
    
    public function __construct($action, $urlValues) {
        parent::__construct($action, $urlValues);
        $this->model = new ErrorModel();
    }
    
    protected function badURL() {
        $this->view->present($this->model->badURL());
    }
}

?>
