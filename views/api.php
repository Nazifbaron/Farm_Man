<?php
    $action = $_GET['action'];
    $action();

    

    function send_order(){
        $request_method = $_SERVER['REQUEST_METHOD'];

        if ($request_method=='POST'){

            $amount = $_POST['amount'];
            $paid = $_POST['paid'];
            $adress = $_POST['adress'];

            require_once('../model/connexion.php');

           
            try{

                $req = $bdd -> prepare('INSERT INTO commande(montant, payer, adrLiv,  Client_idCli ) VALUES (?,?,?,?)');
                session_start();
                $req->execute(array($amount, $paid, $adress, $_SESSION['id']?$_SESSION['id']:1));

                $req = $bdd ->query('SELECT * FROM commande WHERE idCmd=(SELECT max(idCmd) FROM commande)');
                $data = $req->fetch();

                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                http_response_code(201);

                echo json_encode($data);


            }
            catch(Exception $e){
                
                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                http_response_code(500);
                
                echo json_encode([
                    'message'=>$e
                ]);

            }

        }

    }

    function order_content(){
        $request_method = $_SERVER['REQUEST_METHOD'];
        if($request_method=='POST'){
            $product = $_POST['product'];
            $order = $_POST['order'];
            $quantity = $_POST['quantity'];
            require_once('../model/connexion.php');
            
            try{
                $req = $bdd->prepare('INSERT INTO detailCommande(Produit_idPr, Commande_idCmd, quantite) VALUES(?,?,?)');
                $req->execute(array($product, $order, $quantity));
                
                $req = $bdd ->query('SELECT * FROM detailCommande WHERE id=(SELECT max(id) FROM detailCommande)');
                $data = $req->fetch();

                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                http_response_code(201);

                echo json_encode($data);

            }
            catch(Exception $e){

                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                http_response_code(500);
                
                echo json_encode([
                    'message'=>$e
                ]);

            }
        }
    }

?>