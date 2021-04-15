<?php
//Gestion de la base de données
//recherche utilisateur
function rechercheUser ($ident, $mdp){
    $pdo = accesBdd();
    $user = $pdo->prepare('SELECT * FROM utilisateur WHERE identifiant=? AND motDePasse=?'); 
    $user->execute(array($ident, $mdp));
    if ($user->rowCount()==1){
        return $user->fetch();
    }
    else {
        return null;
    }
}
//listee des utilisateurs
function listeUtilisateurs () {
    $pdo = accesBdd();
    $users = $pdo->query('SELECT * FROM utilisateur');
    $users->query();
    return $users;
}

//listes des salles
function listeSalles() {
    $pdo = accesBdd();
    $salles = $pdo->query('SELECT * FROM salle'); 
    $salles->query();
    return $salles;
}
//recherche une salle avec son id
function salleById ($ident) {
    $pdo = accesBdd();
    $salle = $pdo->prepare('SELECT * FROM salle WHERE id=?');
    $user->execute(array($ident));
    if ($salle->rowCount()==1){
        return $salle->fetch();
    } 
 else {
        return null;
    }
}
//recherche salle avec capacité maximal
function listeSallesCapaMax($cap){
    $pdo = accesBdd();
    $salle = $pdo->prepare('SELECT * FROM salle WHERE capacite<=?');
    $user->execute(array($cap));
    if ($salle->rowCount()>0){
        return $salle->fetchAll();
    } 
    else {
        return null;
    }
}

function accesBdd(){
    $nomBase = 'mysql:host=localhost;dbname=projetchy;charset=utf8';
    $utilisateur = 'root';
    $motDePasse = '';
    $pdo = new PDO($nomBase, $utilisateur, $motDePasse);
    return $pdo;
}