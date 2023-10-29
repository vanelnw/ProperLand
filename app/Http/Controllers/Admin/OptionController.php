<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\OptionFormRequest;

use App\Models\Option; 

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve a list of options and return the view to display them
        $options = Option::all();
        return view('admin.options.index', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.options.form',['option'=> new Option()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $option = Option::create($request->validated());
        return redirect()->route('admin.option.index')->with('success', 'Option created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     // Retrieve the specified option and return the view to display it
    //     $option = Option::findOrFail($id);
    //     return view('admin.options.show', compact('option'));
    //}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
       // $option = Option::findOrFail($id);
        return view('admin.options.form',['option'=> $option]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option)
    {
        // Find the option by ID and update it with the validated data
        $option->update($request->validated());

        // Redirect to the index page with a success message
       // return redirect()->route('admin.option.index')->with('success', 'Option updated successfully.');
        return redirect()->route('admin.option.index')->with('success', 'Option updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        // Find the option by ID and delete it
        //$option = Option::findOrFail($id);
        $option->delete();

        // Redirect to the index page with a success message
        return redirect()->route('admin.option.index')->with('success', 'Option deleted successfully.');
    }
}
