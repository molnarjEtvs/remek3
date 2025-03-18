<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postList extends Controller
{
	public function postList(){
        $postPagination = DB::table("post")
        ->leftJoin("comment", "comment.post_ID", "=", "post.ID")
        ->join("users", "post.user_ID", "=", "users.ID")
        ->select("post.ID", "users.file_ID AS users_file_ID", "post.file_ID AS post_file_ID", "post.title", "post.created_at", "users.name", "post.user_ID")
        ->selectRaw('count(comment.ID) as commentNumber')
        ->groupBy('post.ID')
        ->orderBy('post.created_at', 'desc')
        ->paginate(5);

        return view('/dashboard',["ptp"=>$postPagination]);
	}

	public function oneViewed($ID){
        $postData = DB::table("post")
        ->join("files", "post.file_ID", "=", "files.ID")
        ->select("*", "post.ID AS post_ID")
        ->where("post.ID", "=", $ID)
        ->get()[0];

        $postData->comments = DB::table("users")
        ->join("comment", "comment.user_ID", "=", "users.ID")
        ->join("files", "users.file_ID", "=", "files.ID")
        ->select("comment.ID AS comment_ID", "users.name", "users.ID AS user_ID", "files.PATH", "comment.created_at", "comment.text")
        ->where('comment.post_ID', '=', $ID)
        ->orderBy('comment.created_at', 'desc')
        ->paginate(5);

		return view('postview',["postData"=>$postData]);
	}

}
