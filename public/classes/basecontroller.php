<?php

abstract class BaseController {
    
    protected $urlValues;
    protected $action;
    protected $model;
    protected $view;
    
    public function __construct($action, $urlValues) {
        $this->action = $action;
        $this->urlValues = $urlValues;
        $this->view = new View(get_class($this), $action);
    }

    public function execute($method) {
        return $method == "POST" ? $this->{"post_" . $this->action}($_POST) : $this->{$this->action}();
    }

    public function redirect($action) {
        header("Location: $action");
    }
}

?>