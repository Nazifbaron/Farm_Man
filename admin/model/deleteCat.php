<?php
session_start();
require_once "connexion.php";

if (isset($_GET['supprimer'])) {
    $categorie_id = $_GET['supprimer'];

    // Vérifier s'il y a des lignes enfants dans la table detailCommande
    $req_check = $bdd->prepare('SELECT COUNT(*) FROM produit WHERE Categorie_idCat = ?');
    $req_check->execute(array($categorie_id));
    $count = $req_check->fetchColumn();

    if ($count > 0) {
        $_SESSION['error'] = 'Impossible de supprimer la categorie car il est utilisé dans la table produit.';
        header('location: ../view/categorie.php');
        exit;
    }

    // Supprimer la ligne parent dans la table produit
    $req_delete = $bdd->prepare('DELETE FROM categorie WHERE id = ?');
    $req_delete->execute(array($categorie_id));

    if ($req_delete->rowCount() > 0) {
        $_SESSION['success'] = 'Catégorie supprimé avec succès.';
    } else {
        $_SESSION['error'] = 'Erreur lors de la suppression du categorie.';
    }

    header('location: ../view/categorie.php');
    exit;
}

?>
