<?php

namespace App\Http\Controllers\Home;

use App\Model\Test;
use App\Model\Reply;
use App\Model\Question;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;
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
        $user    = Auth::user();
        $tests   = $user->tests()->get();
        // $replies = $user->replies()
        // ->groupBy('test_id')
        // ->selectRaw('sum(mark)as sum')
        // ->pluck('sum');


        // dd($replies);
        Verta::setStringformat('%d , %B %Y - H:i');


        return view('home.user.tests', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $test_id = $request->id;
        $questions = Question::where('test_id', $test_id)
            ->with(['options', 'tests'])
            ->get();
        return view("home.user.test", compact('questions', 'test_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->all();
        $request = array_slice($request, 1, count($request), true);
        foreach ($request as $keys => $values) {
            $explode = explode('-', $values);
            $values  = $explode[0];
            $mark    = $explode[1] == TRUE ? $explode[2] : 0;
            $test_id = $explode[3];
            Reply::create([
                'user_id' => auth()->id(),
                'option_id' => $values,
                'question_id' => $keys,
                'test_id' => $test_id,
                'mark' => $mark,
            ]);
        }
        return redirect()->route('tests.index');
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