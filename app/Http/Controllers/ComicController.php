<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->fill($this->validation($data));

        $newComic->save();

        return redirect()->route('comic.index', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Comic::findOrFail($id);

        return view('comics.show', compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single = Comic::findOrFail($id);

        return view('comics.edit', compact('single'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $single = Comic::findOrFail($id);

        $data = $this->validation($request->all());

        $single->update($data);

        return redirect()->route('comic.index', $single->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single = Comic::findOrFail($id);

        $single->delete();

        return redirect()->route('comic.index');
    }
    
    public function validation($form_data){
        $validation = Validator::make($form_data, [
            'title' => 'required|max:60',
            'description' => 'required|max:1000',
            'thumb' => 'nullable|max:200',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:30',
        ],
        [
            'title.required' => 'Titolo obbligatorio',
            'title.max' =>'Numero massimo di caratteri :max',
            'description.required' => 'Descrizione obbligatoria',
            'description.max' =>'Numero massimo di caratteri :max',
            'thumb.max' =>'Numero massimo di caratteri :max',
            'price.required' => 'Prezzo obbligatorio',
            'price.max' =>'Numero massimo di caratteri :max',
            'series.required' => 'Serie obbligatoria',
            'series.max' =>'Numero massimo di caratteri :max',
            'sale_date.required' => 'Data obbligatoria',
            'sale_date.max' =>'Numero massimo di caratteri :max',
            'type.required' => 'Tipo obbligatorio',
            'type.max' =>'Numero massimo di caratteri :max'
        ])->validate();

        return $validation;
    }
}
