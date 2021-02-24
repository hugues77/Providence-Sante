<?php
require_once 'main-function.php';

//function pour les messages d'alerts
if (!function_exists('set_flash')) {
    # function pour les messages alerts
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;
    }
}

//function pour rediriger les pages
if(!function_exists('redirect')){
    function redirect($page){
        header('Location:' .$page);
        exit();
    }
}

/** verifier si admin existe */
function user_exist($email,$pseudo){
    global $connexion;
    $array = [
        'email'    =>$email,
        'pseudo' =>$pseudo
    ];


    $sql =("SELECT * FROM users WHERE email = :email OR pseudo = :pseudo ");
    $req = $connexion->prepare($sql);
    $req->execute($array);
    $result = $req->fetchAll(PDO::FETCH_OBJ);
    $exist = $req->rowCount();

    return $exist;
} 

//enregistrer users
if(!function_exists('is_register_users')){
    function is_register_users($a, $b, $c, $d, $e){
        global $connexion;
        $sql = (" INSERT INTO users(email, pseudo,type_membre,date_naissance,token ) VALUES(?,?,?,?, ?)");
        $req = $connexion->prepare($sql);
        return $res = $req->execute(array($a, $b, $c, $d, $e));
    }
} 

//enregistrer membre nom et prenom
if(!function_exists('insert_membre')){
    function insert_membre($a, $b){
        global $connexion;
        $array = [
            'nom'        =>$a,
            'email'      =>$_SESSION['email'],
            'prenom'     =>$b
        ];
        $sql = ("UPDATE users SET nom = :nom, prenom= :prenom WHERE email= :email");
        $req = $connexion->prepare($sql);
        $success = $req->execute($array);
        return $success;
    }
} 
//connexion login
/** verifier si admin existe */
function is_login_user($email,$password){
    global $connexion;
    $array = [
        'email'    =>$email,
        'password' =>sha1($password)
    ];


    $sql =("SELECT * FROM users WHERE email = :email AND password = :password ");
    $req = $connexion->prepare($sql);
    $req->execute($array);
    $result = $req->fetchAll(PDO::FETCH_OBJ);
    $exist = $req->rowCount();

    return $exist;
}

/** recuperer les infos de pour la session USER */
function is_connected_user($email,$password){
    global $connexion;
    $array = [
        'email'    =>$email,
        'password' =>sha1($password)
    ];

    $sql =("SELECT * FROM users WHERE email = :email AND password = :password ");
    $req = $connexion->prepare($sql);
    $req->execute($array);
    $result = $req->fetchobject();
    return $result;
}

/**
 * Vérifier si token est vrai dans la base
 */
if(!function_exists('activer_compte_user')){
    function activer_compte_user($token){
        global $connexion;
        $array = [
            'token'    =>$token
        ];
    
    
        $sql =("SELECT token FROM users WHERE token = :token");
        $req = $connexion->prepare($sql);
        $req->execute($array);
        $result = $req->fetchAll(PDO::FETCH_OBJ);
        $exist = $req->rowCount();
    
        return $exist;
    }
}

/**
 * remettre le token à zéro après vérification
 */
if(!function_exists('token_zero')){
    function token_zero(){
        global $connexion;
        $array = [
            'email'    =>$_SESSION['email']
        ];
    
        $sql =("UPDATE users SET token='' WHERE email = :email");
        $req = $connexion->prepare($sql);
        return $req->execute($array);
    }
}

/** recuperer juste le  Pseudo rediriger user vers le password */
function recup_pseudo_user(){
    global $connexion;
    $array = [
        'email'    =>$_SESSION['email']
    ];

    $sql =("SELECT pseudo, image FROM users WHERE email = :email");
    $req = $connexion->prepare($sql);
    $req->execute($array);
    $result = $req->fetchobject();
    return $result;
}

/**function pour envoyer le fichier et update mot de passe dans la base */

if(!function_exists('send_file')){
    function send_file($password1,$photo){
        global $connexion;
        $array = [
            'password'  =>sha1($password1),
            'email'     =>$_SESSION['email'],
            'image'     =>$photo
        ];
        $sql = ("UPDATE users SET password = :password, image= :image WHERE email= :email");
        $req = $connexion->prepare($sql);
        $success = $req->execute($array);
        return $success;
    }
}
/**
 * function pour envoyer des photos de la gallery
 */
if(!function_exists('send_gallery')){
    function send_gallery($nom,$nouveau_nom, $description){
        global $connexion;
        $sql = "INSERT INTO gallery(nom,image,description) VALUES (?,?,?)";
        $req = $connexion->prepare($sql);
        $success = $req->execute(array($nom,$nouveau_nom,$description));
        return $success;
    }
}

