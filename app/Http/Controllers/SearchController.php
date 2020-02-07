<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glossary;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function search(Request $request){
        //Validation
        $this->validate($request, [
            'search_data' => 'required|string|max:100',
        ]);

        $glossaries = Glossary::where('glossaries.name', 'like', '%' . $request->search_data . '%')
            ->orWhere('terms.name', 'like', '%' . $request->search_data . '%')
            ->join('terms', 'terms.glossary_id', 'terms.glossary_id')
            ->select('glossaries.*')
            ->distinct('glossaries')->get();

        //Returning the view
        return view('search_result', [
            'glossaries' => $glossaries,
            'search_data' => $request->search_data,
        ]);
    }
}
