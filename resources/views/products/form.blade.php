    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
        <div class="col-md-9">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de producto" required>
            <span class="help-block">(*) Ingrese el nombre del producto</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Referencia</label>
        <div class="col-md-9">
            <input type="text" id="reference" name="reference" class="form-control" placeholder="Referencia del producto" required>
            <span class="help-block">(*) Ingrese la referencia del producto</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Precio</label>
        <div class="col-md-9">
            <input type="number" id="price" name="price" class="form-control" placeholder="Precio" required>
            <span class="help-block">(*) Ingrese el precio</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Peso</label>
        <div class="col-md-9">
            <input type="number" id="weight" name="weight" class="form-control" placeholder="Peso" required>
            <span class="help-block">(*) Ingrese el peso</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Unidad de medida</label>
        <div class="col-md-9">
            <select class="form-control col-md-3" id="unit" name="unit">
                @foreach ($units as $unit)
                    <option value="{{$unit->id}}"> {{$unit->name}} - {{$unit->abbreviation}}</option>
                @endForEach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Categoria</label>
        <div class="col-md-9">
            <select class="form-control col-md-3" id="category" name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"> {{$category->category}} </option>
                @endForEach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="text-input">Stock</label>
        <div class="col-md-9">
            <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock" required>
            <span class="help-block">(*) Ingrese el stock</span>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>