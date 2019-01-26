<?php
/**
 * Created by PhpStorm.
 * User: bonche
 * Date: 2018-12-16
 * Time: 11:19
 */

namespace App\helpers;

use GuzzleHttp\Client;


class Helper
{

    public static function send_request($url_suffix, $form_data){
            $client = new \GuzzleHttp\Client();
            $url = "http://35.246.59.250:8001/".$url_suffix;
        unset($form_data['_token']);
            $request = $client->request('POST', $url, ['json' => $form_data]);
        $response = $request->getBody()->getContents();
            return $response;
    }

    public static function process_results($response){
        $response = json_decode($response);
        if(empty($response)){
            return 'No results found';
        }
    }

    public static function fetch_results($keys)
    {
        foreach ($keys as $key) {
            dd($key);
        }
    }

    public static function process_profile_creation($response){
        $response = json_decode($response);
        if(empty($response)){
            return 'No results found';
        }
        return $response;
    }

    public static function process_results_creation($response){
        $response = json_decode($response);
        if(empty($response)){
            return 'Sorry an error occurred please try again later';
        }
    }

}
