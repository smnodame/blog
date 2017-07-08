<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/5/2017
 * Time: 5:39 PM
 */

interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

class model_main extends Model
{
    function get_data()
    {
        $arr = [ 1, 2, 3, 4, 5];
        return array(1, 2, 3, 4, 5);
    }
}