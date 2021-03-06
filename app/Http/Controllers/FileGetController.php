<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class FileGetController extends Controller
{
    public function getFileContent(Request $request){
        $userFileList = [];
        $filePath = Storage::disk('public')->path('textfiles' ) . '/';
        foreach(glob($filePath . '/*.*') as $file) {
            if (strpos($file, '-user-id-' .  Auth::user()->id) !== false) {
                $content = file_get_contents($file);
                $fileName = basename($file);
                array_push($userFileList, ['title' => $fileName, 'content'=> $content]);
            }
        }
        return response()->json([
            'files' => $userFileList,
        ]);
    }
}

