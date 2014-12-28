<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/27/2014
 * Time: 11:56 PM
 */

switch ($pageContent):
    case 1: ?>
<div class="container content" role="main">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="Text">
                <h1>Objectives</h1>
                <hr>
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
<?php break;?>
<?php case 2: ?>
    <div class="container content" role="main">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="Text">
                    <h1>How to use this module:</h1>
                    <hr>
                    <li>Use this module</li>
                    <ul>
                        <li>learn the classes</li>
                        <li>recognize the antibiotics available</li>
                    </ul>
                    <li>Use this module to build a framework in understanding how antibiotics function so you have a foundation on which to learn clinical applications on the wards</li>
                    <li>Dose ranges are for your reference only, so you get an idea of how you might prescribe them.</li>
                </div>
                <div class="page-navigation">
                    <button type="button" class="btn btn-default pull-right">Next</button>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
<?php break;?>
<?php default : ?>
    <div class="container content" role="main">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Test</h1>
                <div class="page-navigation">
                    <button type="button" class="btn btn-default pull-right">Next</button>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
<?php endswitch;?>