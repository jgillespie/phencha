<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class ExtLoader {

    public static function ExtInyection(){
        ExtLoader::BasicCSSInyection();
        ExtLoader::BasicJSInyection();
    }

    public static function BasicJSInyection(){
        $configuration=Configuration::getInstance();
        echo "<noscript>You must enable JavaScript in your browser. Need help? Check this: https://www.google.com/support/adsense/bin/answer.py?hl=en&answer=12654</noscript>";
        echo "<script type=\"text/javascript\" src=\"".$configuration->get("exturl")."/adapter/ext/ext-base.js\"></script>";
        echo "<script type=\"text/javascript\" src=\"".$configuration->get("exturl")."/ext-all.js\"></script>";
    }

    public static function BasicCSSInyection(){
        $configuration=Configuration::getInstance();
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$configuration->get("exturl")."/resources/css/ext-all.css\"/> ";
    }
}
?>
