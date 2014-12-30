<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/28/2014
 * Time: 11:44 PM
 */

require_once("credential.php");
require_once("global.php");

$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);

$stmt = $pdo->prepare( "SELECT userEmail FROM user WHERE userEmail = ? LIMIT 1" );
$stmt->bindValue( 1, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$stmt->execute();

if( $stmt->rowCount() > 0 ) { # If rows are found for query
    //  A. Yes, is it pending? Check email
    //  AA. Yes, but it's expired redo!
    //  B. Yes, is it verified? Just login yo
    echo "Email found! Make sure to activate or login yo";
} else {
    $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];

    $hash = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);
    $verifyToken = password_hash(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), PASSWORD_BCRYPT, $options);

    // Query Insert new information
    $stmt = $pdo->prepare ("INSERT INTO user (userEmail, userYear, userHash, userSalt, userToken)
                                VALUES (:uemail, :uyear, :uhash, :usalt, :utoken)");
    $stmt -> execute(array(':uemail'=>filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        ':uyear'=>$_POST['yearSelection'],
        ':uhash'=>$hash,
        ':usalt'=>$options['salt'],
        ':utoken'=>$verifyToken));

    // Create Email
    $to      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = $verifySubject;
    $message = $emailMsg . ' activate using this: ' . $verifyToken;
    $headers = 'From: '.$sendFromEmail. "\r\n" .
        'Reply-To: '.$sendFromEmail. "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo "Account created Successfully. Check your inbox at " .  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}
/*

$timestamp = date('Y-m-d G:i:s');
$statement = $pdo->query("SELECT * FROM user");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['userEmail']);

echo "Account created Successfully. Check your inbox at " .  $_POST["email"];

/*
 * if (password_verify('asdf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
 */
