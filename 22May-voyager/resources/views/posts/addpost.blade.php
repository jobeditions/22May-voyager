@include('partialsposts.headerpost')
<div class="col-sm-9 post-right">

<h1>Publish a Post</h1>


<form method="POST" action="/posts">
{{csrf_field() }}
  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titre" >
  </div>
   <div class="form-group">
    <label for="body">Article</label>
    <textarea class="form-control" id="body" name="body" ></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include ('partials.error')

	</div>