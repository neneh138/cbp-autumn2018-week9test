<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index(){
      $heros = Hero::orderBy('name','asc')->get();

      return view ('hero/index',compact('heros')); 
    }

    public function create()
    {
       return view('hero.index');
    }

    public function store(Request $request){
        
             $this->validate($request, [
             'subject'=> 'required',
             'description'=> 'required',
              
         ]);

        $emergency = new Emergency;
        $emergency->subject = $request->input('subject');
        $emergency->description = $request->input('description');

        $emergency->save();
        

        return redirect (action ('HeroController@index'));

    
    }

    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }



}
