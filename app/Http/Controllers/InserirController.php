<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use App\Models\articles;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;





class InserirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('inserir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        request()->validate([
            'email' => ['required', 'string', 'max:255'],
        ]);

        articles::create([
            'article' => request()->email
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
    public function update()
    {
        //
        request()->validate([
            'email' => ['required', 'string', 'max:255'],
            'article' => ['required', 'string', 'max:255'],
        ]);

        articles::create([
            'article' => request()->email
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
    public function delete()
    {
        //
        request()->validate([
            'email' => ['required', 'string', 'max:255'],
        ]);

        articles::create([
            'article' => request()->email
        ]);


        return redirect(RouteServiceProvider::HOME);
    }
}
