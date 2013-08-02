<?php

function parame($param) { return $param; }

parame(function()
{
    if ($dir = opendir(dirname(__FILE__)))
    {
        while (($file = readdir($dir)) !== false) 
        {
            $pattern = '/function/';
            if (preg_match($pattern,$file)) 
            {
                locate_template(array($file),true,true);
            }
        } 
        closedir($dir);
    } else {
        return false;
    }
})->__invoke();