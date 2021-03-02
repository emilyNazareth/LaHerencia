<?php

class ProductsController {

    public function __construct() {
        $this->view = new View();
    }

    public function showProducts() {
        $this->view->show("productsView.php", null);
    }

}

?>