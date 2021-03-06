<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/27/2014
 * Time: 10:53 PM
 */

$title = "Antibiotic Arsenal";
$titleFormat = $title . " - ";
$description = "Become familiar with antibiotics to prepare for clinical application on wards";
$author = "Joon-Sub Chung";
$year = date("Y"); // Gets server year
$copyright = "&copy;". $year ." Joon-Sub Chung";
$pageContent = -1;

// What email the verify email comes from
$sendFromEmail = 'chungjoonsub@gmail.com';
$verifySubject = 'Subject line to be sent';
$emailMsg = 'The message to be sent';

require_once("credential.php");