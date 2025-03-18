<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class getUser extends Controller
{
    public function get(int $id){
        $user = DB::table("users")
        ->join("county", "users.county_ID", "=", "county.ID")
        ->join("school", "users.school_ID", "=", "school.ID")
        ->join("files", "users.file_ID", "=", "files.ID")
        ->select("users.name AS user_name", "users.email", "users.class_from", "users.class_to", "files.PATH", "county.name AS county_name", "school.name AS school_name")
        ->where('users.id', '=', $id)
        ->get()[0];

        $user->posts = DB::table("post")->where('user_ID', '=', $id)->paginate(5);
        $user->comments = DB::table("comment")->where('user_ID', '=', $id)->paginate(5);

        return view('user',["user"=>$user]);
    }

    public function Valid(Request $req){ 
        $req->validate([
            "name" => "required|min:5|max:255", 
            "class_from" => "required|min:1|max:13",
            "class_to" => "required|min:1|max:13",
            "county" => "required|min:1|max:20",
            "subject" => "required|min:1|max:26",
            "school" => "required|min:5|max:255"
        ],
        ["name.required" => "A mező kitöltése kötelező!",
        "school" => "A mező kitöltése kötelező!",
        "class_from.required" => "A mező kitöltése kötelező!", 
        "class_to.required" => "A mező kitöltése kötelező!", 
        "county.required" => "A mező kitöltése kötelező!",
        "subject" => "A mező kitöltése kötelező!",
        "subject" => "Minimum 1 karakter!",
        "subject" => "Maximum 26 karakter!",
        "school" => "Minimum 5 karakter!",
        "school" => "Maximum 255 karakter!",
         "name.min" => "Minimum 5 karakter!",
         "name.max" => "Maximum 255 karakter!",
         "class_from.min" => "Minimum 1!",
         "class_from.max" => "Maximum 13!",
         "class_to.min" => "Minimum 1!",
         "class_to.max" => "Maximum 13!",
         "county.min" => "Minimum 1!",
         "county.max" => "Maximum 20!"
        ]);

        $user = Auth::user();
        
        DB::table('users')
              ->where("id", $user->id)
              ->update(["name"=>$req->name,"school_ID"=>$req->school, "class_from" => "1","class_to" =>"1", "county_ID"=>"1","subject_ID" =>"1" ]);

        return Redirect('/profil');
    }

    public function pieceOfUsers(Request $req){

        $piece = DB::select("SELECT COUNT(`id`) AS piece FROM users;");
    
        if(count($piece)==0){
            $jsonData['error'] = true;
            $jsonData['errorText'] = "Nincs regisztrált felhasználónk!";
        }else{
            $jsonData['error'] = false;
            $jsonData['pieceOfUsers'] = $piece[0];
        }
        return response()->json($jsonData);
		return view('authors',["piece"=>$piece]);

    }
}
