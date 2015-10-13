<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 13/10/15
 * Time: 20:57
 */

namespace MVC;

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}