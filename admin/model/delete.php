<?php
session_start();
require_once "connexion.php";

if (isset($_GET['supprimer'])) {
    $produit_id = $_GET['supprimer'];

    // Vérifier s'il y a des lignes enfants dans la table detailCommande
    $req_check = $bdd->prepare('SELECT COUNT(*) FROM detailCommande WHERE Produit_id = ?');
    $req_check->execute(array($produit_id));
    $count = $req_check->fetchColumn();

    if ($count > 0) {
        $_SESSION['error'] = 'Impossible de supprimer le produit car il est utilisé dans la table detailCommande.';
        header('location: ../view/produit.php');
        exit;
    }

    // Supprimer la ligne parent dans la table produit
    $req_delete = $bdd->prepare('DELETE FROM produit WHERE id = ?');
    $req_delete->execute(array($produit_id));

    if ($req_delete->rowCount() > 0) {
        $_SESSION['success'] = 'Produit supprimé avec succès.';
    } else {
        $_SESSION['error'] = 'Erreur lors de la suppression du produit.';
    }

    header('location: ../view/produit.php');
    exit;
}

?>
