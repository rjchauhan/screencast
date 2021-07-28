<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function __invoke($file)
    {
        abort_if(auth()->guest(), Response::HTTP_FORBIDDEN);

        $path = "secret/$file";

        abort_unless(Storage::exists($path), Response::HTTP_NOT_FOUND);

        return response()->file(
            Storage::path($path)
        );
    }
}
