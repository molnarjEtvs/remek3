<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Like extends Controller
{
    public function getCommentLikes(int $ID){

        $commentLikes = DB::table("comment_like")
        ->select("comment_ID")
        ->where("comment_ID", "=", $ID)
        ->count();

        return response()->json([
            'Likes' => $commentLikes,
            'Id' => $ID,
        ]);

    }

    public function getPostLikes(int $ID){

        $postLikes = DB::table("post_like")
        ->select("post_ID")
        ->where("post_ID", "=", $ID)
        ->count();

        return response()->json([
            'Likes' => $postLikes,
            'Id' => $ID,
        ]);

    }

    public function switchCommentLike(int $ID, Request $request){

        $user = $request->user();

        $ifLiked = DB::table("comment_like")
        ->select("comment_ID")
        ->where("comment_ID", "=", $ID)
        ->where("user_ID", "=", $user->id)
        ->count() == 1;

        if($ifLiked){
            DB::table("comment_like")
            ->where("comment_ID", "=", $ID)
            ->where("user_ID", "=", $user->id)
            ->delete();
            return response()->json([
                'Liked' => False,
                'Id' => $ID,
            ]);
        }
        else{
            DB::table("comment_like")
            ->insert([
                'comment_ID' => $ID,
                'user_ID' => $user->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]);
            return response()->json([
                'Liked' => True,
                'Id' => $ID,
            ]);
        }
    }

    public function switchPostLike(int $ID, Request $request){

        $user = $request->user();

        $ifLiked = DB::table("post_like")
        ->select("post_ID")
        ->where("post_ID", "=", $ID)
        ->where("user_ID", "=", $user->id)
        ->count() == 1;

        if($ifLiked){
            DB::table("post_like")
            ->select("post_ID")
            ->where("post_ID", "=", $ID)
            ->where("user_ID", "=", $user->id)
            ->delete();
            return response()->json([
                'Liked' => False,
                'Id' => $ID,
            ]);
        }
        else{
            DB::table("post_like")
            ->insert([
                'post_ID' => $ID,
                'user_ID' => $user->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]);
            return response()->json([
                'Liked' => True,
                'Id' => $ID,
            ]);
        }
    }
}
