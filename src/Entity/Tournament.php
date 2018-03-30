<?php
/**
 * Created by PhpStorm.
 * User: ongenae
 * Date: 29/11/17
 * Time: 11:20
 */
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class Tournament
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource
 */
class Tournament
{

    /**
     * Mieux vaut utiliser des uid au lieu de l'autoincrément d'id
     * @Assert\Uuid
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @var
     * @ORM\Column(type="datetime")
     */
    public $createdAt;

}