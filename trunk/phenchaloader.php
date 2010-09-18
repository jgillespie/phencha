<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
$appRoot="c:/xampp/htdocs/phencha";
include($appRoot."/configuration.class.php");
$configuration=Configuration::getInstance();
$configuration->set("apppath",$appRoot);
$configuration->set("appurl","http://localhost/phencha");
$configuration->set("modulespath",$configuration->get("apppath")."/modules");
$configuration->set("extpath",$configuration->get("apppath")."/sencha/ext");
$configuration->set("exturl",$configuration->get("appurl")."/sencha/ext");

include($configuration->get("modulespath")."/loader/loader.php");
include($configuration->get("modulespath")."/layout/loader.php");
include($configuration->get("modulespath")."/diarma/loader.php");
include($configuration->get("modulespath")."/tabpanel/loader.php");

?>
