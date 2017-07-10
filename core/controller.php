<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 2:59 PM
 */
class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {

    }
}
