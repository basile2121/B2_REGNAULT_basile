<?php

namespace App\Controller;

//Pour les Entités
use App\Entity\BandeDessinees;
use App\Entity\Auteurs;
use App\Repository\BandeDessineesRepository;
use App\Repository\AuteursRepository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;    // objet REQUEST
use Symfony\Component\HttpFoundation\Response;    // objet RESPONSE
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use function Cassandra\Type;

class BandeDessineeController extends AbstractController
{

    /**
     * @Route ("/bandeDessinnee" , name="bandeDessinnee_index" , methods={"GET"})
     */
    public function index()
    {
        return $this->render('layout_home.html.twig');
    }

    /**
     * @Route("/list/bandeDessinnee", name="bandeDessinnee_list", methods={"GET"})
     */
    public function list(Request $request)
    {
        $bandeDessinnee = $this->getDoctrine()->getRepository(BandeDessinees::class)->findBy([],['typeProduit' => 'ASC','stock' =>'ASC']);

        return $this->render('admin/produit/showProduits.html.twig', ['bandeDessinnee' => $bandeDessinnee]);
    }


    /**
     * @Route ("/add/bandeDessinnee_add" , name="bandeDessinnee_add" , methods={"GET" , "POST"})
     */
    public function add()
    {
        return null;
    }

    /**
     * @Route ("/delete/bandeDessinnee_delete" , name="bandeDessinnee_delete" , methods={"DELETE"})
     */
    public function delete()
    {
        return null;
    }

    /**
     * @Route ("/edit/{id}/bandeDessinnee_edit" , name="bandeDessinnee_edit" , methods={"GET"})
     */
    public function edit()
    {
        return null;
    }

    /**
     * @Route ("/edit/bandeDessinnee_edit" , name="bandeDessinnee_edit_valid" , methods={"PUT"})
     */
    public function edit2()
    {
        return null;
    }

}
