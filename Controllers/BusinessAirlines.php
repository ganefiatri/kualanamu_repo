<?php

namespace App\Controllers;

class BusinessAirlines extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "BusinessAirlines";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'BusinessAirlines',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadContentBusinessAirlines()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadContentBusinessAirlines',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
