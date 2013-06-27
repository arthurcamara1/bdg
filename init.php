<?php

require_once 'lib/autoload.php';

$possible_db = array('brasil');

if(!isset($_SESSION['sgbd']) || in_array($_SESSION['sgbd'], $possible_db) === false ){
   if(isset($_GET['sgbd'])) $_SESSION['sgbd'] = $_GET['sgbd'];
   else { $_SESSION['sgbd'] = "brasil"; }
}

$dir   = str_replace("\\", "/", dirname(__FILE__));
$doc   = str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']);
$pj_name = str_replace(array($doc, "config", "//"), array("", "", "/"), $dir);

//nome do diretorio onde estara o projeto
if(!defined("PROJECT")) define('PROJECT', $pj_name);

$project = (PROJECT == "") ? "": PROJECT;
define('URL',  "http://".$_SERVER['SERVER_NAME'] . "$project/index.php");

require_once 'lib/processa.php';

?>