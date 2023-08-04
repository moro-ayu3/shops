<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
     public function index()
    {
        $tests = Test::all();
        $reserves = Reserve::all();
        return view('mypage', ['tests' => $tests, 'reserve' => $reserve]);
    }

    public function delete()
    {
        $test = Test::where('user_id', $user_id)->first();
        $test_id = $test->id;

        Reserve::where('test_id', $test_id)->delete();
        return redirect('/');
    }
}
