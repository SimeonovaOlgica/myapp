<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //helps dealing with mass assigment error -> when the app is not allowing to enter data in the formFields varibale 
    protected $fillable = ['title', 'company', 'location',
    'email','website','tags','logo','description'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query ->where('title','like','%'.request('search'). '%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('tags','like','%'.request('search').'%')
            ->orWhere('company','like','%'.request('search').'%');
        }
    }
}
