<?php

namespace App\Controllers;

class CorporateCareers extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "CorporateCareers";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'CorporateCareers',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentCorporateCareers()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentCorporateCareers',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
