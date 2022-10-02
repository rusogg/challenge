<div>
    
    <div class="card">
        <div class="card-header">
         Agregar Nuevo
        </div>
        <div class="card-body">
          <p class="card-text">
            <form action="{{route('formulario.store')}}" method="POST">
                @csrf
                <div class="row mb-5">
                  <div class="col-6">
                    <input type="text" name="nombre" placeholder="{{trans('messages.Nombre')}}" wire:model="nombre" class="form-control" >
                    @error('nombre')
                      <span>
                        {{$message}}
                      </span>
                    @enderror
                </div>
                  <div class="col-6">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" name="activo" id="activo">
                      <label class="form-check-label" for="flexSwitchCheckDefault">{{trans('messages.ActivadoDesactivado')}}</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-5 ">
                  <div class="col-3">
                    <select class="form-select" name="rentadora" aria-label="Default select example">
                      
                      @foreach ($brands as $brands)
                      @if ($brands->active != 0)
                      <option value="{{$brands->id}}">{{$brands->name}}</option>
                      @endif
                      
                      @endforeach
                    </select>
                  </div>
                  <div class="col-3">
                    <select class="form-select" name="acceso" aria-label="Default select example">
                      
                      @foreach ($access as $access)
                      <option value="{{$access->code}}">{{$access->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-3">
                    <input type="number" placeholder="{{trans('messages.Prioridad')}}" wire:model="prioridad" name="prioridad" class="form-control" >
                    @error('prioridad')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                  </div>
                  <div class="col-3">
                    <select class="form-select" name="region" aria-label="Default select example">
                      
                      @foreach ($regions as $regions)
                      <option value="{{$regions->id}}">{{$regions->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-4">
                    <h2>{{trans('messages.PeriodoAplicaion')}} 1</h2>
                    <div class="row mb-3">
                      <div class="col-6">
                        <input type="number" placeholder="{{trans('messages.Desde')}}" name="desde" wire:model="desde" class="form-control" >
                        @error('desde')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col-6">
                        <input type="hasta" placeholder="{{trans('messages.Hasta')}}" name="hasta" wire:model="hasta" class="form-control mb-3" >
                        @error('hasta')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col">
                        <input type="text" placeholder="{{trans('messages.CodigoDescuento')}}" wire:model="codigo" name="codigo" class="form-control mb-2" >
                        @error('codigo')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                    <input type="number" name="descuento" wire:model="descuento" placeholder="{{trans('messages.Porcentaje')}}" class="form-control" >
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
                    <h2>{{trans('messages.PeriodoAplicaion')}} 2</h2>
                    <div class="row mb-3">
                      <div class="col-6">
                        <input type="number" placeholder="{{trans('messages.Desde')}}" wire:model="desde2" name="desde2" class="form-control" >
                        @error('desde2')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col-6">
                        <input type="hasta" placeholder="{{trans('messages.Hasta')}}" wire:model="hasta2" name="hasta2" class="form-control mb-3" >
                        @error('hasta2')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col">
                        <input type="text" placeholder="C{{trans('messages.CodigoDescuento')}}" wire:model="codigo2" name="codigo2" class="form-control mb-2" >
                        @error('codigo2')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                    <input type="number" name="descuento2" wire:model="descuento2" placeholder="{{trans('messages.Porcentaje')}}" class="form-control" >
                    @error('descuento2')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <h2>{{trans('messages.PeriodoAplicaion')}} 3</h2>
                    <div class="row mb-3">
                      <div class="col-6">
                        <input type="number" placeholder="{{trans('messages.Desde')}}" wire:model="desde3" name="desde3" class="form-control">
                        @error('desde3')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col-6">
                        <input type="hasta" placeholder="{{trans('messages.Hasta')}}" wire:model="hasta3" name="hasta3" class="form-control mb-3" >
                        @error('hasta3')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                      </div>
                      <div class="col">
                        <input type="text" placeholder="{{trans('messages.CodigoDescuento')}}" wire:model="codigo3" name="codigo3" class="form-control mb-2">
                        @error('codigo3')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                    <input type="number" name="descuento3" wire:model="descuento3" placeholder="{{trans('messages.Porcentaje')}}" class="form-control">
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
                  <h2>{{trans('messages.Periodo')}}</h2>
                  <div class="row mb-3">
                    <div class="col-6">
                      <input type="date"  wire:model="desdeGeneral" name="desdeGeneral" class="form-control" >
                      @error('desdeGeneral')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                    </div>
                    <div class="col-6">
                      <input type="date"  wire:model="hastaGeneral" name="hastaGeneral" class="form-control mb-3" >
                      @error('hastaGeneral')
                    <span>
                      {{$message}}
                    </span>
                  @enderror
                    </div>
                  </div>
                </div>
                <br>
                <a href="{{route("descuentos.principal")}}" class="btn btn-secondary">{{trans('messages.Volver')}}</a>
                <button class="btn btn-primary">{{trans('messages.Agregar')}}</button>
                
            </form>
          </p>
        </div>
      </div>
</div>
