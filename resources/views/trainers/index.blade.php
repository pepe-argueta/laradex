@extends('layouts.app')

@section('title', 'Trainer List')

@section('content')
	
	@include('common.success')

    <p>Listado de Trainers</p>
	<div class="row">
		@foreach($trainers as $trainer)
			<div class="col-sm">
				<div class="card text-center" style="width: 18rem; margin-top: 50px;">
					<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
					<div class="card-body">
						<h5 class="card-title">{{$trainer->name}}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver mas...</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endSection