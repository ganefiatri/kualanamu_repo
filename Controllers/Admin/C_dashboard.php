<?php

namespace App\Controllers\Admin;

class C_dashboard extends AdminController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "dashboard";
        $this->path  = "Admin";
    }

    public function index()
    {
        $data = [
            'module'        => $this->module,
            'path'          => $this->path,
            'act'           => '',
            "session_name"  => $this->session_name,
            "aes_key"       => $this->aes_key,
            "aes_iv"        => $this->aes_iv,
        ];
        return view($this->path . '/V_' . $this->module, $data);
    }
}
