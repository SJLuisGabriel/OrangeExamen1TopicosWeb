@extends("layout.orange")

@section("main_content")

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Our Blog</h1>
							<h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				@foreach ($posts as $post)
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ $post['image'] }}" alt=""></a>
						<div class="blog-text">
							<h3><a href="">{{ $post['created_at'] }}</a></h3>
							<span class="posted_on">{{ $post['title'] }}</span>
							<span class="comment"><a href="">{{ $post['comment_count'] }}<i class="icon-speech-bubble"></i></a></span>
							<p>{{ Str::limit($post['content'], 100) }}</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection