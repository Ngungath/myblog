@extends('layouts.app')

@section('content')

@if(count($errors) > 0)

<ul class="list-group" style="color: red;">
	@foreach($errors->all() as $error)
     <li class="list-group-item">
     	{{$error}}
     </li>
	@endforeach
</ul>
@endif

<div class="panel panel-default">
	<div class="panel-heading">
		Create a new post
		
	</div>
	<div class="panel-body">
		<form method="post" action="{{route('posts.store')}}">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
				
			</div>

			<div class="form-group">
				<label for="title">Featured Image</label>
				<input type="file" name="featured" class="form-control">
				
			</div>

			<div class="form-group">
				<label for="title">Content</label>
				<textarea cols="5" rows="5" name="content" id="content" class="form-control" ></textarea>
				
			</div>

			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Store Post
					</button>
				</div>
			</div>
		</form>
		
	</div>
	
</div>

@endsection