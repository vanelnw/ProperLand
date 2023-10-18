<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

use App\Http\Requests\Admin\AgentFormRequest;

use App\Models\Agent; 

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view("admin.agents.index", ['agents'=> $agents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agents.form',['agent'=> new Agent()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgentFormRequest $request)
    {
        $agent = new Agent();
        $agent = Agent::create($this->extractImageData($agent,$request));
        return redirect()->route('admin.agent.index')->with('success', 'Agent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        return view('admin.agents.form',['agent'=> $agent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgentFormRequest $request, Agent $agent)
    {
        $agent->update($this->extractImageData($agent,$request));
        return to_route('admin.agent.index')->with('success', 'Agent updated successfully.');
    }

    private function extractImageData(Agent $agent, AgentFormRequest $request ):array{

        $data = $request->validated();

           /** @var UploadedFile|null $image */
            $image = $request->validated('image');
            if($image === null && $image->getError()){
                return $data;
            } 
            if($agent->image){
                Storage::disk('public')->delete($agent->image);
            }

            $data['image'] = $image->store('agent_images', 'public');

            return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('admin.agent.index')->with('success', 'Agent deleted successfully.');
    }
}
