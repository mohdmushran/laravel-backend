@extends('layouts.layout')

@section('content')


	<div id="body">
		<h1><span>gallery</span></h1>
		<ul class="gallery">
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache1.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache2.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache3.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache4.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache5.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache6.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache7.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache8.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<a href="{{ route('postpage') }}">
					<img src="{{ asset('images/mustache9.jpg') }}" alt="">
				</a>
			</li>
		</ul>
	</div>
	
</body>

@endsection