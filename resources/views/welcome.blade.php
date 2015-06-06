@extends('app')

@section('content')
<div>
	<div class="home-1">
		<div class="inline article-left">
			<a class="block" href="{{ url('/') }}"><img class="logo" src="/images/LOGO-01.png"></a>
			<span class="block article-title-1">Nosotros</span>
			<span class="block article-parrafo-1">SOMOS UNA EMPRESA JOVEN CREATIVA DEDICADA AL DISEÑO TIPOGRAFICO PARA DIFUNDIRLO COMO ARTE</span>	
		</div>
		<div class="inline article-right">
			<div class="article-image">
				<script src="/js/jssor.js"></script>
				<script src="/js/jssor.slider.js"></script>
				<script>
				    jssor_slider1_starter = function (containerId) {
				        var options = { $AutoPlay: true };
				        var jssor_slider1 = new $JssorSlider$(containerId, options);
				    };
				</script>
				<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 400px;">
				    <!-- Slides Container -->
				    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 400px;">
				        <div><img u="image" src="/images/slideshow/slideshow-1.jpg" /></div>
				        <div><img u="image" src="/images/slideshow/slideshow-2.jpg" /></div>
				    </div>
				    <!-- Trigger -->
				    <script>jssor_slider1_starter('slider1_container');</script>
				</div>
			</div>	
		</div>
	</div>
	<div class="clear-left">
		<div class="inline article-left">
			<span class="block article-title-2">Quienes <b>somos & que</b> hacemos?</span>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
		</div>
		<div class="inline article-right">
			
		</div>
	</div>
	<div class="clear-right">
		<div class="inline article-footer-list">
			<img src="" alt="">
		</div>
		<div>
			<a class="inline article-footer-button" href="#">
				<span class="button-me block">Me</span>
				<span class="button-signo">?</span>
				<span class="button-quedara block">quedará</span>
			</a>
		</div>
	</div>
</div>
@endsection