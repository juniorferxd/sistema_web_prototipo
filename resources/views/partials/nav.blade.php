<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	
	<div class="container">

	<a class="navbar-brand" href="{{route('home')}}">
		{{config('app.name')}}
	</a>

	<button class="navbar-toggler" type="button" 
		data-toggle="collapse" 
		data-target="#navbarSupportedContent" 
		aria-controls="navbarSupportedContent" 
		aria-expanded="false" 
		aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="nav nav-pills">
			
			<li class="nav-item" >
				<a class="nav-link {{setActive('home')}}" 
					href="{{ route('home') }}"
				>Inicio</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{setActive('about')}}" 
					href="{{ route('about') }}"
				>Registrar Ventas</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{setActive('productos.*')}}" 
				href="{{ route('productos.index') }}" 
				>Registrar Productos</a>
			</li>

			<li><a class="nav-item"> 
				<a class="nav-link {{setActive('login')}}"
				href="{{ route('login') }}" 
				>Lista de Ventas</a>
			</a>
			</li>

			<li><a class="nav-item"> 
				<a class="nav-link {{setActive('login')}}"
				href="{{ route('login') }}" 
				>Lista de Productos</a>
			</a>
			</li>

			@guest

			<li><a class="nav-item"> 
				<a class="nav-link {{setActive('login')}}"
				href="{{ route('login') }}" 
				>Iniciar Sesión</a>
			</a>
			</li>

			@else

			<li>
				<a class="nav-link" href= "#" onclick="event.preventDefault();
             	document.getElementById('logout-form').submit();"
             ></a>

         	</li>

			@endguest

			@guest
			
			@endguest

		</ul>
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
		@csrf
</form>