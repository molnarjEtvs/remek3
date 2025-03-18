<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class getFiles extends Controller
{
    public function getFileByName($fileName){
        $file = Storage::get($fileName);
        $type = Storage::mimeType($fileName);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
	}

	public function getFileByID($fileID){
        $fileName = DB::select("SELECT `PATH` FROM `files` WHERE `files`.`id` = {$fileID};")[0]->PATH;
        $file = Storage::get($fileName);
        $type = Storage::mimeType($fileName);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
	}
}
