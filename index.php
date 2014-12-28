<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/24/2014
 * Time: 5:07 PM
 */


require_once("global.php");

$titleFormat = $titleFormat . "Objectives";
require_once("header.php");
?>

<body role="document">

<?php
require_once("navigationBar.php");
?>

<div class="container content" role="main">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="Text">
                <h1>Objectives</h1>
                <li>Increase familiarity with classes of antibiotics and their mechanisms of action</li>
                <li>Increase familiarity with the spectrum of coverage of antibiotic classes</li>
                <li>Review basic concepts of antibiotic therapy</li>
                <li>Help students have a basic framework for building upon when taught about clinical application on wards</li>
                <li>Gauge usefulness of having such a module for preparation and review before and during the clinical year</li>
            </div>
            <div class="page-navigation">
                <button type="button" class="btn btn-default pull-right">Next</button>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<?php
require_once("footer.php");
?>

