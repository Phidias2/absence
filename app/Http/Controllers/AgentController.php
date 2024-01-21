<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    // public function index()
    // {
    //     $agents = Agent::orderBy('id', 'desc')->paginate(12);
    //     return view('agent.index', ['agents' => $agents]);
    // }
    // modifie pour recuperer pour chaque agent le nombre d'absence qu'il a. Les absences sont dans la table absences avec une colonne user_id

    public function index()
{
    $agents = Agent::select('agents.*', \DB::raw('COUNT(absences.id) as absence_count'))
        ->leftJoin('absences', 'agents.id', '=', 'absences.user_id')
        ->groupBy('agents.id')
        ->orderBy('agents.id', 'desc')
        ->paginate(12);
    return view('agent.index', ['agents' => $agents]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return IlluminateHttpResponse
     */
    public function create()
    {
        return view('agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @return IlluminateHttpResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'sexe' => 'required',
            'statut' => 'required',
        ]);
        $postData = ['name' => $request->name, 'surname' => $request->surname, 'sexe' => $request->sexe,
         'statut' => $request->statut, 'is_active' => true];

        Agent::create($postData);
        return redirect('/agent')->with(['message' => 'Agent cree avec succes!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  AppModelsPost  $agent
     * @return IlluminateHttpResponse
     */
    public function show(Agent $agent)
    {
        $absences = Absence::where('user_id', $agent->id)->get();
        $absenceCount = $absences->count();
        return view('agent.show', ['agent' => $agent, 'absences' => $absences, 'absenceCount' => $absenceCount]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function edit(Agent $agent)
    {
        return view('agent.edit', ['agent' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function update(Request $request, Agent $post)
    {
        $imageName = '';
        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/images', $imageName);
            if ($post->image) {
                Storage::delete('public/images/' . $post->image);
            }
        } else {
            $imageName = $post->image;
        }

        $postData = ['title' => $request->title, 'price' => $request->price, 'category' => $request->category, 'content' => $request->content, 'image' => $imageName];

        $post->update($postData);
        return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  AppModelsPost  $post
     * @return IlluminateHttpResponse
     */
    public function destroy(Agent $post)
    {
        $post->delete();
        return redirect('/agent')->with(['message' => 'Agent deleted successfully!', 'status' => 'info']);
    }
}
