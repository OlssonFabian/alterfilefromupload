<?php

namespace App\Http\Controllers;
set_time_limit(0);
use Illuminate\Http\Request;
use App\Http\Controllers\FileUpdateController;
use Illuminate\Support\Facades\Storage;
use Barryvdh\Debugbar\Facade as Debugbar;
use Auth;

class FileUploadController extends Controller

{
    public function fileStore(Request $request)
    {
        $upload_path = Storage::disk('public')->path('/textfiles' );
        Debugbar::info('upload path');

        $fileName = $request->file->getClientOriginalName();
        Debugbar::info('filename');

        $generated_new_name = time() . '-user-id-' .  Auth::user()->id . '.' . $request->file->getClientOriginalExtension();
        Debugbar::info('new filename');

        $request->file->move($upload_path, $generated_new_name);
        Debugbar::info('new file created');

        $alteredContent = FileUpdateController::fileUpdate($request->file($generated_new_name) , $generated_new_name);
        Debugbar::info('new file uploadedd');
    }
}
