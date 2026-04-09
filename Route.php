<?php
class Route
{
    static function getRoute($route)
    {
        if($route === '/myserver/get')
            require 'get.php';
        elseif($route === '/myserver/post')
            require 'post.php';
        elseif($route === '/myserver/test')
            require 'test.php';
        
        elseif($route === '/myserver/index_registration')
            require 'index_registration.php';
        elseif($route === '/myserver/index_cpu')
            require 'index_cpu.php';
        elseif($route === '/myserver/index_graphicscards')
            require 'index_graphicscards.php';
        elseif($route === '/myserver/index_login')
            require 'index_login.php';
        elseif($route === '/myserver/index_motherboards')
            require 'index_motherboards.php';
        elseif($route === '/myserver/index_ram')
            require 'index_ram.php';


        else
            require '404.php';
    }
}