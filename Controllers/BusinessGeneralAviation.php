<?php

namespace App\Controllers;

class BusinessGeneralAviation extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "BusinessGeneralAviation";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'BusinessGeneralAviation',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentBusinessGeneralAviation()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentBusinessGeneralAviation',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
