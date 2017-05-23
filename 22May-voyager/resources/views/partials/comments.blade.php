<div class="comments-main">
							<div class="col-md-2 cmts-main-left">
								<img src="/images/avatar.png" alt="">
							</div>
							<div class="col-md-10 cmts-main-right">
								<h5>{{$commenting->author}}</h5>
								<h5>E-mail:{{$commenting->email}}</h5>

								{{$commenting->body}}
								<div class="cmts">
									<div class="cmnts-left">
										<p>On {{$commenting->created_at}}</p>
									</div>
									<div class="cmnts-right">
										<a href="#">Reply</a>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>