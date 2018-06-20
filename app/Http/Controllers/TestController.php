<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart = Charts::multi('bar', 'material')
                    // Setup the chart settings
                    ->title("My Cool Chart")
                    // A dimension of 0 means it will take 100% of the space
                    ->dimensions(0, 400) // Width x Height
                    // This defines a preset of colors already done:)
                    ->template("material")
                    // You could always set them manually
                    // ->colors(['#2196F3', '#F44336', '#FFC107'])
                    // Setup the diferent datasets (this is a multi chart)
                    ->dataset('Element 1', [5,20,100])
                    ->dataset('Element 2', [15,30,80])
                    ->dataset('Element 3', [25,10,40])
                    // Setup what the values mean
                    ->labels(['One', 'Two', 'Three']);

                return view('test', ['chart' => $chart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
