<?php
$emailDefaut = "bbjetaime@gmail.com";
$passwordDefaut = "bbjetaime";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $emailDefaut && $password === $passwordDefaut) {
        $message = "Connecté avec succès. Bienvenu(e) $nom $prenom";
        header("Location: connexion.php?message=" . urlencode($message) . "&type=success");
    } else {
        $message = "Mot de passe erroné";
        header("Location: connexion.php?message=" . urlencode($message) . "&type=error");
    }
    exit();
}
?>
