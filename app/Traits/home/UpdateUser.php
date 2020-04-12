<?php

namespace App\Traits\home;

use App\User;
use App\Rules\Nationalcode;
use Illuminate\Support\Facades\Validator;

trait UpdateUser
{
    protected function validator($request)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'family' => ['required', 'string', 'max:255', 'min:3'],
            'father_name' => ['required', 'string', 'max:255', 'min:3'],
            'about' => ['nullable', 'string', 'max:512'],
            'nationalCode' => ['required', new Nationalcode],
            'mobile' => ['required', 'regex:/09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}/u'],
            // 'profile_image' => ['required', 'dimensions:min_width=500,max_width=1500'],
        ]);
        return $data;
    }


    protected function updated($request,$user)
    {
        return !! $user->update([
            'name' => $request['name'],
            'family' => $request['family'],
            'father_name' => $request['father_name'],
            'about' => $request['about'],
            'nationalCode' => $request['nationalCode'],
            'mobile' => $request['mobile'],
            // 'profile_image' => $data['profile_image'],
        ]);
    }
}
