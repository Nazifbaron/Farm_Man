<?php

    if (isset($_POST['search'])) {
        if (!empty($_POST['table_search'])) {
            $search = htmlspecialchars($_POST['table_search']);
    
            $cleanedSearch = preg_replace("#[^a-zA-Z0-9]#i", "", $search); // Nettoyage du mot-clé
    
            $sql = "SELECT * FROM commande WHERE montant LIKE ? OR dateCmd LIKE ? OR payer LIKE ? OR adrLiv LIKE ? OR Client_idCli LIKE ? "; // Requête de recherche
    
            require('connexion.php'); // Inclusion du fichier de connexion à la base de données            
            $stmt = $bdd->prepare($sql);
            $params = array('%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%', '%' . $cleanedSearch . '%'); // Paramètres pour la requête préparée
            $stmt->execute($params); // Exécution de la requête de recherche
        
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupération des résultats de la recherche
    
            if (count($results) > 0) {
                // Affichage des résultats
                foreach ($results as $result) {
                    // Afficher les informations du commande
                    echo $result['montant'] . ', ' . $result['dateCmd'] . ', ' . $result['payer'] . ',' . $result['adrLiv'] . ',' . $result['Client_idCli'] .'<br>';
                }
            } else {
                echo "Aucune commande trouvé.";
            }
        } else {
            echo "Veuillez entrer un produit à rechercher.";
        }
    }
?>