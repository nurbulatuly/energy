<ul class="list-group">
	<li class="list-group-item">
		<div class="media">
			<a href="{{route('profile.show',$user->name)}}">
				<img class="mr-3 rounded-circle img-fluid" style="width:40px;" src="https://www.pngitem.com/pimgs/m/516-5167304_transparent-background-white-user-icon-png-png-download.png" alt="Generic placeholder image">
			</a>
			<div class="media-body">
				<a href="{{route('profile.show',$user->name)}}">{{$user->name}}</a>
			</div>
		</div>
	</li>
</ul>