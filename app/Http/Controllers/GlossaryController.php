<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Glossary;
use App\Term;

class GlossaryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /*--------------------------------------------------------------
        Glossary validation
    --------------------------------------------------------------*/
    private function validateGlossary() {

        return request()->validate([
            'name' => 'required|string|max:100',
            'term1' => 'required|string|max:100',
            'term2' => 'required|string|max:100',
            'term3' => 'required|string|max:100',
            'term4' => 'nullable|string|max:100',
            'term5' => 'nullable|string|max:100',
        ]);

    }

    /*--------------------------------------------------------------
        Show new glossary
    --------------------------------------------------------------*/
    public function new(){
        return view('home_views/glossary_new');
    }

    /*--------------------------------------------------------------
        Show new glossary
    --------------------------------------------------------------*/
    public function show($id){
        $glossary = Glossary::where('glossary_id', $id)->first();
        return view('home_views/glossary', [
            'glossary' => Glossary::where('glossary_id', $id)->first(),
            'terms' => $glossary->terms(),
        ]);
    }

    /*--------------------------------------------------------------
        Show edit glossary
    --------------------------------------------------------------*/
    public function edit($id){
        $glossary = Glossary::where('glossary_id', $id)->first();
        return view('home_views/glossary_edit', [
            'glossary' => Glossary::where('glossary_id', $id)->first(),
            'terms' => $glossary->terms(),
        ]);
    }

    /*--------------------------------------------------------------
        Show my glossaries
    --------------------------------------------------------------*/
    public function showMyGlossaries(){
        return view('home_views/glossaries', [
            'glossaries' => Glossary::where('user_id', Auth::user()->user_id)->get()
        ]);
    }

    /*--------------------------------------------------------------
        Create glossary
    --------------------------------------------------------------*/
    public function create(Request $data){
        $this->validateGlossary();

        //Creates the glossary
        $glossary = new Glossary;
        $glossary->name = $data->name;
        $glossary->user_id = Auth::user()->user_id;
        $glossary->save();
        
        for ($i=1; $i <= 5; $i++) { 
            if (isset($data['term'.$i])) {
                $term = new Term;
                $term->name = strval($data['term'.$i]);
                $term->glossary_id = $glossary->glossary_id;
                $term->save();
            }
        }

        return redirect()->back()->with('success', 'Congrats! You have created a Glossary. You can see it <a href="/user/glossary/show/'.$glossary->glossary_id.'">here</a>.');
    }

    /*--------------------------------------------------------------
        Update glossary
    --------------------------------------------------------------
    public function update($id, Request $data){
        $this->validateGlossary();

        //Creates the glossary
        $glossary = Glossary::where([
            ['glossary_id', $id],
            ['user_id', Auth::user()->user_id],
            ])->first();
        $glossary->name = $data->name;
        $glossary->user_id = Auth::user()->user_id;
        $glossary->save();
        
        $terms = Terms::where('glossary_id', $id)->get();

        foreach ($terms as $term){

        }

        for ($i=1; $i <= 5; $i++) { 
            if (isset($data['term'.$i])) {
                $term = new Term;
                $term->name = strval($data['term'.$i]);
                $term->glossary_id = $glossary->glossary_id;
                $term->save();
            }
        }

        return redirect()->back()->with('success', 'You have updated your Glossary. You can see it <a href="/user/glossary/show/'.$glossary->glossary_id.'">here</a>.');
    }
    */
}
