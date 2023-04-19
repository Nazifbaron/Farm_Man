<?php
session_start();
require_once "connexion.php";
    if(isset($_GET['supprimer'])){
        $id=$_GET['supprimer'];
        $req= $bdd->prepare('DELETE FROM produit WHERE id = ?');
        $req->execute(array($id));
        if ($req){
            $_SESSION['success'] = 'Bien supprimé';
        }
        else {
            $_SESSION['error'] = 'Error de suppression';
        }
        
        //echo "<script>alert('Bien supprimé'); window.location = '../view/produit.php'</script>";
        header('location: ../view/produit.php');
    }
?>