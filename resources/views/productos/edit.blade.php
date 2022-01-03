@extends('layout')

@section('title','Editar Producto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
			method="POST" action="{{ route('productos.update', $producto) }}">
				 @method('PATCH')
				<hl class="display-4" >Editar producto</hl>
				<hr>
				@include ('productos._form',['btnText' => 'Actualizar'])

			</form>
		</div>
	</div>
</div>
@endsection