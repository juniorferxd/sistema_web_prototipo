
@csrf
	<div class="form-group">
		<label for="nombre_producto">Nombre producto</label>
		
		<input class="form-control border-0 bg-light shadow-sm"
			id="nombre_producto"
			type="text" 
			name="nombre_producto" 
			value="{{ old('nombre_producto', $producto->nombre_producto) }}">
		</div>
	
	<label for="precio_unit">Precio del producto</label>
		<textarea class="form-control border-0 bg-light shadow-sm"
			name="precio_unit" >
			{{ old('precio_unit' ,$producto->precio_unit) }}
		</textarea>
	</label>	


	<label for="marca">Marca del producto</label>
		<textarea class="form-control border-0 bg-light shadow-sm"
			name="marca" >
			{{ old('marca' ,$producto->marca) }}
		</textarea>
	</label>

	<label for="tipo">Tipo producto</label>
		<textarea class="form-control border-0 bg-light shadow-sm"
			name="tipo" >
			{{ old('tipo' ,$producto->tipo) }}
		</textarea>
	</label>

	<br>

	<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

	<a class="btn btn-link btn-block "
	href="{{route('productos.index')}}">
	Cancelar
	</a>