<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 3:48 PM
 */
class Controller_Post extends Controller
{
    function action_index()
    {
        echo 'fuck';
        // $this->view->generate('add_new_post.php', 'template_view.php');
    }

    function action_add()
    {
        $this->view->generate('add_new_post.php', 'template_view.php', 'add_new_post.php');
    }
}
