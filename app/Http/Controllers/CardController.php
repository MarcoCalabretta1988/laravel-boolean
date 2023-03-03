<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $card = new Card();
        return view('cards.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'mana' => 'required|numeric|min:0|max:99',
            'thumb' => 'url|nullable',
            'edition' => 'required|numeric|min:1|max:9',
            'str' =>  'required|numeric|min:1|max:9',
            'constitution' =>  'required|numeric|min:1|max:9',
            'description' => 'string|nullable',
            'type' => 'required|string',
            'effect' => 'required|string',

        ]);
        $data = $request->all();
        $data['effect'] = explode(',', $data['effect']);
        $card = new Card();
        $card->fill($data);
        $card->save();

        return to_route('cards.show', $card->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {

        $request->validate([
            'name' => 'required|string',
            'mana' => 'required|numeric|min:0|max:99',
            'thumb' => 'url|nullable',
            'edition' => 'required|numeric|min:1|max:9',
            'str' =>  'required|numeric|min:1|max:9',
            'constitution' =>  'required|numeric|min:1|max:9',
            'description' => 'string|nullable',
            'type' => 'required|string',
            'effect' => 'required|string',

        ]);
        $data = $request->all();
        $data['effect'] = explode(',', $data['effect']);
        $card->fill($data);
        $card->save();

        return to_route('cards.show', $card->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return to_route('cards.index');
    }
}
