<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
  protected $validationRules = [
      'title'       => 'required|unique:comics|max:200',
      'description' => 'nullable',
      'thumb'       => 'nullable|URL|max:200',
      'price'       => 'required|numeric|min:0',
      'series'      => 'required|max:200',
      'sale_date'   => 'required|date|before:tomorrow',
      'type'        => 'required|max:50',
  ];
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $comics = Comic::paginate(6);
    return response(view('comics.index', compact('comics')));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return response(view('comics.create'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate($this->validationRules);

    $comic = new Comic($request->all());
    $comic->price *= 100;
    $comic->save();

    return redirect()->route('comics.index')->with('success', 'Comic created successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function show(Comic $comic)
  {
    return response(view('comics.show', compact('comic')));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function edit(Comic $comic)
  {
    return response(view('comics.edit', compact('comic')));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Comic $comic)
  {
    // $this->validationRules['title'] = Rule::unique('comics')->ignore($comic->id);
    $this->validationRules['title'] = "required|unique:comics,title,{$comic->id}";
    $request->validate($this->validationRules);

    $comic->update($request->all());
    $comic->price = $request->price * 100;
    $comic->save();

    return redirect()->route('comics.show', $comic->id)->with('success', 'Comic updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Comic  $comic
   * @return \Illuminate\Http\Response
   */
  public function destroy(Comic $comic)
  {
    $previousUrl = url()->previous();

    if ($previousUrl === route('comics.show', $comic->id)) {
      $previousUrl = route('comics.index');
    }

    $comic->delete();

    return redirect($previousUrl)->with('success', 'Comic deleted successfully');
  }
}
