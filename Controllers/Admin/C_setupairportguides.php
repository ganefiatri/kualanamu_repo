<?php

namespace App\Controllers\Admin;

class C_setupairportguides extends AdminController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "setupairportguides";
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

    public function add()
    {
        $dataEncrypt = encrypt_aes(json_encode(0), $this->aes_key, $this->aes_iv);
        $data = [
            'module'        => $this->module,
            'path'          => $this->path,
            'act'           => 'add',
            "session_name"  => $this->session_name,
            "aes_key"       => $this->aes_key,
            "aes_iv"        => $this->aes_iv,
            "id"            => $dataEncrypt
        ];
        return view($this->path . '/V_' . $this->module, $data);
    }

    public function edit()
    {
        $dataDecrypt = decrypt_aes($_GET['data'], $this->aes_key, $this->aes_iv);
        $dataDecryptJson = json_decode($dataDecrypt);
        $data = [
            'module'        => $this->module,
            'path'          => $this->path,
            'act'           => 'edit',
            "session_name"  => $this->session_name,
            "aes_key"       => $this->aes_key,
            "aes_iv"        => $this->aes_iv,
            "result"            => $dataDecryptJson
        ];
        return view($this->path . '/V_' . $this->module, $data);
    }
}
