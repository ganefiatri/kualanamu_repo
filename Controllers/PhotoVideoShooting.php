<?php

namespace App\Controllers;

class PhotoVideoShooting extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "PhotoVideoShooting";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'PhotoVideoShooting',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentPhotoVideoShooting()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentPhotoVideoShooting',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
