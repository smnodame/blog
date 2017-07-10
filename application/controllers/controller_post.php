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
        $this->view->generate('post_view.php', 'template_view.php');
    }

    function action_add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->view->generate('add_new_post.php', 'template_view.php', 'add-new-post');
        } else if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = 'TH15794';
            $title = 'Sell Telephone';
            $description = 'NO more!';
            $content = 'Content is easy';
            $category = '1';
            $tags = 'a,b,c,d,e';

            $model = new model_post();
            $model->add_new_post($id, $title, $description, $content, $category, $tags);
        }
    }
}
