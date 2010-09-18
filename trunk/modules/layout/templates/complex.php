<?php 
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */

?>
<html>
<head>
  <title><?=$pageAttributes->get("pagetitle")?></title>
  <?
  $cssresource=new CSSResourceLoader("ext-all");
  echo $cssresource->getCode();
  ?>

    <style type="text/css">
    html, body {
        font:normal 12px verdana;
        margin:0;
        padding:0;
        border:0 none;
        overflow:hidden;
        height:100%;
    }
    p {
        margin:5px;
    }
    .settings {
        background-image:url(<?=$pageAttributes->get("exturl")?>/examples/shared/icons/fam/folder_wrench.png);
    }
    .nav {
        background-image:url(<?=$pageAttributes->get("exturl")?>/examples/shared/icons/fam/folder_go.png);
    }
    </style>

    <!-- GC -->
    <!-- LIBS -->
    <?ExtLoader::BasicJSInyection();?>
    <!-- EXAMPLES -->
    <script type="text/javascript" src="<?=$pageAttributes->get("exturl")?>/examples/shared/examples.js"></script>

    <script type="text/javascript">
    Ext.onReady(function(){

        // NOTE: This is an example showing simple state management. During development,
        // it is generally best to disable state management as dynamically-generated ids
        // can change across page loads, leading to unpredictable results.  The developer
        // should ensure that stable state ids are set for stateful components in real apps.
        Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
        <?
            $viewPort=new \Phencha\Viewport();
            $viewPort->setLayout("border");
            // North
            $north=new \Phencha\BoxComponent();
            $north->setRegion("north");
            $north->setHeight(32);
            $spec=new Phencha\Specification("div", null, null, "North HTML");
            $north->setAutoEl($spec);
            $viewPort->addItem($north);

            $south=new Phencha\Panel();
            $south->setRegion("south");
            $south->setContentEl("south");
            //$south->setSplit(true); -- NOT IMPLEMENTED --
            $south->setHeight(100);
            //$south->minSize(100); -- NOT IMPLEMENTED --
            //$south->maxSize(200); -- NOT IMPLEMENTED --
            $south->setCollapsible(true);
            $south->setTitle("South Title");
            $south->setMargins('0 0 0 0');
            $viewPort->addItem($south);

            $east=new Phencha\Panel();
            $east->setRegion("east");
            $east->setContentEl("east");
            //$east->setSplit(true); -- NOT IMPLEMENTED --
            $east->setWidth(225);
            $east->setHeight(100);
            //$east->minSize(175); -- NOT IMPLEMENTED --
            //$east->maxSize(400); -- NOT IMPLEMENTED --
            $east->setCollapsible(true);
            $east->setTitle("East Title");
            $east->setMargins('0 5 0 0');
            $east->setLayout('fit');
            $viewPort->addItem($east);

            $west=new Phencha\Panel();
            $west->setRegion("west");
            $west->setContentEl("west");
            //$west->setSplit(true); -- NOT IMPLEMENTED --
            $west->setWidth(200);
            $west->setHeight(100);
            //$west->minSize(175); -- NOT IMPLEMENTED --
            //$west->maxSize(400); -- NOT IMPLEMENTED --
            $west->setCollapsible(true);
            $west->setTitle("West Title");
            $west->setMargins('0 0 0 5');
            $west->setLayout("{type: 'accordion',animate: true}");

            $westChild1=new Phencha\Panel();
            $westChild1->setContentEl('west');
            $westChild1->setTitle('Navigation');
            $westChild1->setIconCls('nav');
            $westChild1->setBorder(false);
            $west->addItem($westChild1);
            $viewPort->addItem($west);
 
        ?>
        var viewport = 1;
        // get a reference to the HTML element with id "hideit" and add a click listener to it
        Ext.get("hideit").on('click', function(){
            // get a reference to the Panel that was created with id = 'west-panel'
            var w = Ext.getCmp('west-panel');
            // expand or collapse that Panel based on its collapsed property state
            w.collapsed ? w.expand() : w.collapse();
        });
    });
    </script>
</head>
<body>
    <!-- use class="x-hide-display" to prevent a brief flicker of the content -->
    <div id="west" class="x-hide-display">
        <p>Hi. I'm the west panel.</p>
    </div>
    <?=$centerTabPanel->getDIVs();?>
    <?=$eastTabPanel->getDIVs();?>
    <div id="props-panel" class="x-hide-display" style="width:200px;height:200px;overflow:hidden;">
    </div>
    <div id="south" class="x-hide-display">
        <p>south - generally for informational stuff, also could be for status bar</p>
    </div>
</body>
</html>