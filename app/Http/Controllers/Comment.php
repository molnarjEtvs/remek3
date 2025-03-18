<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Comment extends Controller
{
    public function create($ID, Request $req){

        $req->validate([
            "comment" => "min:3|max:400"
        ],
        ["comment.min" => "Minimum 3 karakter!",
        "comment.max" => "Maximum 400 karakter!"
        ]);

        $comment=strip_tags($req->comment);

        $user = Auth::user();

        DB::insert("INSERT INTO `comment`(`post_ID`,`user_ID`,`text`,`created_at`,`updated_at`)
        VALUES (?,?,?,?,?)", [$ID,$user->id,$comment, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);

        return Redirect("/postview/$ID");

    }

    public function update($ID, Request $req){

        $req->validate([
            "comment" => "min:3|max:400"
        ],
        ["comment.min" => "Minimum 3 karakter!",
        "comment.max" => "Maximum 400 karakter!"
        ]);

        $comment=strip_tags($req->comment);

        $user = Auth::user();

        $commentRow = DB::table("comment")
        ->select("*")
        ->where('comment.ID', '=', $ID)
        ->get()[0];

        if($commentRow->user_ID == $user->id){
            DB::table('comment')
            ->where('id', $ID)
            ->update(['text' => $comment, 'updated_at' => date("Y-m-d H:i:s")]);
        }

        return Redirect("/postview/$commentRow->post_ID");
    }

    public function display($ID){
        $commentData = DB::table("comment")
        ->select("*")
        ->where('comment.ID', '=', $ID)
        ->get();

        if(0 < count($commentData)){
            return view('commentview', ["commentData"=>$commentData[0]]);
        }
    }
}
