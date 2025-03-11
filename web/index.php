<?php

/*##################################################
=   depurar errores
###################################################*/

ini_set('display_errors',1);
ini_set("log_errors",1);
ini_set("error_log","C:/xampp/htdocs/TesisEcommerce/web/php_error_log.txt");
require_once "controllers/controller.template.php";
$index= new TemplateController();
$index->index();
?>