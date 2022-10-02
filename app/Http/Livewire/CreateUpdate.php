<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Regions;
use App\Models\Brands;
use App\Models\Access_types;
use App\Models\Discounts;
use App\Models\Discount_ranges;
use Illuminate\Http\Request;

class CreateUpdate extends Component
{
   


    
    public $discount;
    public $nombre;
    public $prioridad;
    public $desde;
    public $hasta;
    public $codigo;
    public $descuento;
    public $desde2;
    public $hasta2;
    public $codigo2;
    public $descuento2;
    public $desde3;
    public $hasta3;
    public $codigo3;
    public $descuento3;
    public $desdeGeneral;
    public $hastaGeneral;
    public $completo;


    

    
    

   

    public function render()
    {
        
        $brands = Brands::orderBy('display_order', 'ASC')->get();
        $regions = Regions::orderBy('display_order', 'ASC')->get();
        $access = Access_types::orderBy('display_order', 'ASC')->get();
        $discount_ranges = Discount_ranges::get();
        return view('livewire.create-update', compact('regions', 'brands', 'access', 'discount_ranges'));
    }

    public function edit($id)
    {
        $discount = Discounts::find($id);
        return view('actualizar', compact('discount'));
    }

    public function update(Request $request, $id)
    {
        

        $request->validate([
            'nombre' => 'required|max:30|alpha_num',
        'prioridad' => 'required|numeric|max:100|min:1',
        'desde' => 'required|numeric|',
        'hasta' => 'required|numeric|gt:desde',
        'descuento' => 'required_without:codigo|numeric|nullable',
        'codigo' => 'required_without:descuento|alpha_num|nullable',
        'desde2' => 'required|numeric|',
        'hasta2' => 'required|numeric|gt:desde2',
        'codigo2' => 'alpha_num|required_without:descuento2|nullable',
        'descuento2' => 'numeric|required_without:codigo2|nullable',
        'desde3' => 'required|numeric|',
        'hasta3' => 'required|numeric|gt:desde3',
        'codigo3' => 'alpha_num|required_without:descuento3|nullable',
        'descuento3' => 'numeric|required_without:codigo3|nullable',
        'desdeGeneral' => 'required',
        'hastaGeneral' => 'required',
        ]);

        if($request->post('activo') == true){
            $respuesta = 1;
        } else{
            $respuesta = 0;
        }
        $discounts = Discounts::find($id);
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
        
        
        

        return redirect()->route("descuentos.principal")->with("success", trans('messages.Actualizado'));
    }

    public function destroy($id)
    {
        

        $discounts = Discounts::find($id);

        $discounts->active = 0;
        $discounts->save();
        
        
        

        return redirect()->route("descuentos.principal")->with("success", trans('messages.Borrado'));
    }

    public function show($id)
    {
        
        $discount = Discounts::find($id);
        return view('eliminar', compact('discount'));
    
    }

    
}
