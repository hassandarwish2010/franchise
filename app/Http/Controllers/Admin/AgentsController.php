<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent;

class AgentsController extends Controller
{
  /**
   * Show all agent
   *
   * @return response
   */
  public function index(Agent $agent) {
     $agents = $agent->orderBy('id', 'asc')->get();
     foreach ($agents as $agent) {
       $agent->image = asset('public/uploads/thumbs/' . $agent->image);
     }
     return view('admin.agents.index', compact('agents'));
  }

  /**
   * Create new agent
   *
   * @return response
   */
  public function create() {
    return view('admin.agents.create');
  }

  /**
   * Store new agent
   *
   * @return response
   */
  public function store(Request $request) {
    request()->validate([
      'image' => 'required|image|max:5000',
    ]);

    $request->image = uploadImage($request->image);

    $agent = Agent::create($request->all());
    $agent->image =  $request->image;
    $agent->save();

    return redirect()->back()->with(['success' => 'Agent inserted successfully']);
  }

  /**
   * edit existing agent
   *
   * @return response
   */
  public function edit($id) {
    $agent = Agent::find($id);

    if (! $agent) {
      return redirect()->back()->with(['error' => 'Agent Not Found']);
    }

    $agent->image = asset('public/uploads/thumbs/' . $agent->image);

    return view('admin.agents.edit', compact('agent'));
  }

  /**
   * update existing agent
   *
   * @return response
   */
  public function update($id, Request $request) {
    $agent = Agent::find($id);

    if (! $agent) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    request()->validate([
      'image' => 'required|image|max:5000',
    ]);

    $agent = $agent->fill($request->all());
    $agent->image = uploadImage($request->image);
    $agent->save();

   return redirect()->back()->with(['success' => 'Agent updated successfully']);
  }

  /**
   * Delete agent by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $agent = Agent::find($id);

    if (! $agent) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Agent::destroy($id);
    return redirect()->back()->with(['success' => 'Agent deleted successfully']);
  }
}
