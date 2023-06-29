<?php

namespace App\Libraries;

class ServicesAPI
{
    public static function get($param = [])
    {
        try {
            $form_params = $param['data'];
            $form_params['companyid'] = strval(COMPANY_ID);

            $pushDatajson = json_encode($form_params);
            $pushDataJsonHash = hash('sha256', utf8_encode($pushDatajson));
            $pushDataJsonHashLower = strtolower($pushDataJsonHash);

            $strSignature = CLIENT_ID . '|' . date("Ymd") . '|' . $pushDataJsonHashLower;
            $signature = hash_hmac('sha256', utf8_encode($strSignature),  utf8_encode(CLIENT_KEY), true);
            $signature = base64_encode($signature);
            $form_params['signature'] = $signature;

            $strClientSecret = CLIENT_ID . '|' . date("Ymd");
            $clientSecret = hash_hmac('sha256', utf8_encode($strClientSecret),  utf8_encode(CLIENT_KEY), true);
            $clientSecret = base64_encode($clientSecret);

            $client = \Config\Services::curlrequest();
            $response = $client->request('POST', API_URL . '/' . $param['url'], [
                'headers' => [
                    'X-CLIENT-ID'       => CLIENT_ID,
                    'X-CLIENT-SECRET'   => $clientSecret,
                ],
                'multipart' => $form_params,
            ]);
            return $response->getBody();
        } catch (\Exception $e) {
            $response = [
                'status'    => false,
                'rc'     => '99',
                'message'   => 'Error Connection API',
                'error'     => $e->getMessage(),
            ];
            return $response;
        }
    }
}
