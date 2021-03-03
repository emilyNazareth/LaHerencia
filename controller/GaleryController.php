<?php
//test
class GaleryController {

    public function __construct() {
        $this->view = new View();
    }

    public function showGalery() {
        $this->view->show("galeryView.php", null);
    }

}

?>
