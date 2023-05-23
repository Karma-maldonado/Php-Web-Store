<?php

namespace core\controllers;

use core\classes\SystemFunction;

class Main
{
    public function index()
    {

        $data = [
            'Title' => 'Title my page',
        ];

        SystemFunction::Layouts([
            'templates/header',
            'index',
            'templates/footer',
        ], $data);
    }
}
