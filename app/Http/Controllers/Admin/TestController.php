<?php

namespace App\Http\Controllers\Admin;

use App\Model\Test;
use Illuminate\Http\Request;
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
        return view('admin.tests.all', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tests.create');

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
            'region' => ['required'],
            'school' => ['required'],
            'grade' => ['required'],
            'class' => ['required'],
            'lesson' => ['required'],
            'time' => ['required'],

            // 'profile_image' => ['required', 'dimensions:min_width=500,max_width=1500'],
        ]);
        Test::create($data);
        alert()->success('کاربر مورد نظر با موفقیت اضافه شد', 'موفقیت آمیز بود');
        return redirect()->route('admin.users.index');
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