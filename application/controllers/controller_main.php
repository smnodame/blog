<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 3:48 PM
 */
class Controller_Main extends Controller
{
    function action_index()
    {
        $model = new model_main();
        $this->view->generate('main_view.php', 'template_view.php');

    }
}