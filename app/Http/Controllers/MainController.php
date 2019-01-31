<?php

namespace App\Http\Controllers;

use App\helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/login');
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
        $data = $request->all();
        $units = $data['student-units'];
        unset($data['student-units']);
        $overvals = $data;
        $payload['results'] = $units;
        $payload['overalls'] = $overvals;
        $url_surfix = 'results/create';
        $response = Helper::send_request($url_surfix, $payload);
        //Todo process response for errors
        return redirect('/profile');
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
    public function profile_search(Request $request)
    {
        $url_surfix = 'results';
        $results = Helper::send_request($url_surfix, $request->all());
        $processed_results = Helper::process_profile_creation($results);
        if ($processed_results == 'No results found') {
            return Redirect::back()->with('status', 'No results found for the Student')->withInput();
        }
        $processed_results = Helper::fetch_results($processed_results);
        session(['data' => $processed_results]);
        return Redirect::back()->with('data', $processed_results)->withInput();
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

    public function get_transcript($id, $title)
    {
        $transcript = Storage::get('data.json');
        $transcript = json_decode($transcript);

        return view('admin.result')->with(['data' => $transcript, 'title' => $title]);
        return response()->json($transcript);
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
