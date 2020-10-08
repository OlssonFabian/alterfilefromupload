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

        //finds out how many times a word is occuring
        $wordCounts = array_count_values(str_word_count($content, 1, 'àáãç3'));
        //133

        $max = max($wordCounts);
        $words = array_keys($wordCounts, $max);
        //[0]->kebab [1]->halo

        foreach ($words as $word) {
                //searches for number 3 in array
                $fooBarWord =  'foo' . $word . 'bar';
                $updatedContent = preg_replace( '/' . $word . '/', $fooBarWord, $content);
        }
        return $updatedContent;
    }
}
