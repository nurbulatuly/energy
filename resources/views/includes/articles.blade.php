
<div class="media">
	<a href="{{route('profile.show',$tweet->user->name)}}">
		<img class="mr-3 rounded-circle img-fluid" style="width:50px;" src="{{asset($tweet->user->avatar)}}">
	</a>
	<div class="media-body">
	<a href="{{route('profile.show',$tweet->user->name)}}">
		<h5 class="mt-0">{{$tweet->user->name}}</h5>
	</a>
	{{$tweet->body}}
	</div>
</div>
<hr>