<?php
session_start();
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
               
                $req = $bdd -> prepare('INSERT INTO commande(montant, payer, adrLiv, Client_idCli) VALUES (?,?,?,?)');
                $req->execute(array($amount, $paid, $adress, $_SESSION['id']));

                $req = $bdd ->query('SELECT * FROM commande WHERE idCmd=(SELECT max(idCmd) FROM commande)');
                $data = $req->fetch();
                $orderId = $data['idCmd'];

                
                $email = null;
                $email = $_SESSION['email'];
                
                sendConfirmationEmail($orderId,$email);
                
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
                $req = $bdd->prepare('INSERT INTO detailCommande(Produit_id, Commande_idCmd, quantite) VALUES(?,?,?)');
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
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    
// Fonction pour envoyer l'e-mail de confirmation
function sendConfirmationEmail($orderId,$email) {

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
    // Le code pour configurer PHPMailer et envoyer l'e-mail de confirmation
    $phpmailer = new PHPMailer(true);

    try {
        // Configuration des paramètres SMTP
        $phpmailer->isSMTP(); 
		$phpmailer->Host = 'smtp.gmail.com';
		$phpmailer->SMTPAuth = true; 
		$phpmailer->Username = "poultryfarm229@gmail.com";
		$phpmailer->Password ="onfdgicsjdahyoug";
		$phpmailer->SMTPSecure = 'ssl'; // ssl is depracated
		$phpmailer->Port = 465; // TLS only

        // Configuration du contenu de l'e-mail de confirmation
        $phpmailer->setFrom("poultryfarm229@gmail.com");
		$phpmailer->addAddress($email);
		$phpmailer->isHTML(true);
		$phpmailer->Subject ="Agro Farm";
        $phpmailer->Body="Votre commande (ID: $orderId) a été confirmée.";

        // Envoi de l'e-mail
        $phpmailer->Send();

        echo "L'e-mail de confirmation a été envoyé avec succès.";
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail de confirmation : " . $phpmailer->ErrorInfo;
    }
    		
}

?>