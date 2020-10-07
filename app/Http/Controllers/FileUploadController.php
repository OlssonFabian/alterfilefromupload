<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileUpdateController;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller

{
    // function to store file in 'upload' folder
    public function fileStore(Request $request)
    {
        $upload_path = Storage::disk('public')->path('/textfiles' );
        $fileName = $request->file->getClientOriginalName();
        $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move($upload_path, $generated_new_name);
        // $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        FileUpdateController::fileUpdate($request->file($generated_new_name));
         //return response()->json(['success' => 'You have successfully uploaded "' . $fileName . '"']);
    }
}
