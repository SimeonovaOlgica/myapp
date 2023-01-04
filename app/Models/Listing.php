<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Once we run the artisan make:model command we get a table taht we can add data in our DB

class Listing extends Model
{
    use HasFactory;

    //helps dealing with mass assigment error -> when the app is not allowing to enter data in the formFields varibale 
    protected $fillable = ['title', 'company', 'location',
    'email','website','tags','logo','description'];

    //Search functionality -> 
    //filtering the job posts by keywords searched (in title, description, tags and company name)
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query ->where('title','like','%'.request('search'). '%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('tags','like','%'.request('search').'%')
            ->orWhere('company','like','%'.request('search').'%');
        }
    }
}
