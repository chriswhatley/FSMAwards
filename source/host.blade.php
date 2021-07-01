@extends('_layouts.master', 
	['page_title' => 'Celebrity Host', 
	'meta_title' => 'The 2020 Safety & Health Excellence Awards host - Alistair McGowan', 
	'meta_description' => 'We are delighted to announce that well-known comedian Alistair McGowan will host this year\'s Awards.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Awards Host', 'background_image' => 'header-c'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="w-2/3 mx-auto mt-6">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">We are delighted to announce that well-known comedian Hugh Dennis will host the FSM Awards 2022.</p>
				</div>
				<div class="xl:mt-6">					
		
					<div class="w-full md:w-2/5 h-104 host-bio bg-top bg-cover rounded-md overflow-hidden mt-6 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8"></div>

					<p class="mt-6 md:mt-6 md:pr-4 text-lg font-semibold">The former Unilever brand manager re-writes the week’s headlines on the long-running Radio 4 favourite The Now Show, and on Mock the Week.</p>									
					<p class="mt-6">Hugh Dennis made his name as one half of Punt & Dennis. He and Steve Punt still appear together on Radio 4’s The Now Show, whilst Hugh also captains his team on Mock The Week, and starred in Outnumbered - the wonderfully inventive semi-improvised BBC sitcom.</p>
					<p class="mt-6">After originally working as a brand manager for Unilever, Hugh turned a talent for impressions to better use and began to provide voices for Spitting Image. He then became a regular guest on the Jasper Carott Show and joined the team on the seminal standup and sketch show The Mary Whitehouse Experience, which first aired on the radio before becoming a cult BBC2 hit.</p>
					<p class="mt-6">Hugh and Steve starred in several peak time series of their own, including The Imaginatively Titled Punt & Dennis Show - and Me, You and Him. Hugh has been a guest on panel shows from QI to Would I Lie to You? and has gone on to a host of both comic and serious acting roles from New Tricks to Agatha Christie’s Marple, Not Going Out to Doctors, Midsomer Murders to the acclaimed Fleabag.</p>
				</div>

				<div class="w-full text-center">

					<a href="/nominate" class="btn-primary w-4/5 max-w-xs md:mr-4">		            	
        				<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
	            				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
	            			</svg>
	            			Make A Nomination
	            		</div>
            		</a>

            		<a href="{{ $page->registerURL }}" class="btn-primary w-4/5 max-w-xs" target="_blank">		            	
        				<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
	            				<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
	            			</svg>
	            			Book Your Tickets
	            		</div>
            		</a>

				</div>
			</div>
		</section>	

		@include('_partials.collage')
	</main>

@endsection