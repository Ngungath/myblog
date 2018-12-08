@extends('layouts.app')

@section('content')
@include('includes.errors')

<div class="panel panel-primary">
	<div class="panel-heading">
		Update Category : {{$category->name}}
	</div>
	<div class="panel-body">
		<form method="post" action="{{route('categories.update',['id'=>$category->id])}}">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Category Name</label>
				<input type="text" name="name" value="{{$category->name}}" class="form-control">
			</div>
			<div class="form-group">
				<div class="text-center">
				<button class="btn btn-primary" type="submit">Update Category</button>
				</div>
			</div>
		</form>
		
	</div>
</div>

@endsection