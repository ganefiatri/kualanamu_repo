<?php

namespace App\Controllers;

use  App\Libraries\ServicesAPI;

class Home extends BaseController
{
    protected $module;
    protected $path;



    function __construct()
    {



        $this->module  = "Home";
        $this->path  = "";
    }

    public function index()
    {
        // $curl = curl_init();

        // $dataGallery = ServicesAPI::get([
        //     'url' => 'getpagingactivity',
        //     'data' => [
        //         'page_size' => "12",
        //         'current_page' => "1",
        //         'search' => "",
        //         'orderby' => "2", // ['a.title','a.description','a.activity_date','a.urutan']
        //         'orderby_index' => "DESC",
        //         'activity_type' => "3", // 1 = News, 2 = Event, 3 = Gallery, 4 = Slide, 5 = Milestone, 6 = Careers
        //         'activity_date' => "",
        //     ],
        // ]);

        // var_dump($dataGallery);
        // exit();

        // $dataEvent = ServicesAPI::get([z
        //     'url' => 'getpagingactivity',
        //     'data' => [
        //         'page_size' => "1",
        //         'current_page' => "1",
        //         'search' => "",
        //         'orderby' => "2", // ['a.title','a.description','a.activity_date','a.urutan']
        //         'orderby_index' => "DESC",
        //         'activity_type' => "2", // 1 = News, 2 = Event, 3 = Gallery, 4 = Slide, 5 = Milestone, 6 = Careers
        //         'activity_date' => "",
        //     ],
        // ]);


        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'Home',
            // 'dataGallery'       => json_decode($dataGallery),
            // 'dataEvent'         => json_decode($dataEvent),
        ];
        return view($this->path . '/' . $this->module, $data);
    }
    public function changelanguange($lang = "")
    {
        $language = \Config\Services::language();
        $language->setLocale($lang);
        $_SESSION['languange'] = $lang;
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'Home',
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function activity_type()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        if ($param->activity_type == 1) {
            $act = "News";
        } elseif ($param->activity_type == 2) {
            $act = "Event";
        } elseif ($param->activity_type == 3) {
            $act = "Gallery";
        } elseif ($param->activity_type == 4) {
            $act = "Slide";
        } else {
            $act = "";
        }

        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => $act,
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, 'result' => $result, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function SlideContent()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));

        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'SlideContent',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function slide_read()
    {
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'slide_read',
        ];
        return view($this->path . '/' . $this->module, $data);
    }


    public function slide_loadread()
    {
        $param = json_decode($this->request->getVar("param"));
        $result = json_decode($this->request->getVar("result"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'slide_loadread',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }


    public function highlightsNews()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'highlightsNews',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function contentFlightSchedule()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentFlightSchedule',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function EventContent()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'EventContent',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function contentGallery()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentGallery',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function contentAirlines()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentAirlines',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }

    public function contentFAQ()
    {
        $result = json_decode($this->request->getVar("result"));
        $param = json_decode($this->request->getVar("param"));
        $data = [
            'module'    => $this->module,
            'path'      => $this->path,
            'act'       => 'contentFAQ',
            'result'    => $result,
            'param'    => $param,
        ];
        return $this->response->setJSON(json_encode(["status" => true, "output" => view($this->path . '/' . $this->module, $data)]));
    }
}
