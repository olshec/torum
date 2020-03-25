<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use phpDocumentor\Reflection\Types\Array_;



class LuckyController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

//         return $this->redirectToRoute('homepage');
        
//         return new Response(
//             '<html><body>Lucky number: '.$number.'</body></html>'
            
//         );
        $user=array();
        $user['isLoggedIn'] = true;
        $user['name'] = 'Lilu';
//         return $this->render('number.html.twig', ['number' => $number,
//             'page_title'=>'Lucky','user'=>$user
//         ]);
        
        return $this->render('topgym/index.html');
    }
}