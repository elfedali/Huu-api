<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // about api

    public function about()
    {

        return response()->json([
            'name' => config('app.name'),
            'version' => app()->version(),
            'author' => config('app.author'),
            'author_url' => 'https://laravel.com',
            'license' => 'MIT',
            'license_url' => 'https://opensource.org/licenses/MIT',
            'description' => 'huu-api is a laravel framework web application api.',

        ]);
    }
}
