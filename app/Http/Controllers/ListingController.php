<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index(){
        //dd();
        return view('listings.index', [
            'listings'=> Listing::latest()->filter
            (request(['search']))->get()
        ]);
    }
    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create(){
        return view('listings.create');
    }

    //Store the POST data
    public function store(Request $request){
       // dd($request->file('logo')->store());
        $formFields = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'website'=>['required',Rule::unique('listings','company')],
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>['required', 'max:255']
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($formFields); //passing the form data into the database

        return redirect('/')->with('message', 'Listing created');
    }
}
