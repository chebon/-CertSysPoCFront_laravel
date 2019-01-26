<?php

namespace App\Http\Controllers;

use App\helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_results(Request $request)
    {
        $url_surfix = 'results';
        $results = Helper::send_request($url_surfix, $request->all());
        $processed_results = Helper::process_results($results);
        return view('index', ['error' => $processed_results]);
    }

    public function result_store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('admin.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile_create(Request $request)
    {
        $url_surfix = 'results';
        $results = Helper::send_request($url_surfix, $request->all());
        $processed_results = Helper::process_profile_creation($results);
        if ($processed_results == 'No results found') {
            return Redirect::back()->withErrors('No results found for the Student')->withInput();
        }
        $processed_results = Helper::fetch_results($processed_results);
        dd($processed_results);
        dd($processed_results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result_create()
    {
        return view('results');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $url_surfix = 'create';
        $results = Helper::send_request($url_surfix, $request->all());
        $processed_results = Helper::process_results_creation($results);
        return view('profile', ['error' => $processed_results]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
