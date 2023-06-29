<?php

namespace App\Controllers;

class CorporateAboutUs extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "CorporateAboutUs";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'CorporateAboutUs',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadContentCorporateAboutUs()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadContentCorporateAboutUs',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
