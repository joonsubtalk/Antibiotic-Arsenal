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

<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Antibiotic Arsenal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Hello, Joon</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container content" role="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="Text"><!-- Picture, Test, Question-->
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

<footer class="footer">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

