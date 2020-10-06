<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUpdateController extends Controller
{
    public static function fileUpdate($file){
        $content = Storage::get('app/public/upload/' . $file);

        //seperates each word to an array item
        $arrayOfWords = str_word_count($content, 1, 'àáãç3');

        //finds out how many times a word is occuring
        $wordCount = array_count_values($arrayOfWords);

        //finds the highest number
        $value = max($wordCount);

        //finds the key associated with the highest number
        $key = array_search($value, $wordCount);

        //the replacing value
        $fooBarKey =  'foo' . $key . 'bar';

        //updates the content
        $updatedContent = $content->preg_replace($key, $foobarKey);
    }
}
