
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include ('partials.header')
@include ('partials.sidebar')
			<div class="col-md-9 top-right">
				<div class="content">
				<div class="grids">
					<div class="grid box">
						<div class="grid-header">
						<h1>{{ $post->title }}</h1>
						<ul>
							<li><span>Post By <a href="#">Admin</a> {{ $post->created_at}}</span></li>
							<li><a href="#">5 comments</a></li>
						</ul>
						</div>
						<div class="singlepage">
							<img src="/images/img15.jpg" class="img-responsive" alt="" />
							{{ $post->body }}
							
							<div class="clearfix"> </div>
						</div>
						<div class="comments">
							<ul>
								<li><a href="#"><img src="/images/views.png" title="view" /></a></li>
								<li><a href="#"><img src="/images/likes.png" title="likes" /></a></li>
								<li><a href="#"><img src="/images/link.png" title="link" /></a></li>
								<li></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				
                    

			<div class="clearfix"> </div>
					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	
	@include ('partials.footer')