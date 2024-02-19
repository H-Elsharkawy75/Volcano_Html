<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $messages = Message::all();
        return view('messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'firstname' => 'required|string|max:20',
            'lastname' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:2050',
            'phone' => 'nullable|string|max:14',
            'subject' => 'nullable|string|max:255',
        ]);
        // dd($request);

        $message = Message::create($request->all());


        return redirect()->route('index')->with('success', 'message sent successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'message deleted successfully');
    }
}
