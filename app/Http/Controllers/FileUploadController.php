<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileUpdateController;
use Illuminate\Support\Facades\Storage;
use Auth;

class FileUploadController extends Controller

{
    public function fileStore(Request $request)
    {
        $upload_path = Storage::disk('public')->path('/textfiles' );
        $fileName = $request->file->getClientOriginalName();
        $generated_new_name = time() . '-user-id-' .  Auth::user()->id . '.' . $request->file->getClientOriginalExtension();
        $request->file->move($upload_path, $generated_new_name);
        $alteredContent = FileUpdateController::fileUpdate($request->file($generated_new_name) , $generated_new_name);
    }
}
