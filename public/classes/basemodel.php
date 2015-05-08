<?php

class BaseModel {

    public function __construct() {
	    $this->setCommonData();
    }

    protected function setCommonData() {
        $this->set("menu", array("Home" => "/home", "Help" => "home/help"));
        $this->set("footer", array("Home" => "/home", "Help" => "home/help"));
    }

    public function set($name, $value) {
        $this->$name = $value;
    }
    
    public function get($name) {
        return isset($this->{$name}) ? $this->{$name} : null;
    }
}

?>
