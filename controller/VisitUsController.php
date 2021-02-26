<?php

class VisitUSController {

    public function __construct() {
        $this->view = new View();
    }

    public function showVisitUs() {
        $this->view->show("visitUsView.php", null);
    }

}

?>
