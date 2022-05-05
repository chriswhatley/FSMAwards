@extends('_layouts.master', 
	['page_title' => 'Gallery', 
	'meta_title' => 'The FSM Awards 2022 Highlights Gallery', 
	'meta_description' => 'Highlights from the 2022 Fire &amp; Security Matters Awards, held at the CBS Arena, Coventry.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Gallery', 'background_image' => 'highlights'])

	<section class="container mx-auto px-6">  

		<div class="text-lg mt-6 flex flex-wrap items-center">
			<div class="w-full text-center my-6">
				<p class="md:text-xl font-semibold">Highlights from the 2022 Fire &amp; Security Matters Awards, held at the CBS Arena, Coventry.</p>
				<p class="mt-6">For the complete set of images from the photobooth, <a href="https://www.simplebooth.com/gallery/tcwDpStCExLo-fsm-awards-28-04-2022" target="_blank" rel="noopener" class="font-bold text-red-pigment-500">please click here</a>.</p>
			</div>

			{{-- <div class="w-full md:w-2/5 mt-2 md:mt-0 text-center">
				<span class="text-base">Sponsored by</span>
				<div class="w-full flex justify-center">
					<img src="https://she-awards.com/uploads/sheawards/awards/sponsors/carousel/havi.svg" alt="Havi" class="w-full sm:w-96 h-auto">	
				</div>
			</div> --}}

		</div>



		<div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">

			<template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal" class="relative">

				<div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
					<div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">

						<div class="z-50">
							<button @click="imgModal = ''" class="float-right mr-2 outline-none focus:outline-none w-10 h-10 bg-red-pigment-500 rounded flex justify-center items-center">
								<svg class="fill-current text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
									<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
									</path>
								</svg>
							</button>

						</div>
						<div class="p-2">
							<img :alt="imgModalSrc" class="rounded-lg overflow-hidden border-8 border-gray-200 object-contain h-1/2-screen" :src="imgModalSrc">
							<p x-text="imgModalDesc" class="mt-2 text-center text-white"></p>
						</div>
					</div>
				</div>
			</template>

		</div>

		<div class="grid grid-cols-2 md:grid-cols-3 gap-4">        		
    			@php
	    			for($i = 1; $i <= 50; $i++)
	    			{
	    				echo "
	        				<div>
	        					<a @click=\"\$dispatch('img-modal', {  imgModalSrc: 'https://firesecurityawards.com/uploads/fsawards/asset/Archive-202205051515071651760107/$i.jpg', imgModalDesc: 'FSM Awards 2022: Photo $i' })\" class=\"cursor-pointer\">
									<img alt=\"FSM Awards 2022: Photo $i\" class=\"rounded-lg overflow-hidden border-8 border-gray-200 object-fit w-full\" src=\"https://firesecurityawards.com/uploads/fsawards/asset/Archive-202205051515071651760107/$i.jpg\">
								</a>
							</div>
						";
	    			}
    			@endphp
			</div>
		</section>	
		
		@include('_partials.collage')
	</main>

	@endsection