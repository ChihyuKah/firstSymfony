<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GetInfoRepository")
 */
class GetInfo
{
    /**
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $name;

    public function getName($name){
        $this->name = $name;
        return $this->name;
    }


}

