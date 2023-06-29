<?php

namespace App\Controllers;

class BuildingPlan extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "BuildingPlan";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'BuildingPlan',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentBuildingPlan()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentBuildingPlan',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
