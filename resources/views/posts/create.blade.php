@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-sm-offset-3 ">
				
        	<form action="{{url('posts')}}" method="post" role="form" enctype="multipart/form-data">
				
        		@if(count($errors) > 0)
				
        		<ul>
				
        		@foreach($errors->all() as $error)
				
        		<li class="alert alert-danger">{{$error}}</li>
				
        		@endforeach

        		</ul>

        	@endif
				
				
        		@if(session('message'))
               	
               <h4 class="alert alert-info text-center">{{session('message')}}</h4>
               
               @endif

        	{{csrf_field()}}

        	<div class="form-group col-sm-offset-2 ">
        	<legend>Create New Post</legend>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<input type="text" name="title" id="inputTitle" value="{{old('title')}}"  class="form-control"/>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<textarea name="body" id="input"  class="form-control" rows="3">{{old('body')}}</textarea>
        	<div>
        	
        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<input type="file" name="thumbnail" id="thumbnail" value="{{old('thumbnail')}}"  class="form-control"/>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<button type="submit" class="btn btn-primary">Submit</button>
        	<div>

        	<div>

        	</form>			

            

        </div>
    </div>
</div>
@endsection

