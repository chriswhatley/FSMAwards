<section class="container mx-auto flex flex-wrap">

	<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
		<div class="sponsorship-brochure h-48 bg-cover overflow-hidden border-b-4 border-red-pigment-500 rounded-t-md"></div>
		<div class="flex flex-col flex-1 px-10 py-6 bg-gray-300 rounded-b-md">
			<div class="flex-1">
				<h2 class="text-gray-900 text-lg font-bold leading-snug uppercase text-center">Download Brochure</h2>
				<p class="mt-2 text-md">
					This unmissable networking event, brought to you by the publishers of Health & Safety Matters and Fire Safety Matters journals.
				</p>
			</div>
			<a href="{{ $page->baseUrl }}/assets/docs/fsm-awards-2022-brochure.pdf" target="_blank" class="btn-primary inline-flex items-center justify-center mt-4 text-md sm:text-sm md:text-md">
				<div class="bg-white w-full rounded p-3 text-blue-900">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
						<path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
					</svg>
					Download Brochure
				</div>
			</a>
		</div>
	</div>

	<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
		<div class="sponsorship-contact h-48 bg-cover overflow-hidden border-b-4 border-red-pigment-500 rounded-t-md"></div>
		<div class="flex flex-col flex-1 px-10 py-6 bg-gray-900 text-white rounded-b-md">
			<div class="flex-1">
				<h2 class="text-lg font-bold leading-snug uppercase text-center">Contact The Team</h2>
				<p class="mt-2 text-md">
					Contact the sales team to discuss your sponsorship opportunities.
				</p>
			</div>
			<a href="/contact" class="btn-primary inline-flex items-center justify-center mt-4 text-md sm:text-sm md:text-md">
				<div class="bg-white w-full rounded p-3 text-blue-900">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
						<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
					</svg>
					Contact Us
				</div>
			</a>
		</div>
	</div>

	<div class="w-full flex flex-col p-4 w-full lg:w-1/3">
		<div class="sponsorship-tickets h-48 bg-cover overflow-hidden border-b-4 border-red-pigment-500 rounded-t-md"></div>
		<div class="flex flex-col flex-1 px-10 py-6 bg-gray-300 rounded-b-md">
			<div class="flex-1">
				<h2 class="text-gray-900 text-lg font-bold leading-snug uppercase text-center">Book Tickets</h2>
				<p class="mt-2 text-md">
					Join more than 550 of your peers at the industry’s biggest networking evening of the year.
				</p>
			</div>
			<a href="{{ $page->registerURL }}" class="btn-primary inline-flex items-center justify-center mt-4 text-md sm:text-sm md:text-md" target="_blank">
				<div class="bg-white w-full rounded p-3 text-blue-900">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
						<path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
					</svg>
					Book Your Tickets
				</div>
			</a>
		</div>
	</div>
</section>