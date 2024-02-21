<?php 

if ((isset($_REQUEST["controller"]))) {
    if ($_REQUEST["controller"]=="demande") {
        require_once("../controllers/demande.controller.php");
    }elseif($_REQUEST["controller"]=="securite"){
        require_once("../controllers/securite.controller.php");
    }
} else {
    require_once("../controllers/securite.controller.php");
}
