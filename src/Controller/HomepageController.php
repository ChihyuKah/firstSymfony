<?php

namespace App\Controller;

use App\Entity\GetInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route(name="homepage")
     */

    public function index()
    {
        $nameDisplay = new GetInfo();


       $user = $nameDisplay->getName($_POST['name']);


        return $this->render('homepage/index.html.twig', [
            'controller_name' => $user
        ]);


    }
//    public $test='testname';
//    public function displayName()
//    {
//        $nameDisplay = new GetInfo();
//        $nameDisplay->getName();
//
//        var_dump($nameDisplay);
//
//    }


}

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
}

whatIsHappening();
