@Extends('principal')
@section('contenido')
    <div class="container">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Productos</a></li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> PRODUCTOS... 
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Peso</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Categoria</th>
                                    <th>Referencia</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->product}}</td>
                                        <td>{{$product->weight}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->reference}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-id="{{$product->id}}"  data-name="{{$product->product}}"  data-reference="{{$product->reference}}"  data-price="{{$product->price}}"  data-weight="{{$product->weight2}}"  data-idUnit="{{$product->idUnit}}"  data-idCategory="{{$product->idCategory}}"  data-stock="{{$product->stock}}"  data-target="#modalEditar">
                                              <i class="icon-pencil"></i>
                                            </button> &nbsp;
                                            
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-id="{{$product->id}}" data-target="#modalEliminar"    >
                                                <i class="icon-minus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endForEach
                            </tbody>
                        </table>
                         <!--Paginar de los registros segun el controlador-->
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>

           
            <!--Inicio del modal agregar-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar Producto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('product.store')}}" method="post" class="form-horizontal">
                               {{csrf_field()}}

                               @include('products.form')
                            </form> 
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>

            <!--Inicio del modal Editar-->
            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar Producto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('product.update', 'test')}}" method="post" class="form-horizontal">
                                {{method_field('patch')}}
                                {{csrf_field()}}
                                
                                <input type="hidden" id="id" name="id" value="">

                               @include('products.form')
                            </form> 
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>

            <!--Fin del modal-->

            <!-- Inicio del modal Eliminar -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
               <div class="modal-dialog modal-primary modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Producto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('product.destroy', 'test')}}" method="post" class="form-horizontal">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                
                                <input type="hidden" id="id" name="id" value="">

                                
                                <p>Estas seguro de eliminar el producto?  </p>
                       
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>

                            </form> 
                        </div>
                        
                    </div>
                    
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Fin del modal Eliminar -->
            
</div>
@endsection