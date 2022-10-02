<div>
    <div class="row">
        <h1>Descuentos</h1>
        <p>En esta sección podrá ver y configurar los descuentos que se aplican a todo el sitio</p>
    </div>
    
    <br><br>
    
    <div class="card">
        <div class="card-header">
            Lista
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
          <h5 class="card-title">Listado</h5>
          <p>
            <a href="{{route("formulario.create")}}" class="btn btn-primary">Agregar Descuento</a>
          </p>
          <hr>
          <p class="card-text">
            @livewire('discounts-table')
          </p>
        </div>
      </div>
      
</div>
