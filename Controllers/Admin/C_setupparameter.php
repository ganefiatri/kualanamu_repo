<?php

namespace App\Controllers\Admin;

class C_setupparameter extends AdminController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "setupparameter";
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

    public function addFAQ()
    {
        $dataEncrypt = encrypt_aes(json_encode(0), $this->aes_key, $this->aes_iv);
        $data = [
            'module'        => $this->module,
            'path'          => $this->path,
            'act'           => 'addFAQ',
            "session_name"  => $this->session_name,
            "aes_key"       => $this->aes_key,
            "aes_iv"        => $this->aes_iv,
            "id"            => $dataEncrypt
        ];
        return view($this->path . '/V_' . $this->module, $data);
    }

    public function editFAQ()
    {
        $dataDecrypt = decrypt_aes($_GET['data'], $this->aes_key, $this->aes_iv);
        $dataDecryptJson = json_decode($dataDecrypt);
        $data = [
            'module'        => $this->module,
            'path'          => $this->path,
            'act'           => 'editFAQ',
            "session_name"  => $this->session_name,
            "aes_key"       => $this->aes_key,
            "aes_iv"        => $this->aes_iv,
            "result"            => $dataDecryptJson
        ];
        return view($this->path . '/V_' . $this->module, $data);
    }
}
