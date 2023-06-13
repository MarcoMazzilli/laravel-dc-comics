<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id','desc')->get();
        return view('comic.index', ["comics" => $comics ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Controllo sui dati ricevuti
        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date_format:Y/m/d',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ],
        [
            'title.required' => 'Il titolo è un campo obbligatiorio',
            'title.min' => 'Il titolo deve contenere min. :min caratteri',
            'description.required' => 'la descrizione è un campo obbligatiorio',
            'thumb.required' => 'la thumb è un campo obbligatiorio',
            'price.required' => 'Il prezzo è un campo obbligatiorio',
            'series.required' => 'La serie è un campo obbligatiorio',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'sale_date.date_format' => 'Inserire la data in formato yyyy/mm/dd',
            'artists.required' => 'L\'artista è un campo obbligatiorio',
            'writers.required' => 'Lo scrittore è un campo obbligatiorio',
        ]);

        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view ('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
