<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $musics = Music::paginate(15);
        return view('index', compact('musics'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('picture')) {

            $Image = time() . '.' . $request->picture->getClientOriginalExtension();

            $request->picture->move(public_path('pics'), $Image);

            $request->merge([ 'image' => $Image ]);

         }

         if($request->hasFile('mp3')) {

            $Link = time() . '.' . $request->mp3->getClientOriginalExtension();

            $request->mp3->move(public_path('pics'), $Link);

            $request->merge([ 'link' => $Link ]);

         }

        $request->merge([ 'user_id' => auth()->user()->id ]);

        $validatedData = $request->validate([



            'user_id' => 'integer',
            'image' => 'nullable',
            'song' => 'required|max:255',
            'singer' => 'required|max:255',
            'genre' => 'required|max:255',
            'link' => 'nullable',

        ]);

        $music = Music::create($validatedData);

        return redirect('/musics')->with('success', 'The Song is successfully saved');
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
        $music = Music::findOrFail($id);


        if(auth()->user()->isAdmin != 1 && auth()->user()->id != $music->user_id)

        return redirect('/musics')->with('error', 'You are not admin!');
        $music = Music::findOrFail($id);

        return view('edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $music = Music::findOrFail($id);
        if(auth()->user()->isAdmin != 1 && auth()->user()->id != $music->user_id)

        return redirect('/musics')->with('error', 'You are not admin!');
        $validatedData = $request->validate([




            'image' => 'nullable',
            'song' => 'required|max:255',
            'singer' => 'required|max:255',
            'genre' => 'required|max:255',
            'link' => 'nullable',

        ]);

        Music::whereId($id)->update($validatedData);

        return redirect('/musics')->with('success', 'Music data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $music = Music::findOrFail($id);
        if(auth()->user()->isAdmin != 1 && auth()->user()->id != $music->user_id)

        return redirect('/musics')->with('error', 'You are not admin!');
        $music = Music::findOrFail($id);

        $music->delete();

        return redirect('/musics')->with('success', 'Music data is successfully deleted');
    }
}
