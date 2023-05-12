<?php

    if (isset($_POST['search'])) {
        if (!empty($_POST['table_search'])) {
            $search = htmlspecialchars($_POST['table_search']);
    
            $cleanedSearch = preg_replace("#[^a-zA-Z0-9]#i", "", $search); // Nettoyage du mot-clé
    
            $sql = "SELECT * FROM detailSortie WHERE Produit_id LIKE ? OR Sortie_idS LIKE ? OR quantite LIKE ? "; // Requête de recherche
    
            require('connexion.php'); // Inclusion du fichier de connexion à la base de données            
            $stmt = $bdd->prepare($sql);
            $params = array('%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%'); // Paramètres pour la requête préparée
            $stmt->execute($params); // Exécution de la requête de recherche
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupération des résultats de la recherche
    
            if (count($results) > 0) {
                // Affichage des résultats
                foreach ($results as $result) {
                    // Afficher les informations du detailSortie
                    echo $result['Produit_id'] . ', ' . $result['Sortie_idS'] . ', ' . $result['quantite'] . '<br>';
                }
            } else {
                echo "Aucun detailSortie trouvé.";
            }
        } else {
            echo "Veuillez entrer un detailSortie à rechercher.";
        }
    }
?>