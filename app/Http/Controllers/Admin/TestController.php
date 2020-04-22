<?php

namespace App\Http\Controllers\Admin;

use App\Model\Test;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Http\Controllers\Controller;
use App\Model\Entity;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Test::query();
        if ($keyword = request('search')) {
            $test
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family','LIKE', "%{$keyword}%");
        }
        $tests=  $test->paginate(15);
        Verta::setStringformat('%A %e %B H:i ');
        return view('admin.tests.all', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $entities = Test::find(1);
        $verta = verta();
        Verta::setStringformat('%A %e %B %Y  H:i  %P');
        return view('admin.tests.create', compact('entities', 'verta'));


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