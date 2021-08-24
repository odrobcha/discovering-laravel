<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitFormRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hello()
    {
        return view('hello');
    }

    public function museums()
    {
        $header = 'The list of museums you can visit';

        return view('museums', ['header'=>$header]);
    }

    public function cinemas()
    {
        $header = 'The list of cinemas you can visit';

        return view('cinemas', ['header'=>$header]);
    }

    public function visit()
    {
        $header = 'Send us message which museum/cinema you want visit';

        return view('visit', ['header'=>$header]);
    }

    public function handleForm(VisitFormRequest $request)
    {
        dd($request->all());
    }
}

