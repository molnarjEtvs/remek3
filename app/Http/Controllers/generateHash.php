<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class generateHash extends Controller
{
    public function generate(string $password){
        return Hash::make($password);
    }
}
