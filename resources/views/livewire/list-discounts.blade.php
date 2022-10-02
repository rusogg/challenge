<div>
    <div class="row">
        <h1>{{trans('messages.Descuentos')}}</h1>
        <p>{{trans('messages.DescripcionDescuentos')}}</p>
    </div>
    
    <br><br>
    
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              @if ($mensaje = Session::get('success'))
              
              <div class="alert alert-success" role="alert">
                {{ $mensaje }}
              </div>
                
              @endif
    
             
            </div>
          </div>
          <p>
            <a href="{{route("formulario.create")}}" class="btn btn-primary">{{trans('messages.AgregarDescuento')}}</a>
          </p>
          <hr>
          <p class="card-text">
            @livewire('discounts-table')
          </p>
        </div>
      </div>
      
</div>
