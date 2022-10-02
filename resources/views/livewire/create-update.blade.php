<div>
    <div class="card">
        <div class="card-header">
         Actualizar
        </div>
        <div class="card-body">
          <p class="card-text">
            <form action="{{route('formulario.update' , $discount->id)}}" method="POST">
                @csrf
                @method("PUT")

                @foreach ($discount_ranges as $discount_ranges)
                @if($discount_ranges->discount_id == $discount->id)
                        @php
                            $ArrayFrom[] = $discount_ranges->from_days;
                            $ArrayTo[] = $discount_ranges->to_days;
                            $ArrayDiscount[] = $discount_ranges->from_days;
                            $ArrayCode[] = $discount_ranges->code;
                            
                        @endphp

                        
                            
                        
                        
                        @endif
               @endforeach

               



                <div class="row mb-5">
                    <div class="col-6">
                      <input type="text" name="nombre"  value="{{$discount->name}}"  class="form-control" >
                      @error('nombre')
                        <span>
                          {{$message}}
                        </span>
                      @enderror
                  </div>
                    <div class="col-6">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="activo" id="activo" @if($discount->active == 1) checked @endif>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Activado/desactivado</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-5 ">
                    <div class="col-3">
                      <select class="form-select" name="rentadora" aria-label="Default select example">
                        
                        @foreach ($brands as $brands)
                        @if ($brands->active != 0)

                        @if($discount->brand_id == $brands->id)
                        <option value="{{$brands->id}}">{{$brands->name}}</option>
                        @endif
                        
                        <option value="{{$brands->id}}">{{$brands->name}}</option>
                        @endif
                        
                        @endforeach
                      </select>
                    </div>
                    <div class="col-3">
                      <select class="form-select" name="acceso" aria-label="Default select example">
                        
                        @foreach ($access as $access)
                        @if($discount->access_type_code == $access->code)
                        <option value="{{$access->code}}">{{$access->name}}</option>
                        @endif
                        <option value="{{$access->code}}">{{$access->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-3">
                      <input type="number" value="{{$discount->priority}}"  name="prioridad" class="form-control" >
                      @error('prioridad')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                    </div>
                    <div class="col-3">
                      <select class="form-select" name="region" aria-label="Default select example">
                        
                        @foreach ($regions as $regions)
                        @if($discount->region_id == $regions->id)
                        <option value="{{$regions->id}}">{{$regions->name}}</option>
                        @endif
                        <option value="{{$regions->id}}">{{$regions->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-4">
                      <h2>Periodo Aplicacion 1</h2>
                      <div class="row mb-3">
                        <div class="col-6">
                          <input type="number" value="{{$ArrayFrom[0]}}" name="desde"  class="form-control" >
                          @error('desde')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col-6">
                          <input type="hasta" value="{{$ArrayTo[0]}}" name="hasta" class="form-control mb-3" >
                          @error('hasta')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col">
                          <input type="text" value="{{$ArrayCode[0]}}" name="codigo" class="form-control mb-2" >
                          @error('codigo')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                      <input type="number" name="descuento"  value="{{$ArrayDiscount[0]}}" class="form-control" >
                      @error('descuento')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <input type="hidden" name="completo" wire:model="completo" class="form-control" >
                        @error('completo')
                        <span>
                          {{$message}}
                        </span>
                      @enderror
                      </div>
                    </div>
                    <div class="col-4">
                      <h2>Periodo Aplicacion 2</h2>
                      <div class="row mb-3">
                        <div class="col-6">
                          <input type="number" value="{{$ArrayFrom[1]}}" name="desde2" class="form-control" >
                          @error('desde2')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col-6">
                          <input type="hasta" value="{{$ArrayTo[1]}}" name="hasta2" class="form-control mb-3" >
                          @error('hasta2')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col">
                          <input type="text" value="{{$ArrayCode[1]}}" name="codigo2" class="form-control mb-2" >
                          @error('codigo2')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                      <input type="number" name="descuento2"  value="{{$ArrayDiscount[1]}}" class="form-control" >
                      @error('descuento2')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <h2>Periodo Aplicacion 3</h2>
                      <div class="row mb-3">
                        <div class="col-6">
                          <input type="number" value="{{$ArrayFrom[2]}}" name="desde3" class="form-control">
                          @error('desde3')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col-6">
                          <input type="hasta" value="{{$ArrayTo[2]}}"  name="hasta3" class="form-control mb-3" >
                          @error('hasta3')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                        <div class="col">
                          <input type="text" value="{{$ArrayCode[2]}}"  name="codigo3" class="form-control mb-2">
                          @error('codigo3')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                      <input type="number" name="descuento3"  value="{{$ArrayDiscount[2]}}" class="form-control">
                      @error('descuento3')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="col-4">
                    <h2>Periodo</h2>
                    <div class="row mb-3">
                      <div class="col-6">
                        <input type="date"   value={{$discount->start_date}} name="desdeGeneral" class="form-control" > 
                        @error('desdeGeneral')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                      </div>
                      <div class="col-6">
                        <input type="date"  value={{$discount->end_date}} name="hastaGeneral" class="form-control mb-3" >
                        @error('hastaGeneral')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                      </div>
                    </div>
                  </div>
                  <br>
                  <a href="{{route("descuentos.principal")}}" class="btn btn-secondary">Volver</a>
                  <button class="btn btn-warning">Actualizar</button>
                
            </form>
          </p>
        </div>
      </div>
</div>
