<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LangFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = \Config\Services::session();
        $lang = "id";
        $supportLang = ['id', 'en'];
        if ($session->get('languange')) {
            $lang = $session->get('languange');
            $lang = in_array($lang, $supportLang) ? $lang : 'id';
        }
        $language = \Config\Services::language();
        $language->setLocale($lang);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
