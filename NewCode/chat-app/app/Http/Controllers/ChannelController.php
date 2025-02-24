<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    public function create()
    {
        return view('channels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:channels',
            'description' => 'nullable|string',
        ]);

        Channel::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('channels.index')->with('success', 'Channel created successfully!');
    }

    public function destroy(Channel $channel)
    {
        $channel->delete();
        return redirect()->route('channels.index')->with('success', 'Channel deleted successfully!');
    }
}