<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function process(Request $request){
        $this->validate($request,[
            'body'=>'required',
        ]);
        if($request->body == 0){
            return response()->json(["message"=>"payload is invalid"]);
        }else{
            if($request->body['code'] == 0){
                return response()->json(["message"=>"success"]);
            }elseif ($request->body['code'] == 1){
                return response()->json(["message"=>"failure"]);
            }else{
                return response()->json(["message"=>'Code should be 0 or 1']);
            }
        }




    }
}
