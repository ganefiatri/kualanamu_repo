<?php

namespace App\Controllers;

class PassengerGuide extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "PassengerGuide";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'PassengerGuide',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function flightdepartureguide()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'flightdepartureguide',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function arrivingpassengers()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'arrivingpassengers',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentflightdepartureguide()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentflightdepartureguide',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
    public function contentarrivingpassengers()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentarrivingpassengers',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function detailflightdepartureguide()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detailflightdepartureguide',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function detailarrivingpassengers()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detailarrivingpassengers',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadDetail()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadDetail',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
