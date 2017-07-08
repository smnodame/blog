<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 2:53 PM
 */
    ini_set('display_errors', 1); // display errors
    require_once 'core/model.php';
    require_once 'core/view.php';
    require_once 'core/controller.php';
    require_once 'core/route.php';
    Route::start(); // run routing