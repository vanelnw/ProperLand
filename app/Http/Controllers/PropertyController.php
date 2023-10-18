<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Property;

use App\Http\Requests\SearchFormRequest;

use App\Http\Requests\MailFormRequest;
use Illuminate\Support\Facades\Mail;

use App\Mail\PropertyContactMail;


class PropertyController extends Controller
{
    public function index(SearchFormRequest $request){

        $query = Property::query();
        if($request->validated('price')) {
            $query =  $query->where('price', '<', $request->validated('price'));
        }

        if($request->validated('surface')) {
            $query =  $query->where('surface', '>', $request->validated('surface'));
        }

        if($request->validated('rooms')) {
            $query =  $query->where('rooms', '>', $request->validated('rooms'));
        }
        
        if($request->validated('title')) {
            $query =  $query->where('title', 'like', "%$request->validated('title')%");
        }
    
        return view('property.index',[
            'properties'=> $query->paginate(16),
            'input' =>$request->validated(),
        ]);
    }

    public function Show(string $slug, Property $property){

        $expectedSlug = $property->getSlug();
        if($slug !== $expectedSlug){
            return to_route('property.show', ['slug'=>$expectedSlug, 'property'=>$property]);
        }

        return  view('property.show', [
            'property' => $property
        ]);

    }

    public function contact(Property $property , MailFormRequest $request){
        Mail::send(new PropertyContactMail($property,$request->validated()));
        return back()->with('success', 'votre demande de contact a bien ete envoyer');
    }
}
