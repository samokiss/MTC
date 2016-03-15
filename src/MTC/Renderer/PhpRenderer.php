<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 14:32
 */

namespace MTC\Renderer;


/**
 * Class PhpRenderer
 * @package MTC\Renderer
 *
 *
 *
 */
class PhpRenderer
{
    private $data = [];

    private $view = false;

    public function __construct($file)
    {
        if(file_exists($file)){
            $this->view = $file;
        }else{
            throw new \Exception('Unable to find : '. $file);
        }
    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        extract($this->data);
        include $this->view;
    }
}