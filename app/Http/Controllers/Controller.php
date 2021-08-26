<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitFormRequest;
use App\Http\Requests\PonyFormRequest;
use App\Models\Pony;
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
    public function ponies()
    {
        $header = 'The list of ponies';
        $ponies = Pony::get();
        //$ponies = Pony::all();
       // $ponies_name = Pony::pluck('name');
        $pony_names = Pony::pluck('name', 'id'); //to get also id

       // foreach ($ponies as $pony ) {
        //    $pony->name;
        //array_push($ponies_name, $pony->name)
       // }
       // dd($ponies);
       // dd($ponies_name);

        return view('ponies', ['header'=>$header, 'pony_names' => $pony_names]);
    }
    public function add()
    {
        return view('add');
    }

    public function visit()
    {
        $header = 'Send us message which museum/cinema you want visit';

        return view('visit', ['header'=>$header]);
    }

    public function handlePonyForm(PonyFormRequest $request)
    {
        $pony = new Pony;

        $pony->name = $request->name;
        $pony->save();
        return redirect()->route('ponies');
    }


    public function handleForm(VisitFormRequest $request)
    {
        dd($request->all());
    }
}

