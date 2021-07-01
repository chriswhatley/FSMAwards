@extends('_layouts.master', 
	['page_title' => 'Charity Partner', 
	'meta_title' => 'The FSM Awards 2020 Charity Partner : The Fire Fighter Charity', 
	'meta_description' => 'We are delighted to announce that the Lighthouse Construction Industry Charity this year\'s SHE Awards charity partner.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Charity Partner', 'background_image' => 'highlights'])

		<section class="container mx-auto px-6">  

			<div class="flex flex-wrap">
				
				<div class="mt-8 w-full sm:w-2/3 md:w-3/4 mx-auto text-center">
					<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">The Fire Fighters Charity</p>
				</div>
				<div>
					<p class="mt-6 md:mt-6 md:pr-4">
						The Fire Fighters Charity offers specialist, lifelong support for members of the UK fire services community, empowering individuals to achieve mental, physical and social wellbeing throughout their lives.
					</p>									
		
					<div class="w-full flex justify-center mt-6 md:w-1/2 md:float-right md:ml-6 md:mb-6 lg:ml-8 lg:mb-8">
						<img src="{{ $page->baseUrl }}/assets/images/layout/fire-fighters-charity.svg" alt="The Fire Fighters Charity" class="w-3/5 sm:w-1/2 md:w-2/3">
					</div>
			
					<p class="mt-6">
						The charity provide confidential, personalised support to the whole of the fire services community, delivering mental health, physical health and social wellbeing services at our centres, remotely, online and in communities around the UK. 
					</p>					
					<p class="mt-6">Championing the health and wellbeing of all those it supports - serving, retired or dependant - it aims to ensure that our beneficiaries can live well, for life. And they’re not all firefighters. The charity exists to support all fire and rescue service personnel, whatever their role in the service. It is are also here for all those who have retired, as well as for spouses and qualifying dependants.</p>
					
					<div class="sm:flex sm:justify-center">
						<div class="text-center">
							<a href="{{ $page->registerURL }}" class="btn-primary inline-flex items-center justify-center mt-6 text-md sm:text-sm md:text-md" target="_blank">
								<div class="bg-white w-full rounded p-3 text-blue-900">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
										<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
									</svg>
									Book your tickets now
								</div>
							</a>
						</div>

						<div class="text-center sm:ml-4">
							<a href="/nominate" class="btn-primary inline-flex items-center justify-center mt-6 text-md sm:text-sm md:text-md">
								<div class="bg-white w-full rounded p-3 text-blue-900">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
										<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
									</svg>
									Make a Nomination
								</div>
							</a>
						</div>						
					</div>
				</div>
				
			</div>
		</section>	

		@include('_partials.collage')
	</main>

	@endsection