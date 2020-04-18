<?php

namespace App\Http\Controllers\Admin;

use App\User;

use App\Rules\Nationalcode;
use App\Traits\ValidateUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    use ValidateUser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_query = User::query();
        if ($keyword = request('search')) {
            $users_query
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family','LIKE', "%{$keyword}%");
        }


       $users=  $users_query->paginate(15);
        return view('admin.users.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'email' => ['required', 'email:rfc,dns'],
            'user_name' => ['required', 'string', 'max:255', 'min:3'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'family' => ['required', 'string', 'max:255', 'min:3'],
            'father_name' => ['required', 'string', 'max:255', 'min:3'],
            'about' => ['nullable', 'string', 'max:512'],
            'nationalCode' => ['required', new Nationalcode],
            'mobile' => ['required', 'regex:/09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}/u'],
            'password' => ['required', 'min:8']
            // 'profile_image' => ['required', 'dimensions:min_width=500,max_width=1500'],
        ]);
        User::create($data);
        alert()->success('کاربر مورد نظر با موفقیت اضافه شد', 'موفقیت آمیز بود');
        return redirect()->route('admin.users.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(User $user)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'email' => ['required', 'email:rfc,dns'],
            'user_name' => ['required', 'string', 'max:255', 'min:3'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'family' => ['required', 'string', 'max:255', 'min:3'],
            'father_name' => ['required', 'string', 'max:255', 'min:3'],
            'about' => ['nullable', 'string', 'max:512'],
            'nationalCode' => ['required', new Nationalcode],
            'mobile' => ['required', 'regex:/09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}/u'],
            'password' => ['required', 'min:8']
            // 'profile_image' => ['required', 'dimensions:min_width=500,max_width=1500'],
        ]);
        try {
            $user->update($data);
        } catch (\Exception $th) {

            alert()->error('مشکلی رخ داده است', 'موفقیت آمیز نبود: کد ملی رو چک کنید')->persistent("متوجه شدم");
            return back();
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete($user);
        return back();
    }
}
