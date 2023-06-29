<?php

namespace App\Controllers;

class AirportGuidelines extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "AirportGuidelines";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'AirportGuidelines',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentAirportGuidelines()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentAirportGuidelines',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }


    public function detail()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detail',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadDetailAirportGuidelines()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadDetailAirportGuidelines',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
