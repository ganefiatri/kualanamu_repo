<?php

namespace App\Controllers;

class SocialBusinessRelations extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "SocialBusinessRelations";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'SocialBusinessRelations',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function contentSocialBusinessRelations()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentSocialBusinessRelations',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
