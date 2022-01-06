<div class="container mx-auto py-8">
	<div class="text-center">
		<h2 class="text-2xl lg:text-4xl font-bold leading-tight tracking-tight uppercase">Supported by</h2>
		<a class="inline-block mt-1 mb-2 font-semibold text-red-pigment-600 border-b-2 border-white hover:border-red-pigment-600 transition-all duration-500" href="/supporters#supporters">Find out more about our supporters</a>	
	</div>

	<div class="splide splide-supporters pt-4">
		<div class="splide__track mb-6">
			<ul class="splide__list">

				@foreach($supporters as $supporter)
					<li class="splide__slide">
						<img src="{{ $page->baseUrl }}/assets/images/supporters/carousel/{{ $supporter->logo }}.svg" alt="{{ $supporter->name }}">
					</li>
				@endforeach

			</ul>
		</div>
	</div>	 
</div>			
