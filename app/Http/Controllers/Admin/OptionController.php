<?php

namespace App\Http\Controllers\Admin;

use App\Model\Option;
use App\Model\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.tests');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $question_id = $request->id;

        $questions = Question::find($question_id);
        $options = Option::where('question_id', $question_id)->get();
        return view('admin.option.create', compact('questions', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Option::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $question_id)
    {
        $question = Question::find($question_id);
        if (!$question  || !($question instanceof Question)) {
            return redirect()->route('admin.question.index');
        }
        $status = Option::where('question_id', $question_id)
            ->update(['status' => FALSE]);
        $status = Option::find($request->radios);
        $status->status = 1;
        $status->save();

        return redirect()->route('admin.question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return back();
    }
}