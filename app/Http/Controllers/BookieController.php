<?php

namespace App\Http\Controllers;

use App\Models\Bookie;
use Illuminate\Http\Request;

class BookieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['record'] = Bookie::where('isbn',$request->search)->get();
        $data['bookies'] = Bookie::all();
        return view('home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required',
            'author'=> 'required',
            'isbn'=> 'required',
            'cover'=> 'required|mimes:jpg,png',
            'descr'=> 'required',
        ]);
 
        $filename = time(). "." .$request->cover->extension();
 
        $request->cover->move(public_path('covers'),$filename);
 
        Bookie::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'cover' => $filename,
            'descr' => $request->descr,
        ]);
        return redirect()->back();
     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookie  $bookie
     * @return \Illuminate\Http\Response
     */
    public function show(Bookie $bookie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookie  $bookie
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookie $bookie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookie  $bookie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookie $bookie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookie  $bookie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookie $book)
    {
        $book->delete();
        return redirect()->back();
    }
}
