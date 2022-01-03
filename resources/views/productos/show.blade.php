@extends('layout')

@section('title','Portafolio ')


@section('content')

<div class="container">
	<div class="bg-white p-5 shadow rounded">
			<div class="row">
				<div class="col-12 col-sm-10 col-lg-6 mx-auto">	

				<h1 >{{ $producto->nombre_producto }}</h1>

				<p class="text-secondary">
					{{ $producto->marca}}
				</p>

				<div class="d-flex justify-content-between align-items-center">
					
					<a href="{{route('productos.index')}}">
						Regresar
					</a>

					@auth

					<div class="btn-group ">
						<a class="btn btn-primary" 
						href="{{ route('productos.edit', 
							$producto) }}">
						Editar</a>

						<a class="btn btn-danger" 
						href="#" 
						onclick="document.getElementById('delete-producto').submit()"
						>Eliminar</a>
					</div>

					<form id="delete-producto"
					class="d-none" 
					method="POST" action="{{ route('productos.destroy', $producto) }}">
						@csrf @method('DELETE')

					</form>
					@endauth
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection