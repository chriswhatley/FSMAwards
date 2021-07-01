<!-- Grid column -->
<div class="w-full flex flex-col p-4 md:w-1/2">

	<!-- Column contents -->
	<div class="flex flex-col flex-1 px-8 py-8 bg-gray-200 rounded-lg">
		<div class="flex-1">
			<div class="text-center">			
				<div class="flex justify-center">
					<img class="mr-4 h-6 w-6" src="{{ $page->baseUrl }}/assets/images/icons/{{ $award->icon }}.svg" alt="Icon">	
				</div>
				<h3 class="mt-2 text-xl text-grey-800 font-semibold uppercase">{{ $award->title }}</h3>										
			</div>	
			<p class="mt-6 text-md">
				{!! $award->getContent() !!}	
			</p>
		</div>

		@if(strlen($award->sponsor) > 0)	
			<div class="w-full mt-3 sm:max-w-xs mx-auto lg:w-3/5 xl:px-8 text-center">
				<span class="block"> @php echo $award->organiser ? 'Organised by' : 'Sponsored by' @endphp </span>
				<img class="mt-4" src="{{ $page->baseUrl }}/assets/images/sponsors/awards/{{ $award->sponsor }}.svg" alt="{{ $award->sponsor }} Logo">	
			</div>
		@endif

		<div class="mt-10 xl:flex xl:justify-between xl:items-center">

			{{-- Criteria --}}
			@if(strlen($award->criteria) > 0)
				<div class="w-full sm:w-2/3 md:w-full lg:w-1/2 lg:px-2 mx-auto">
					<a href="{{ $page->baseUrl }}/assets/docs/criteria/{{ $award->criteria }}" class="btn-primary w-full px-4 py-3 font-bold uppercase rounded-lg text-md" target="_blank">
						<div class="flex justify-center bg-white w-full rounded p-3 text-blue-900">
							<img src="{{ $page->baseUrl }}/assets/images/icons/compose.svg" alt="Award Criteria Icon" class="w-5 h-5">
							<span class="ml-2">Award Criteria</span>
						</div>
					</a>
				</div>
			@endif

			{{-- Nominate --}}
			@if($award->supressNominationLink == FALSE)	
				<div class="w-full mt-4 sm:w-2/3 md:w-full lg:w-1/2 lg:px-2 xl:mt-0 mx-auto">
					<a href="{{ $award->nominationURL }}" class="btn-primary w-full px-4 py-3 font-bold uppercase rounded-lg text-md">
						<div class="flex justify-center bg-white w-full rounded p-3 text-blue-900">
							<img src="{{ $page->baseUrl }}/assets/images/icons/envelope.svg" alt="Nominate Icon" class="w-5 h-5">
							<span class="ml-2">Make A Nomination</span>
						</div>
					</a>
				</div>
			@endif
				
		</div>
	</div>

</div>