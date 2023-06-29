<?php

namespace App\Controllers;

class Cargo extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "Cargo";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'Cargo',
        ];
        return view($this->path . '/' . $this->module, $data);
    }
}
