<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Token;
use App\Http\Controllers\localStorage;
use Illuminate\Support\Str;

class DoctorsAPIController extends Controller
{
    //
    public function doctorProfile(Request $req){
        $doctor = Token::where('token', $req->token)->first();
        if($doctor){
            $doc = Users::where('userID', $doctor->userID)->first();
            return $doc;
        }
    }
}
