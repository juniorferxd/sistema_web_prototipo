@extends('layout')

@section('title','Portfolio ')

@section('content')

<div class="container">

	<div class="d-flex justify-content-between align-items-center">
	
	<hl class= "display-4 mb-0" >Productos</hl>

	@auth

		<a class="btn btn-primary"
		href="{{route('productos.create')}}">Ingresar productos</a>

	@endauth
	</div>

	<hr>

	<p class="lead text-secondary">Productos enlistados</p>

	<ul class="list-group">
		@forelse($productos as $producto)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center"

			class="d-flex justify-content-between align-items-center"

				href="{{ route('productos.show', $producto)}}">

				<span class="font-weight-bold">
					{{$producto->nombre_producto}}
				</span>

			</a>
			</li>
			
			@empty

			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay productos para mostrar
			</li>

		@endforelse

		{{$productos->links()}}
	</ul>
</div>
@endsection