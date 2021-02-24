<?php
//require_once 'main-function.php';
/** afficher tous les photos depuis table gallery */
if(!function_exists('gallery')){
    function gallery(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM gallery ORDER BY id DESC LIMIT  0,6");
        $resultat = $sql->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
        
    }
}

/**
 * function pour la valeur partage
 */
if(!function_exists('valeur_partage')){
    function valeur_partage(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM valeur WHERE nom = 'Partage' AND statut='1' ORDER BY id DESC");
        $res = $sql->fetchobject();
        return $res;
    }
}

/**
 * function pour la valeur Équité
 */
if(!function_exists('valeur_equite')){
    function valeur_equite(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM valeur WHERE nom = 'Équité' AND statut='1' ORDER BY id DESC");
        $res = $sql->fetchobject();
        return $res;
    }
}

/**
 * function pour la valeur Humain
 */
if(!function_exists('valeur_humain')){
    function valeur_humain(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM valeur WHERE nom = 'Passionnément Humain' AND statut='1' ORDER BY id DESC");
        $res = $sql->fetchobject();
        return $res;
    }
}

/** afficher tous lestemoignages depuis table temoignage */
if(!function_exists('temoignages')){
    function temoignages(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM temoignage ORDER BY id DESC LIMIT  0,3");
        $resultat = $sql->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
        
    }
}

/** afficher tous les images du diapo/ carroussels depuis table carrou */
if(!function_exists('carrou')){
    function carrou(){
        global $connexion;
        $sql = $connexion->query("SELECT * FROM carrou ORDER BY id DESC LIMIT  0,5");
        $resultat = $sql->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
        
    }
}