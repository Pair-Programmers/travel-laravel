<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        return view('adminpanel.pages.tours.list', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.pages.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|required',
            'description' => 'string|required',
            'duration' => 'numeric|required',
            'price' => 'numeric|required'
        ]);

        \App\Models\Tour::create([
            'name' => $request->name,
            'summary' => $request->summary,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
            'last_booking_date' => $request->last_booking_date,
        ]);

        return redirect()->route('admin.tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('adminpanel.pages.tours.edit', compact('tour'));
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
        $this->validate($request, [
            'name' => 'string|required',
            'summary' => 'string|required',
            'description' => 'string|required',
            'duration' => 'numeric|required',
            'price' => 'numeric|required'
        ]);

        $tour = Tour::find($id);

        $tour->name = $request->name;
        $tour->summary = $request->summary;
        $tour->description = $request->description;
        $tour->duration = $request->duration;
        $tour->price = $request->price;
        $tour->price = $request->last_booking_date;

        $tour->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);

        $tour->delete();

        return redirect()->back();
    }
}
