@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-sm-offset-3 ">
			
            
        	@foreach($posts as $post)
			
			<p>{{$post->title}}</p>
			
			<p>{{$post->body}}</p>
			
			<p>Created at: {{$post->created_at->diffForHumans()}}</p>
			
			<p><img width="200" src="{{url('images/'.$post->thumbnail)}}" /></p>
			
			 @if(Auth::check() && Auth::id() === $post->user_id)
			
			<p style="background:red;">edit / delete</p>
			
			@endif
			
			@endforeach
			
			<!--<li>
			 <a href="#"> {{$post->title}}: <img width="200" src="{{url('images/'.$post->thumbnail)}}" /> {{$post->body}} </a> ---<br /><br /> Created at: {{$post->created_at->diffForHumans()}}
			</li>-->           

        </div>
    </div>
</div>
@endsection

