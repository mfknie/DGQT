<?php
echo("hello");
$name = $content = $email = $phone = "";
$namerr = $emailerr = $contenterr = "";

$phone = htmlspecialchars($_POST[phone]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameerr = "A name is required.";
    }
    else {
        $name = htmlspecialchars($_POST[name]); 
    }
    if(empty($_POST["email"])) {
        $emailerr = "An email is required.";
    }
    else {
        $email= htmlspecialchars($_POST[email]);
        if()
    }
    if(empty($_POST["content"])) {
        $contenterr = "Your message is empty!";
    }
    else {
        $content = htmlspecialchars($_POST[content]);
    }
}

if!((empty($name) and empty($content) and empty($email))){
    $msg = "Email: " . $email . "\nPhone: " . $phone . "\n" . $content;

mail("rwbyfirst1212@gmail.com", $name, $msg);
?>