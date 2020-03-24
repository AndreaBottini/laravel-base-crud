<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motorcycle;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorcycles = Motorcycle::all();
        // dd($motorcycles);

        return view('motorcycles.index', compact('motorcycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motorcycles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $request->validate([
            'producer' => 'required|string|max:60',
            'model' => 'required|string|max:50',
            'price' => 'required|numeric|min:1|max:9999',
            'year' => 'required|string|max:4',
            'color' => 'required|string|',
            'description' => 'required|string'
        ]);

        $motorcycle = new Motorcycle;

        // $motorcycle->producer = $data['producer'];
        // $motorcycle->model = $data['model'];
        // $motorcycle->price = $data['price'];
        // $motorcycle->year = $data['year'];
        // $motorcycle->color = $data['color'];
        // $motorcycle->description = $data['description'];

        $motorcycle->fill($data);
        $saved = $motorcycle->save();

        if($saved == true)
        {
            return redirect()->route('motorcycles.index');
        }
        else {
            abort(404);
        }
        
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
