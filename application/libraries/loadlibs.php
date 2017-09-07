<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.09.2017
 * Time: 19:34
 */
class loadlibs
{
    public $libsArray = array(
        array("code" => "jquery 3", "type" => "js", "url" => "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"),
        array("code" => "jquery 2", "type" => "js", "url" => "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"),
        array("code" => "jquery 1", "type" => "js", "url" => "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"),

        array("code" => "bootstrap 4 js", "type" => "js", "url" => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"),
        array("code" => "bootstrap 4 css", "type" => "css", "url" => "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"),

        array("code" => "popper 1", "type" => "js", "url" => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"),
    );

    function addLibs($libs){
        $retVal = '';

        foreach ($libs as $item){
            foreach ($this->libsArray as $lib){
                if($lib["code"] == $item){
                    if($lib["type"] == "js")
                        $retVal .= "<script type=\"text/javascript\" src=\"".$lib["url"]."\"></script>"."\n";
                    else if($lib["type"] == "css"){
                        $retVal .= "<link rel=\"stylesheet\" href=\"".$lib["url"]."\">"."\n";
                    }
                }
            }
        }

        return $retVal;
    }
}