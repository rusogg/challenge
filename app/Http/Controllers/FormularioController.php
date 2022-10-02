<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use App\Models\Brands;
use App\Models\Access_types;
use App\Models\Discounts;
use App\Models\Discount_ranges;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->post('activo') == "ON"){
            $respuesta = 1;
        } else{
            $respuesta = 0;
        }
        $discounts = new Discounts();
        $discounts->name = $request->post('nombre');
        $discounts->active = $respuesta;
        $discounts->brand_id = $request->post('rentadora');
        $discounts->access_type_code = $request->post('acceso');
        $discounts->priority = $request->post('prioridad');
        $discounts->region_id = $request->post('region');
        $discounts->start_date = $request->post('desdeGeneral');
        $discounts->end_date = $request->post('hastaGeneral');
        $discounts->save();

        $discount_ranges = new Discount_ranges();
        $discount_ranges->discount_id = Discounts::latest('id')->first()->id;
        $discount_ranges->from_days = $request->post('desde');
        $discount_ranges->to_days = $request->post('hasta');
        $discount_ranges->code = $request->post('codigo');
        $discount_ranges->discount = $request->post('descuento');
        $discount_ranges->save();

        $discount_ranges = new Discount_ranges();
        $discount_ranges->discount_id = Discounts::latest('id')->first()->id;
        $discount_ranges->from_days = $request->post('desde2');
        $discount_ranges->to_days = $request->post('hasta2');
        $discount_ranges->code = $request->post('codigo2');
        $discount_ranges->discount = $request->post('descuento2');
        $discount_ranges->save();

        $discount_ranges = new Discount_ranges();
        $discount_ranges->discount_id = Discounts::latest('id')->first()->id;
        $discount_ranges->from_days = $request->post('desde3');
        $discount_ranges->to_days = $request->post('hasta3');
        $discount_ranges->code = $request->post('codigo3');
        $discount_ranges->discount = $request->post('descuento3');
        $discount_ranges->save();
        
        
        

        return redirect()->route("personas.principal")->with("success", "Agregado con Exito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function show(Regions $regions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('actualizar')->with($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regions $regions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regions $regions)
    {
        //
    }
}
