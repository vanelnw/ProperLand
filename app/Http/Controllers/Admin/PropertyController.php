<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\PropertyFormRequest;

use App\Models\Property;
use App\Models\Option; 
use App\Models\Agent;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => Property::with('images')->orderBy('created_at', 'desc')->paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $property = new Property([
            'surface' => 40,
            'rooms'   => 3,
            'bedrooms' => 2,
            'bathrooms' => 1,
            'floor' => 0,
            'city' => 'Yaounde',
            'postal_code' => 3737,
            'sold_or_rent' => false,
            'for_sale' => false,
        ]);

        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
            'agents' => Agent::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    { 
        $property = Property::create($request->validated());
        $property->options()->sync($request->validated('options'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('property_images', 'public');

                // Créez une nouvelle image associée à la propriété
                $property->pictures()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        return to_route('admin.property.index')->with('success', 'Le bien a été enregistré');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
       // $property = Property::find($id);
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
            'agents' => Agent::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        //$property = Property::find($id);
       // dd($request->validated());
          $property->update($request->validated());
          $property->options()->sync($request->validated('options'));

        if ($request->hasFile('images')) {
            // dd($request->file('images'));
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('property_images', 'public');

                // Créez une nouvelle image associée à la propriété
                $property->pictures()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.property.index')->with('success', 'Le bien a été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //$property = Property::find($id);
        $property->delete();
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été supprimé');
    }
}
