<?php
declare(strict_types=1); // force la levée d'une exception si on passe en paramètre un attribut d'un type différent, donc c'est IMPORTANT
/**
 * Created by PhpStorm.
 * User: ongenae
 * Date: 28/11/17
 * Time: 17:34
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Class LegacyHomepage
 * @package App\Controller
 * @Route("/")
 */
class LegacyHomepage
{

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    // méthode 'magique' appelée quand on exécute la classe ( $c = new LegacyHomepage() ; $c() ; )
    public function __invoke(): Response // s'assure du bon type de retour de la fonction
    {
        return new Response(
            $this->twig->render('homepage.html.twig')
        );
    }

}