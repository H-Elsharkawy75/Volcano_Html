<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class CreateTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'member_name' => 'required|string|max:255',
            'member_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'member_role' => 'required|string|max:255',
            'member_facebook' => 'nullable|string|max:255',
            'member_twitter' => 'nullable|string|max:255',
            'member_linkedin' => 'nullable|string|max:255',
            'member_gmail' => 'nullable|string|max:255',

        ]);

        $team = Team::create($request->all());

        if ($request->hasFile('member_image')) {
            $imageName = $request->file('member_image')->store('teamimage', 'public');
            // $project->image_url = Storage::disk('public')->url($imageName);
            $team->member_image = $imageName;
            $team->save();
        }

        return redirect()->route('teams.index')->with('success', 'Team created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
        $this->validate($request, [
            'member_name' => 'required|string|max:255',
            'member_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'member_role' => 'required|string|max:255',
            'member_facebook' => 'nullable|string|max:255',
            'member_twitter' => 'nullable|string|max:255',
            'member_linkedin' => 'nullable|string|max:255',
            'member_gmail' => 'nullable|string|max:255',

        ]);

        $team->update($request->all());

        if ($request->hasFile('member_image')) {
            if ($team->member_image && Storage::disk('public')->exists($team->member_image)) {
                Storage::disk('public')->delete($team->member_image); // Delete the old member_image
            }

            $imageName = $request->file('member_image')->store('teamimage', 'public');
            $team->member_image = $imageName;
            $team->save();
        }

        return redirect()->route('teams.index')->with('success', 'Team Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        if ($team->member_image && Storage::disk('public')->exists($team->member_image)) {
            Storage::disk('public')->delete($team->member_image);
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'team deleted successfully');
    }
}
