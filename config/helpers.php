<?php 
function loadView(string $view,array $data=[],$layout="base"){
     ob_start();
     extract($data);
    require_once("../views/".$view);
     $contentForView=ob_get_clean();
    require_once("../views/layout/".$layout.".layout.php");
}