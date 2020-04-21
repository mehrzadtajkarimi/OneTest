<?php

namespace App\Http\Controllers\Admin;

use App\Model\Test;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_query = Test::query();
        if ($keyword = request('search')) {
            $users_query
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family','LIKE', "%{$keyword}%");
        }
        $tests=  $users_query->paginate(15);
        Verta::setStringformat('%A %e %B H:i ');
        // $start_at = verta($tests->start_at??null); //convert timestamp
        // $finish_at = verta($tests->finish_at??null); //convert timestamp
        return view('admin.tests.all', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $test = Test::all()->last();
        $verta = verta();

        Verta::setStringformat('%A %e %B %Y  H:i  %P');
        $test_at = Verta::createTimestamp($test->start_at??null); //convert timestamp
        // $array_dateTime = explode('|', $test_at);
        // $test_at_date = $array_dateTime[0];
        // $test_at_time = $array_dateTime[1];

        return view('admin.tests.create', compact('test', 'verta'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'lesson' => ['required'],
            'start_at' => ['required'],
            'finish_at' => ['required'],

        ]);
        Test::create([
            'lesson' => request('lesson'),
            'start_at' => request('start_at'),
            'finish_at' => request('finish_at'),
            'user_id' => auth()->id()
        ]);
        alert()->success('آزمون با موفقیت اضافه شد', 'موفقیت آمیز بود');
        return redirect()->route('admin.tests.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}