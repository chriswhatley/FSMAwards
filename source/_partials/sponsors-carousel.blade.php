<div class="container mx-auto py-8">
	<div class="text-center">
		<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Sponsored by</h2>
		<a class="inline-block mt-1 mb-2 font-semibold text-red-pigment-600 border-b-2 border-gray-100 hover:border-red-pigment-600 transition-all duration-500" href="/supporters">Find out more about our sponsors</a>	
	</div>

	<div class="splide splide-sponsors pt-4">
		<div class="splide__track mb-6">
			<ul class="splide__list">

				@foreach($sponsors as $sponsor)
					<li class="splide__slide">
						<img src="{{ $page->baseUrl }}/assets/images/sponsors/carousel/{{ $sponsor->logo }}.svg" alt="{{ $sponsor->name }}">
					</li>
				@endforeach

			</ul>
		</div>
	</div>	 
</div>

