<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileUpdateController;
use Illuminate\Support\Facades\Storage;
use Barryvdh\Debugbar\Facade as Debugbar;
use Auth;

class FileUploadController extends Controller

{
    public function fileStore(Request $request)
    {
        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', '1200');
        ini_set('post_max_size', '150M');
        ini_set('upload_max_filesize', '150M');
        set_time_limit(20000);
        $upload_path = Storage::disk('public')->path('/textfiles' );
        $fileName = $request->file->getClientOriginalName();
        $generated_new_name = time() . '-user-id-' .  Auth::user()->id . '.' . $request->file->getClientOriginalExtension();
        $request->file->move($upload_path, $generated_new_name);
        $alteredContent = FileUpdateController::fileUpdate($request->file($generated_new_name) , $generated_new_name);
    }
}
