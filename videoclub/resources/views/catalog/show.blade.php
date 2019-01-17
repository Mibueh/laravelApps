@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-xs-2 col-sm-4 col-md-3">
        <img src="{{$arrayPeliculas['poster']}}" style="height: 250px" />
	</div>
	<div class="col-xs-10 col-sm-8 col-md-6">
		<h3>
			{{$arrayPeliculas['title']}}
		</h3>
		<h4>
			Año: {{$arrayPeliculas['year']}}
		</h4>
		<h4>
			Director: {{$arrayPeliculas['director']}}
		</h4>
		<h6>
			<b>Resumen:</b> {{$arrayPeliculas['synopsis']}}
		</h6>
		<h6>
			@if($arrayPeliculas['rented'] == false)
				<h6><strong>Estado: </strong>Pelicula disponible</h6>
				<button type="button" class="btn btn-info">Alquilar Pelicula</button>
			@else
				<h6><strong>Estado: </strong>Pelicula actualmente alquilada</h6>
				<button type="button" class="btn btn-danger">Devolver Pelicula</button>
			@endif
			<a type="button" class="btn btn-warning" href="{{ url('/catalog/edit/' . $idPelicula) }}">Editar Pelicula</a>
			<a type="button" class="btn btn-light" href="{{ url('/catalog/')}}">Volver al listado</a>
		</h6>
	</div>
</div>

@stop