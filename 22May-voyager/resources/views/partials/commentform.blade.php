<div class="lev">
			  <div class="leave">
				<h4>Leave a comment</h4>
			  </div>
				<form id="commentform" method="POST" action="/posts/{{$post->id}}/comments">
                 {{csrf_field() }}

				    <label for="author">Name</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
						<label for="email">Email</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
						<label for="website">Website</label>
						<input id="website" name="website" type="text" value="" size="30">
						<label for="comment">Comment</label>
						<textarea name="body" placeholder="Vos commentaires ici"></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Send">
					<div class="clearfix"></div>
				 </form>
			</div>
