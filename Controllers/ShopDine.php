<?php

namespace App\Controllers;

class ShopDine extends BaseController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "ShopDine";
        $this->path  = "";
    }

    public function index()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'ShopDine',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function shop()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'shop',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function detailshop()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detailshop',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadContentShop()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadContentShop',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
    public function contentdetailshop()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentdetailshop',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function eatdine()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'eatdine',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function detaileatdine()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detaileatdine',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadEatDine()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadEatDine',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
    public function contentdetaileatdine()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentdetaileatdine',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function services()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'services',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function detailservices()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'detailservices',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function loadservices()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'loadservices',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
    public function contentdetailservices()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentdetailservices',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
