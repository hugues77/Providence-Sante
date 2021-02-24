<?php
//on demarre la session
session_start();
//connexion local

  // $dbhost = 'localhost';
  // $dbname = 'providence';
  // $dbuser ='root';
  // $dbpassword ='root';

  // try {
  //     $connexion = new PDO('mysql:host='.$dbhost.'; dbname='.$dbname, $dbuser, $dbpassword, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING));
  // } catch (PDOException $e) {
  //     //throw $th;
  //     die("Erreur lors de la connexion de la base de données; Vérifier");
  // }

/**
 * Connexion distant au serveur
 */
  $dbhost = '91.216.107.183';
  $dbname = 'provi1509736';
  $dbuser ='provi1509736';
  $dbpassword ='yth2o8sykv';

  try {
      $connexion = new PDO('mysql:host='.$dbhost.'; dbname='.$dbname, $dbuser, $dbpassword, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING));
  } catch (PDOException $e) {
      //throw $th;
      die("Erreur lors de la connexion de la base de données; Vérifier");
  }