<?php

class AchievementsController {

    public function __construct() {
        $this->view = new View();
    }

    public function showAchievements() {
        $this->view->show("achievementsView.php", null);
    }

}

?>