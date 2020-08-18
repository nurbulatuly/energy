
<form action="{{route('tweet.store')}}" method="post">
	@csrf
  <div class="form-group">
    <label>Example textarea</label>
    <textarea class="form-control" rows="3" name="body"></textarea>
    <small class="form-text text-muted">Type your text here.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@error('body')
	<p class="alert alert-danger mt-2">{{$message}}</p>
@enderror