<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileGetController extends Controller
{
    public function getFileContent(Request $request){
        $upload_path = Storage::disk('public')->path('textfiles' ) . '/' . $name;
        $request = file_get_contents( $upload_path );
        return $request;
    }
}
