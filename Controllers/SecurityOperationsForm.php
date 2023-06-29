<?php

namespace App\Controllers;

class SecurityOperationsForm extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "SecurityOperationsForm";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'SecurityOperationsForm',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentSecurityOperationsForm()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentSecurityOperationsForm',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
