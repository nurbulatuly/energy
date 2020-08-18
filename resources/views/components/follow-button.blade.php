
@if(auth()->user()->isNot($user))    
<form method="post" action="{{route('follow',$user->name)}}" class=" d-inline-block">
  @csrf
  <button type="submit" class="btn btn-primary">
    {{auth()->user()->following($user) ? "Unfollow" : "Follow"}}
  </button>
</form>
@endif