<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class AdminController
 *
 * AdminController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends AdminController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class AdminController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $session;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend AdminController.
     *
     * @var array
     */
    protected $helpers = ['my_helper'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->session = \Config\Services::session();

        $this->aes_key = 'iniencryptanterbaiksejagatraya23';
        $this->aes_iv = '1230912854278345';
        // $this->api_url = 'https://knoapi.serasijayanusantara.com/api/v1';
        $this->api_url = 'https://knoapi.kualanamuaviasi.com/api/v1';
        $this->clientkey = 'ebfadf891b7ec6b80f11cf2d3331ead65032e802';
        $this->client_id = '01';
        $this->companyid = '0001';
        $this->client_ip = '192.168.177.83';
        $this->session_name = 'kno_session';
    }
}
