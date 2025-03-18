<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Post extends Controller
{
    public function display($ID){
        $postData = DB::table("post")
        ->select("*")
        ->where('post.ID', '=', $ID)
        ->get();

        if(0 < count($postData)){
            return view('posteditview', ["postData"=>$postData[0]]);
        }
    }

    public function update($ID, Request $req){

        $req->validate([
            "title" => "required|min:5|max:150",
            "post" => "required|min:5|max:400",
            "class" => "required",
            "subject" => "required"],

            ["title.required" => "A mező kitöltése kötelező! Minimum 5 karakter, maximum 150 karakter.",
            "title.min" => "Minimum 5 karakter!",
            "title.max" => "Maximum 150 karakter!",
            "post.required" => "A mező kitöltése kötelező! Minimum 5 karakter, maximum 400 karakter.",
            "post.min" => "Minimum 5 karakter!",
            "post.max" => "Maximum 400 karakter!",
            "class.required" => "Kötelező választani!",
            "subject.required" => "Kötelező választani!"
            ]);

        $user = Auth::user();



        $postRow = DB::table("post")
        ->select("*")
        ->where('post.ID', '=', $ID)
        ->get()[0];

        if($postRow->user_ID == $user->id){
            $file=$req->file("inputfile");
            if(gettype($file) != "NULL"){
                $filename=Storage::putFile("", $file);
                $fileID=DB::table("files")->insertGetId(["PATH" => $filename]);
            }
            else{
                $fileID=1;
            }
            DB::table('post')
            ->where('id', $ID)
            ->update(['text' => $req->post, 'title' => $req->title, 'class' => $req->class, 'subject_ID' => $req->subject, 'file_ID' => $fileID, 'updated_at' => date("Y-m-d H:i:s")]);
        }
        return Redirect("/postview/$ID");
    }

    public function create(Request $req){
        $req->validate([
            "title" => "required|min:5|max:150",
            "post" => "required|min:5|max:400",
            "class" => "required",
            "subject" => "required"],

            ["title.required" => "A mező kitöltése kötelező! Minimum 5 karakter, maximum 150 karakter.",
            "title.min" => "Minimum 5 karakter!",
            "title.max" => "Maximum 150 karakter!",
            "post.required" => "A mező kitöltése kötelező! Minimum 5 karakter, maximum 400 karakter.",
            "post.min" => "Minimum 5 karakter!",
            "post.max" => "Maximum 400 karakter!",
            "class.required" => "Kötelező választani!",
            "subject.required" => "Kötelező választani!"
            ]);

        $title=strip_tags($req->title);
        $post=strip_tags($req->post);
        $class=strip_tags($req->class);
        $subject=strip_tags($req->subject);

        $file=$req->file("inputfile");
        if(gettype($file) != "NULL"){
            $filename=Storage::putFile("", $file);
            $fileID=DB::table("files")->insertGetId(["PATH" => $filename]);
        }
        else{
            $fileID=1;
        }

        $user = Auth::user();

        DB::insert("INSERT INTO `post`(`user_ID`, `text`, `title`, `class`, `file_ID`, `subject_ID`,`created_at`,`updated_at`)
            VALUES (?,?,?,?,?,?,?,?)", [$user->id,$post,$title,$class,$fileID,$subject, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);

        return Redirect('/dashboard');
    }
}
