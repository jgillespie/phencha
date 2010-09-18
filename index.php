<?
include("./phenchaloader.php");
$configuration=  Configuration::getInstance();
$layout=new ExtLayout("complex");
$pageAttributes=new PageAttributes();
$pageAttributes->set("pagetitle", "Titulo");
$pageAttributes->set("exturl", $configuration->get("exturl"));


$tabPanel=new ExtTabPanel("center", false, 0);
$tabPanelItem1=new ExtTabPanelItem('center1','Close Me','--', true, true);
$tabPanelItem2=new ExtTabPanelItem('center2', 'Center Panel','--', false, true);
$tabPanel->addItem($tabPanelItem1);
$tabPanel->addItem($tabPanelItem2);

$pageAttributes->set("centerTabPanel", $tabPanel);

$layout->printLayout($pageAttributes);
?>
