<?php

namespace App\Controller;

use App\Entity\GetInfo;
use mysql_xdevapi\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route(name="homepage")
     */

    public function index()
    {


        $unknown = "unknown";



        //if(empty($_POST)){
            //$user = $nameDisplay->getName($_POST['name']);
//            $testuser =
//            $_POST['name'] = 'unknown';
            //echo "empty post";

        //}

        $username = new GetInfo();

        if (isset($_POST)){
            $sesUsername = $_SESSION['username'] = $unknown;


//            $sesUsername = $_POST['username'];
           echo "issetPost en session";

        }

        if (isset($_POST['submit'])) {
           echo "lowmo";
           $this->redirectToRoute(learning,[$sesUsername->getInfo]);

        }
        //resetter
        if (isset($_POST["refresh"])) {
            session_destroy();
            header("refresh");
            unset($_POST);

        }

        return $this->render('homepage/index.html.twig', [
            'controller_name' => $sesUsername,
        ]);


    }
}

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();
