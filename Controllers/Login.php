<?php

namespace App\Controllers;

class Login extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "Login";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => '',
        ];
        return view($this->path . '/' . $this->module, $data);
    }
}
