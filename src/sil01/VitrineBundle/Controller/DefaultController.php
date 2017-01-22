<?php

namespace sil01\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sil01VitrineBundle:Default:index.html.twig',array('name' => $name));
    }
    
    public function mentionsAction()
    {
        return $this->render('sil01VitrineBundle:Default:mentions.html.twig');
    }
    
    public function accueilAction()
    {
        return $this->render('sil01VitrineBundle:Default:accueil.html.twig');
    }
    
    public function catalogueAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('sil01VitrineBundle:Categorie')->findAll();    
        return $this->render('sil01VitrineBundle:Default:catalogue.html.twig', array(
            'categories' => $categories));
    }
    
    public function articlesParCategorieAction($id)
    {
       $em = $this->getDoctrine()->getManager(); 
       $Articles = $em->getRepository('sil01VitrineBundle:Article')->findByCategory($id);
       $cat = $em->getRepository('sil01VitrineBundle:Article')->findById($id);
       return $this->render('sil01VitrineBundle:Default:articlesParCategorie.html.twig', 
               array('Articles' => $Articles, 'Categorie' => $cat));
    }
    
}
