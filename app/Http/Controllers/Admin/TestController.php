<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Entity;
use App\Model\Test;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

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
                ->orWhere('family', 'LIKE', "%{$keyword}%");
        }
        $tests = $test->paginate(15);
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
        $entity = Entity::all();
        return view('admin.tests.create', compact('entity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lesson' => ['required'],
            'start_at' => ['required'],
            'finish_at' => ['required'],
        ]);
        Test::create([
            'user_id' => auth()->id(),
            'entity_id' => $request->entity_id,
            'start_at' => $request->start_at,
            'finish_at' => $request->finish_at,
            'lesson' => $request->lesson,

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
        $test->delete();
        return back();
    }
}