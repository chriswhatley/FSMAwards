@extends('_layouts.master', 
	['page_title' => 'Frequently Asked Questions', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the health, safety and fire safety sectors.', 
	'meta_description' => 'Venue, travel and dietary information and more. '])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'FAQs', 'background_image' => 'hero'])

		<section class="container mx-auto px-6">  

			<div class="full my-6 text-lg font-semibold">
				Below are the most frequently asked questions regarding The Awards. Please <a href="/contact" class="text-red-pigment-500 inline pb-1 border-b-2 border-white hover:border-red-pigment-500 transition-all duration-300">contact us</a> if you need any further information.
			</div>

			<div class="mt-6 flex flex-wrap">
				<div class="w-full md:w-1/2 md:pr-6">

					<div x-data="{ faq, faq_selected: false }" class="faq space-y-4">
						<template x-for="(item, index) in faq" :key="'item-{$index}'">
							<div class="pb-3">
								<div class="bg-gray-200 border-t-4 border-red-pigment-500 pl-3 flex justify-between items-center cursor-pointer" @click="faq_selected !== index ? faq_selected = index : faq_selected = null">
									
									<div class="py-2 text-gray-800 text-sm md:text-md font-bold leading-snug uppercase">
										<span x-text="item.question"></span>
									</div>

									<div class="mr-3 text-red-pigment-500 w-8 h-8 md:w-10 md:h-10 rounded-md flex items-center justify-center font-bold text-lg font-display">
										<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': faq_selected === index, 'rotate-0': faq_selected !== index}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-500 transform md:-mt-1">
					                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
					                    </svg>
									</div>
								</div>
								<div class="relative overflow-hidden transition-all max-h-0 duration-500" x-bind:style="faq_selected === index ? `max-height:  ${ $el.scrollHeight }px` : ``">
									<div class="mt-2 mx-3">
										<template x-for="(ans, index) in item.answer" :key="'item-ans-{$index}'">
											<p x-html="ans"></p>
										</template>
									</div>
								</div>
							</div>
						</template>						
					</div>
				</div>

				<div class="mt-4 md:mt-0 w-full md:w-1/2">
					@include('_partials.map')				
					<div class="hidden attendee-tickets w-full md:block md:h-96 lg:h-80 mt-6 lg:mt-7 bg-cover bg-top rounded-lg overflow-hidden"></div>
				</div>

			</div>
			
				
			
		</section>	

		@include('_partials.collage')
	</main>

@endsection