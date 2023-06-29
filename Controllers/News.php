<?php

namespace App\Controllers;

class News extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "News";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'News',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentNews()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentNews',
            'param'     => $param,
            'result'    => $result,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function read()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'read',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadReadNews()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadReadNews',
            'result'    => $result,
            'param'     => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function contentRecentposts()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentRecentposts',
            'result'    => $result,
            'param'     => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
