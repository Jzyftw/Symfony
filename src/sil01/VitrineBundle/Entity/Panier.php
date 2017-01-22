<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sil01\VitrineBundle\Entity;

class Panier {
    
    private $contenu;
    //Tableau - contenu[i] = tableau indiquant le nom, le prix et la quantité d'articles d'Id i)
    public function __construct() {
        $this->contenu = [];
    }
    public function getContenu() {
        return $this->contenu;
    }
    public function ajoutArticle ($articleId, $nomArticle, $prix, $qte) {
    // ajoute l'article $articleId au contenu, en quantité $qte
    // (vérifier si l'article n'y est pas déjà)
        if(array_key_exists($articleId, $this->contenu)){
            $this->contenu[$articleId]['quantité'] = $this->contenu[$articleId]['quantité'] + $qte ; 
            $this->contenu[$articleId]['prix'] = $this->contenu[$articleId]['quantité'] * $this->contenu[$articleId]['prix'];
        }
        else{ //l'article n'existe pas
            $this->contenu[$articleId] = array(
                'id' => $articleId,
                'nom' => $nomArticle, 
                'quantité' => $qte,
                'prix' => $prix
            );
        }
    }
        
    public function supprimeArticle($articleId) {
    // supprimer l'article $articleId du contenu
        unset($this->contenu[$articleId]);
    }
    public function viderPanier() {
    // vide le contenu
        unset($this->contenu);
}

}