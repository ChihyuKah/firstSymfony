<?php

namespace App\Controller;

use App\Entity\GetInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class LearningController extends AbstractController
{

    /**
     * @Route(name="homepage")
     */

    public function index()
    {


        $unknown = "unknown";



        //if(empty($_POST)){
        $user = $nameDisplay->getName($_POST['name']);
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
            $this->redirectToRoute('learning',['name'=>$username->getName($user)]);

        }
        //resetter
        if (isset($_POST["refresh"])) {
            session_destroy();
            header("refresh");
            unset($_POST);

        }

        return $this->render('learning/index.html.twig', [
            'controller_name' => $sesUsername,
        ]);


    }



    /**
     * @Route("/learning", name="learning")
     */
    public function showName($username)
    {
        $nameDisplay = new GetInfo();
        $user = $nameDisplay->getName($_POST['name']);

        return $this->render('learning/index.html.twig', [
            'controller_name' => 'dfssdf',
        ]);
    }


}




