<x-app>
<div class="card">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    @can('edit',$user)
    <button type="submit" class="btn btn-primary d-inline-block">Edit</button>
    @endcan
      <x-follow-button :user="$user"></x-follow-button>
  </div>
</div>
<div class="row">
    <div class="col border p-3 mt-2 mx-1">
        @forelse($user->tweets as $tweet)
            @include('includes.articles')
        @empty
          <h5 class="text-muted">No tweets</h5>
        @endforelse
    </div>
</div>
</x-app>