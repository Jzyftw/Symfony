<?php

namespace sil01\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sil01\VitrineBundle\Entity\Panier;

class PanierController extends Controller {
    
    function contenuPanierAction() 
    {
        //On récupère le panier en session
        $panier = $this->exists();
        $em = $this->getDoctrine()->getManager();
        
        //On associe les ID du panier à un nom d'article
        //foreach ($panier->getContenu() as $key){
            dump($panier->getContenu());
            //$panier->getContenu()[$key] = $em->getRepository('sil01VitrineBundle:Article')->findById($key);    
        //} 
        return $this->render('sil01VitrineBundle:Default:contenuPanier.html.twig',array('panier' => $panier->getContenu()));
    }
    
    //Ajoute l'article identifié par $id en quantité $quantité
    function ajoutArticleAction($id, $quantite){
        $panier = $this->exists();
        //on va chercher le nom et le prix de l'article en BD
        $repository = $this->getDoctrine()->getManager()->getRepository('sil01VitrineBundle:Article');
        $article = $repository->find($id);
        $nom = $article->getName();    
        $prix = $article->getPrice();
        //puis on l'ajoute au panier
        $panier->ajoutArticle($id, $nom, $prix, $quantite);
        return $this->redirectToRoute('sil01_vitrine_contenuPanier');
    }
    
    //Supprime l'article identifié par $id du panier
     function supprimeArticleAction($id){
        $panier = $this->exists();
        $panier->supprimeArticle($id);
        return $this->redirectToRoute('sil01_vitrine_contenuPanier');
    }
    
    //Renvoie le panier, le crée s'il n'existe pas
    function exists(){
        $panier = $this->getRequest()->getSession()->get("panier");
        if(is_null($panier)){
            $panier = new Panier();
            $this->getRequest()->getSession()->set('panier', $panier);
            $panier = $this->getRequest()->getSession()->get("panier");
        }
        return $panier;
    }
    
    function viderPanier(){
        $panier = $this->exists();
        $panier->viderPanier();
    }
    
    
}


