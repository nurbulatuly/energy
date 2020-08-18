<x-master>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-2">
                @include('includes.left-sidebar')
            </div>
            <div class="col-md-6 mt-2">
                {{$slot}}
            </div>
            @if(auth()->check())
            <div class="col-md-3 mt-2">
                <h3>Folowers</h3>
                    @forelse(auth()->user()->follows as $user)
                        @include('includes.rite-sidebar')
                    @empty
                        <h5 class="text-muted">No followers</h5>
                    @endforelse
            </div>
            @endif
        </div>
    </div>
</main>
</x-master>