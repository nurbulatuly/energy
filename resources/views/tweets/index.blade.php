<x-app>
<div class="row">
    <div class="col border p-3 mx-1">
        @include('includes.post-article-form')
    </div>
</div>
<div class="row">
    <div class="col border p-3 mt-2 mx-1">
        @forelse($tweets as $tweet)
            @include('includes.articles')
        @empty
        	<h5 class="text-muted">No tweets</h5>
        @endforelse
    </div>
</div>
</x-app>