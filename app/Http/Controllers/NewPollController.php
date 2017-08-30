<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PollOption;

class NewPollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('new_poll');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // submit new poll to this function
        // return $request->question;
        // dd(env('APP_URL'));
        $poll = new \App\Poll;
        $poll->title = $request->question;
        $poll->user_id = \Auth::id();
        $poll->url = env('APP_URL') . '/'. uniqid('poll-', true);
        $poll->save();

        // dd($poll->id);
        foreach ($request->options as $option) {
            $poll->options()->create(['option' => $option]);
        }

        $url = $poll->url;
        return view('congrats', compact('url'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
