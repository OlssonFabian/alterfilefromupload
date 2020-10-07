<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUpdateController extends Controller
{
    public static $folder = 'textfiles';
    public static $disk = 'public';
    public static function fileUpdate($file, $name){
        $filePath = self::$folder . '/' . $name;
        $upload_path = Storage::disk('public')->path('textfiles' ) . '/' . $name;
        $content = file_get_contents( $upload_path );
        //Storage::disk(self::$disk)->get($filePath);
        $updatedContent = $content . 'YEAHHHH';
        //$content = Storage::disk('uploads')->get($path);

        //seperates each word to an array item

        // //finds out how many times a word is occuring
        // $wordCount = array_count_values(str_word_count($content, 1, 'àáãç3'));

        // //finds the highest number
        // $value = max($wordCount);

        // //finds the key associated with the highest number
        // $key = array_search($value, $wordCount);

        // //the replacing value
        // $fooBarKey =  'foo' . $key . 'bar';

        // //updates the content
        // $updatedContent = $content->preg_replace($key, $foobarKey);

        return $updatedContent;
    }
}
