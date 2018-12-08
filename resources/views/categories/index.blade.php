@extends('layouts.app')
@section('content')
<table class="table table-striped">
	<thead>
		<th>Sn</th>
		<th>Category Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>
				<a href="{{route('categories.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info">
                Edit</span>
				</a>
			</td>
			<td>
             <a href="{{route('categories.destroy',['id'=>$category->id])}}" class="btn btn-xs btn-danger">
                Delete</span>
			</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection