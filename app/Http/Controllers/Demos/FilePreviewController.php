<?php

namespace App\Http\Controllers\Demos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vish4395\LaravelFileViewer\LaravelFileViewer;

class FilePreviewController extends Controller
{
     public function filePreview($fileName){
        $filePath = $fileName;
        $disk = 'public';
        $fileUrl = asset('storage/' . $fileName);
        $fileData = [
            [
                'label' => __('Label'),
                'value' => "Value"
            ]
        ];
        return LaravelFileViewer::show($fileName, $filePath, $fileUrl, $disk, $fileData);
    }
}
