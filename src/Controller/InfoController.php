<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class InfoController
{
    public function get()
    {
        //echo phpinfo();
       $info=phpinfo();
        
        return new Response(
            $info
            );
    }
}