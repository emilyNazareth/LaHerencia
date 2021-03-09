<?php

class ContactController {

    public function __construct() {
        $this->view = new View();
    }

    public function showContact() {
        $this->view->show("contactView.php", null);
    }

}

?>
