<?php

class HistoryController {

    public function __construct() {
        $this->view = new View();
    }

    public function showHistory() {
        $this->view->show("historyView.php", null);
    }

}

?>
