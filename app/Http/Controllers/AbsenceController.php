<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class AbsenceController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  // public function index() {

  //   if (auth()->user()==null) {
  //    return redirect('/home');
  //   }
  //   else {
  //   $user_id = auth()->user()->id;
  //   $ads = Absence::where('author_id', $user_id)->orderBy('id', 'desc')->simplePaginate(10);
  //   //$ads = Ad::orderBy('id', 'desc')->paginate(3);
  //   return view('ads.index', ['ads' => $ads]);
  //   }
  // }
  public function index()
  {
    $absences = Absence::select('absences.*', 'agents.name as agent_name', 'agents.surname as agent_surname', 'users.name as created_by_name')
      ->join('agents', 'absences.user_id', '=', 'agents.id')->leftJoin('users', 'absences.created_by', '=', 'users.id')
      ->orderBy('absences.id', 'desc')
      ->paginate(12);
    return view('absence.index', ['absences' => $absences]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create()
  {
    $agents = Agent::where('is_active', true)->get();

    return view('absence.create', ['agents' => $agents]);
  }


  /**ts
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request)
  {
    $request->validate([
      'type' => 'required',
      'campagne' => 'required',
      'activity' => 'required',
      'segment' => 'required',
      'shift' => 'required',
      'start' => 'required'
    ]);
    $user_id = auth()->user()->id;
    if ($request->type == 'demission') {
      Agent::where('id', $request->user_id)->update(['is_active' => false]);
  }
    $postData = ['user_id' => $request->user_id, 'type' => $request->type, 'campagne' => $request->campagne, 'activity' => $request->activity, 'segment' => $request->segment, 'shift' => $request->shift, 'start' => $request->start, 'end' => $request->end, 'created_by' => $user_id];
    Absence::create($postData);
    return redirect('/absence')->with(['message' => 'Absence added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsAd  $absence
   * @return IlluminateHttpResponse
   */
  public function show(Absence $absence)
  {
      $absenceData = Absence::select('absences.*', 'agents.name as agent_name', 'agents.surname as agent_surname', 'users.name as created_by_name')
          ->join('agents', 'absences.user_id', '=', 'agents.id')
          ->leftJoin('users', 'absences.created_by', '=', 'users.id')
          ->where('absences.id', $absence->id)
          ->first();
  
      return view('absence.show', ['absence' => $absenceData]);
  }
  
  

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsAd  $absence
   * @return IlluminateHttpResponse
   */
  public function edit(Absence $absence)
  {
    $agents = Agent::where('is_active', true)->get();
    return view('absence.edit', ['absence' => $absence, 'agents' => $agents]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsAd  $ad
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Absence $absence)
  {
    $user_id = auth()->user()->id;
    $postData = ['user_id' => $request->user_id, 'type' => $request->type, 'campagne' => $request->campagne, 'activity' => $request->activity, 'segment' => $request->segment, 'shift' => $request->shift, 'start' => $request->start, 'end' => $request->end, 'created_by' => $user_id];
    $postData = ['title' => $request->title, 'price' => $request->price, 'category' => $request->category, 'description' => $request->description, 'location' => $request->location, 'image' => $imageName];

    $absence->update($postData);
    return redirect('/absence')->with(['message' => 'Absence updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsAd $ad
   * @return IlluminateHttpResponse
   */
  public function destroy(Absence $absence)
  {
    $absence->delete();
    return redirect('/absence')->with(['message' => 'Absence deleted successfully!', 'status' => 'info']);
  }
}
