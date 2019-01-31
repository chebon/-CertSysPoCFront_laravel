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
        $data = [];
        foreach ($keys as $key => $value) {
            if ($key == 0) {
                $data['Semester One Year One'] = $value->comment;
            } else if ($key == 1) {
                $data['Semester Two Year One'] = $value->comment;
            } else if ($key == 2) {
                $data['Semester One Year Two'] = $value->comment;
            } else if ($key == 3) {
                $data['Semester Two Year Two'] = $value->comment;
            } else if ($key == 4) {
                $data['Semester One Year Three'] = $value->comment;
            } else if ($key == 5) {
                $data['Semester Two Year Three'] = $value->comment;
            } else if ($key == 6) {
                $data['Semester One Year Four'] = $value->comment;
            } else if ($key == 7) {
                $data['Semester Two Year Four'] = $value->comment;
            } else if ($key == 8) {
                $data['Semester One Year Five'] = $value->comment;
            } else if ($key == 9) {
                $data['Semester Two Year Five'] = $value->comment;
            } else if ($key == 10) {
                $data['Semester One Year Six'] = $value->comment;
            } else if ($key == 11) {
                $data['Semester Two Year Six'] = $value->comment;
            }
        }

        return $data;
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
