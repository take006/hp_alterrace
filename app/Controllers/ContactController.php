<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once BASE_PATH . 'app/Models/Contact.php';

class ContactController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $model = new Contact();
            $model->saveMessage($name, $email, $message);

            header('Location: ' . BASE_URL . 'app/Views/contact/thanks.php');
            exit;
        }
    }
}

$controller = new ContactController();
$controller->handleRequest();

?>

