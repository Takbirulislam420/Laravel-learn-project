<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function myDemoFunction(){
        $a=10;
        $b=20;
        $c=$a+$b;
        // return $c;
        // return response()->json([
        //     'name'=>'Takbir',
        //     'age'=>22,
        //     'email'=>'takbirulislam420@gmail.com'
        // ]);
        return response()->file(public_path('one.jpg'));
        //return response()->download(public_path('one.jpg'));
    }

    public function returnJson():JsonResponse
    {
        return response()->json([
            'name'=>'Takbir',
            'age'=>22,
            'email'=>'takbirulislam420@gmail.com'
        ]);
    }

    public function returnInteger():int
    {
        return 100;
    }

    public function index(){
        $name='Takbirul islam';
        $age=22;
        $email='takbirulislam420@gmail.com';
        return view('contact', compact('name', 'age', 'email'));
    }

    public function getIp(Request $request){
        $ipAddress = $request->ip();
        return response()->json([
            'ip_address' => $ipAddress,
            'message' => 'IP address retrieved successfully'
            ]);
    }

    public function getUserData(Request $request){
        //$userAllData = $request->all();
        $name=$request->input('name');
        $age=$request->input('age');
        $email=$request->input('email');
        
        return response()->json([
            'name' => $name,
            'age' => $age,
            'email' => $email,
            'phone' => $request->has('phone'),
            'message' => 'User data retrieved successfully'
        ]);
    }
}
