@extends('layouts.layout')

@section('content')

<div id="body">
		<h1><span>blog</span></h1>
		<div>
			<ul>
				<li>
					<a href="{{ route('blogsinglepage') }}" class="figure">
						<img src="{{ asset('images/cutting-mustache.jpg') }}" alt="">
					</a>
					<div>
						<h3>why i grew a mustache</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="{{ route('blogsinglepage') }}" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="{{ route('blogsinglepage') }}" class="figure">
						<img src="{{ asset('images/in-the-country.jpg') }}" alt="">
					</a>
					<div>
						<h3>in the country</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="{{ route('blogsinglepage') }}" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="{{ route('blogsinglepage') }}" class="figure">
						<img src="{{ asset('images/mustache-brothers.jpg') }}" alt="">
					</a>
					<div>
						<h3>the mustache brothers</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="{{ route('blogsinglepage') }}" class="more">read this</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
    </body>


@endsection