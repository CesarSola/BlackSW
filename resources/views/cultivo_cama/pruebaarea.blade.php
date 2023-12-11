
@extends('menu.siderbar')
<div class="content-wrapper">
    <div class="container-fluid">
   
    <div class="col-md-8">
        <br><br>
        <h3>AREA</h3>
<div class="form-outline mb-4">
    <input type="search" class="form-control" id="datatable-search-input">
    <label class="form-label" for="datatable-search-input">Search</label>
  </div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Añadir
  </button>
  <br><br>
<div class="table-responsive">
    <table class="table table-warning">
        <thead >
            <tr>
                <th >ID</th>
                <th >NOMBRE</th>
                <th >ALTO</th>
                <th >ANCHO</th>
                <th >ACCION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Area as $Area )
            <tr class="">
                <td scope="row">{{$Area->id}}</td>
                <td>{{$Area->nombre}}</td>
                <td>{{$Area->alto}}</td>
                <td>{{$Area->ancho}}</td>
                <td>  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$Area->id}}">
                    EDITAR
                  </button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$Area->id}}">
                    ELIMINAR
                  </button></td>
            </tr>
            @include('Area.info')
            @endforeach
        </tbody>
    </table>
</div>
        @include('Area.create')

    </div>
    </div>
</div>
 </div>

</div>