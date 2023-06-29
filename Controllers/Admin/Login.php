<?php

namespace App\Controllers\Admin;

class Login extends AdminController
{
    protected $module;
    protected $path;

    function __construct()
    {
        $this->module  = "Login";
        $this->path  = "Admin";
    }

    public function index()
    {
        if ($this->session->get('token')) {
            return redirect()->route('admin/dashboard');
        }

        $strClientSecret = $this->client_id . '|' . date("Ymd");
        $clientSecret = hash_hmac('sha256', utf8_encode($strClientSecret),  utf8_encode($this->clientkey));

        $data = [
            'module'            => $this->module,
            'path'              => $this->path,
            'act'               => '',
            "api_url"           => $this->api_url,
            "client_id"         => $this->client_id,
            "client_ip"         => $this->client_ip,
            "clientkey"         => $this->clientkey,
            "aes_key"           => $this->aes_key,
            "aes_iv"            => $this->aes_iv,
            "clientSecret"      => $clientSecret
        ];
        return view($this->path . '/' . $this->module, $data);
    }

    public function ceksignin()
    {
        try {

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $pushdata = array(
                'username'      => $username,
                'password'      => $password
            );


            $pushDatajson = json_encode($pushdata);
            $pushDataJsonHash = hash('sha256', utf8_encode($pushDatajson));
            $pushDataJsonHashLower = strtolower($pushDataJsonHash);

            $strSignature = $this->client_id . '|' . date("Ymd") . '|' . $pushDataJsonHashLower;
            $signature = hash_hmac('sha256', utf8_encode($strSignature),  utf8_encode($this->clientkey), true);
            $signature = base64_encode($signature);
            $pushdata['signature'] = $signature;

            $strClientSecret = $this->client_id . '|' . date("Ymd");
            $clientSecret = hash_hmac('sha256', utf8_encode($strClientSecret),  utf8_encode($this->clientkey), true);
            $clientSecret = base64_encode($clientSecret);

            $crl = curl_init($this->api_url . "/login");
            curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($crl, CURLINFO_HEADER_OUT, true);
            curl_setopt($crl, CURLOPT_POST, true);
            curl_setopt($crl, CURLOPT_HTTPHEADER, array(
                'X-CLIENT-ID: ' . $this->client_id,
                'X-CLIENT-SECRET: ' . $clientSecret
            ));
            curl_setopt($crl, CURLOPT_POSTFIELDS, $pushdata);

            $result = curl_exec($crl);
            curl_close($crl);

            $decode_respon = json_decode($result);

            if ($decode_respon->rc != '00') {
                return json_encode($decode_respon);
            } else {

                $this->session->set([
                    "token"    => $decode_respon->data->token,
                    "selected_user_group_id"    => $decode_respon->data->selected_user_group_id,
                    "selected_user_group_name"    => $decode_respon->data->selected_user_group_name,
                    "user_id"    => $decode_respon->data->user_id,
                    "username"    => $decode_respon->data->username,
                    "name"    => $decode_respon->data->name,
                    "email"    => $decode_respon->data->email,
                    "no_wa"    => $decode_respon->data->no_wa,
                ]);
                return json_encode($decode_respon);
            }
        } catch (\Throwable $th) {
            exit(json_encode(["status" => false, "message" => "error: " . $th->getMessage()]));
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->route('admin');
    }
}
