<?php

class ErrorModel extends BaseModel {
    public function badURL() {
        $this->set("title","404 Error -- Bad URL");
    }
}

?>
