<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aboutus = About::all();
        return view('about.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'client_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:255',
        ]);
        // dump($request);

        $about = About::create($request->all());

        if ($request->hasFile('client_image')) {
            $imageName = $request->file('client_image')->store('aboutimage', 'public');
            $about->client_image = $imageName;
            $about->save();
        }

        return redirect()->route('aboutus.index')->with('success', 'service created successfully');
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
    public function edit(About $about)
    {
        //
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000'
        ]);

        $about->update($request->all());

        if ($request->hasFile('client_image')) {
            if ($about->image && Storage::disk('public')->exists($about->client_image)) {
                Storage::disk('public')->delete($about->client_image); // Delete the old image
            }

            $imageName = $request->file('client_image')->store('aboutimage', 'public');
            $about->client_image = $imageName;
            $about->save();
        }

        return redirect()->route('aboutus.index')->with('success', 'about updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        if ($about->client_image && Storage::disk('public')->exists($about->client_image)) {
            Storage::disk('public')->delete($about->client_image);
        }
        dd($about);
        $about->delete();

        return redirect()->route('aboutus.index')->with('success', 'about deleted successfully');
    }
}
