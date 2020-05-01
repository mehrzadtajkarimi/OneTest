<?php

namespace App\Http\Controllers\Home;

use App\Model\Test;
use App\Model\Reply;
use App\Model\Question;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;
use App\Model\Option;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $tests = Test::where('user_id', $id)->get();
        $now = verta()->timezone('Asia/Tehran');
        Verta::setStringformat('%d , %B %Y - H:i');

        // $start_at=verta($tests->pluck('start_at'))->gt();
        // $finish_at=verta($tests->pluck('finish_at'));
        // $alive=;
        // dd($now);

        return view('home.user.tests', compact('tests', 'now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $questions = Question::where('test_id', $id)
            ->with(['options', 'tests'])
            ->get();
        // dd($questions);
        return view("home.user.test", compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Reply  $Reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $Reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Reply  $Reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $Reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reply  $Reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $Reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reply  $Reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $Reply)
    {
        //


    }
}