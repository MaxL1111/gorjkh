<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function getDownload($file_name)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/files/" . $file_name;

        $headers = array(
            'Content-Type' => 'application/pdf',
        );

        return Response::download($file, $file_name, $headers);
    }
}
