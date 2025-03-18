<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class search extends Controller
{
    public function searchSwitch(Request $req){
        if(isset($req->type)) {
            switch ($req->type) {
                case "name":
                    return $this->searchUserName($req);
                case "email":
                    return $this->searchUserEmail($req);
                case "county":
                    return $this->searchUserCounty($req); 
                case "title":
                    return $this->searchPostTitle($req);
                case "date":
                    return $this->searchPostDate($req);
                case "subject":
                    return $this->searchPostSubject($req);
            }
        }
        else {
            return view('search');
        }
    }

    public function searchUserName(Request $req){
        $req->validate([
        "userName" => "min:3|max:150"
        ],
        ["userName.min" => "Minimum 3 karakter!",
        "userName.max" => "Maximum 150 karakter!"
        ]);

        $userName=strip_tags($req->userName);

        $searchUser = DB::table("users")
        ->select("email", "name", "id", "file_ID")
        ->where('name', 'LIKE', '%'.$userName.'%')
        ->paginate(5);

        return view('search',["searchUser"=>$searchUser->appends($req->except('page'))]);
    }

    public function searchUserEmail(Request $req){
        $req->validate([
        "userEmail" => "min:3|max:150"
        ],
        ["userEmail.min" => "Minimum 3 karakter!",
        "userEmail.max" => "Maximum 150 karakter!"
        ]);

        $userEmail=strip_tags($req->userEmail);

        $searchUser = DB::table("users")
        ->select("email", "name", "id", "file_ID")
        ->where('email', 'LIKE', '%'.$userEmail.'%')
        ->paginate(5);

        return view('search',["searchUser"=>$searchUser->appends($req->except('page'))]);
    }


    public function searchUserCounty(Request $req){
        $req->validate([
        "userCounty" => "required"
        ],
        ["userCounty.required" => "Kötelező választani!"
        ]);

        $userCounty=strip_tags($req->userCounty);

        $searchUser = DB::table("users")
        ->select("email", "name", "id", "file_ID")
        ->where('county_ID', 'LIKE', $userCounty)
        ->paginate(5);

        return view('search',["searchUser"=>$searchUser->appends($req->except('page'))]);
    }

    public function searchPostTitle(Request $req){
        $req->validate([
        "postTitle" => "min:3|max:150"
        ],
        ["postTitle.min" => "Minimum 3 karakter!",
        "postTitle.max" => "Maximum 150 karakter!"
        ]);

        $postTitle=strip_tags($req->postTitle);

        $searchPost = DB::table("post")
        ->join("users", "post.user_ID", "=", "users.ID")
        ->select("post.ID", "users.file_ID AS users_file_ID", "post.file_ID AS post_file_ID", "post.title", "post.created_at", "users.name", "post.user_ID")
        ->where('post.title', 'LIKE', '%'.$postTitle.'%')
        ->paginate(5);

        return view('search',["searchPost"=>$searchPost->appends($req->except('page'))]);
    }

    public function searchPostDate(Request $req){

        $req->validate([
            "dateFrom" => "date",
            "dateTo" => "date|after:dateFrom"
            ],
            ["dateFrom.date" => "Kérem helyesen adja meg a dátumot, pl.: 2000-02-02 20:20:20",
            "dateTo.date" => "Kérem helyesen adja meg a dátumot, pl.: 2000-02-02 20:20:20",
            "dateTo.before" => "A Végdátum nem lehet korábbi, mint a Kezdő dátum!"
            ]);

            $dateFrom=strip_tags($req->dateFrom);
            $dateTo=strip_tags($req->dateTo);

        $searchPost = DB::table("post")
        ->join("users", "post.user_ID", "=", "users.ID")
        ->select("post.ID", "users.file_ID AS users_file_ID", "post.file_ID AS post_file_ID", "post.title", "post.created_at", "users.name", "post.user_ID")
        ->whereBetween('post.created_at', [$dateFrom, $dateTo])
        ->paginate(5);

        return view('search',["searchPost"=>$searchPost->appends($req->except('page'))]);
    }

    public function searchPostSubject(Request $req){
        $req->validate([
        "postSubject" => "min:3|max:150"
        ],
        ["postSubject.min" => "Minimum 3 karakter!",
        "postSubject.max" => "Maximum 150 karakter!"
        ]);

        $postSubject=strip_tags($req->postSubject);

        $searchPost = DB::table("post")
        ->join("users", "post.user_ID", "=", "users.ID")
        ->join("subject", "post.subject_ID", "=", "subject.ID")
        ->select("post.ID", "users.file_ID AS users_file_ID", "post.file_ID AS post_file_ID", "post.title", "post.created_at", "users.name", "post.user_ID", "subject.name")
        ->where('subject.name', 'LIKE', '%'.$postSubject.'%')
        ->paginate(5);

        return view('search',["searchPost"=>$searchPost->appends($req->except('page'))]);
    }
}
