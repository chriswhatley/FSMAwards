@extends('_layouts.master', 
	['page_title' => 'Make A nomination', 
	'meta_title' => 'Don’t miss out on this great night of entertainment and networking as we toast the best in the fire & security sectors.', 
	'meta_description' => 'Join more than 550 of your peers by celebrating excellence at the industry’s biggest networking evening of the year.'])

	@section('content')

	{{-- Main Content --}}
	<main class="relative bg-white w-full z-10">

		@include('_components.title-component', ['title' => 'Make A Nomination', 'background_image' => 'highlights'])

		<section class="container mx-auto px-6">  	
			<div class="mt-6 mx-auto max-w-5xl">
				<p class="text-lg md:mx-auto md:text-xl lg:text-2xl md:text-center font-semibold leading-tight lg:leading-tight uppercase">Submit a nomination for this year's Fire &amp; Security Matters Awards.</p>
				<p class="mt-6 font-semibold">This is a static reference for layout and presentation of the nomination form. It will be refactored in to the host platform and will render award category-specific fields, as each award category has varying questions.</p>									
				<p class="mt-6 text-center font-bold text-xl">DEADLINE FOR ENTRIES: {{ $page->nominationDeadline }}</p>
			</div>
		</section>	

		<section class="container mx-auto px-6">
			
			<form class="mx-auto w-full mt-6 max-w-3xl">
				
				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold mb-6">Your details</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full md:w-1/2 px-3 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-first-name">
							First Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="nominator-first-name" type="text" placeholder="Jane">
						<span class="inline-block mt-2 text-red-500 text-xs italic">Please complete this field.</span>
					</div>
					<div class="w-full md:w-1/2 px-3 mt-4 md:mt-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-last-name">
							Last Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-last-name" type="text" placeholder="Doe">
					</div>
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-email">
							Email Address
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-password" type="text" placeholder="youremail@address.co.uk">
					</div>
				</div>
				
				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Nomination</section>

				<div class="flex flex-wrap -mx-3 ">

					<div class="w-full md:w-1/2 px-3 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-first-name">
							First Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="nominator-first-name" type="text" placeholder="Jane">						
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mt-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nominator-last-name">
							Last Name
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nominator-last-name" type="text" placeholder="Doe">
					</div>
				
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-job-title">
							Job Title
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-job-title" type="text" placeholder="Health & Safety Manager">						
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-company">
							Company
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-company" type="text" placeholder="ABC Widgets Ltd.">
					</div>
				</div>

				<section class="uppercase tracking-wide text-gray-700 text-base font-bold mt-6">Address</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-1">
							Address Line 1
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-1" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-2">
							Address Line 2
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-2" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/2 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-address-3">
							Address Line 3
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-address-3" type="text" placeholder="">
					</div>

				</div>

				<div class="flex flex-wrap -mx-3">

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-town">
							Town / City
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-town" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-postcode">
							Postcode
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-postcode" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-country">
							Country
						</label>
						<div class="relative">
							<select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-country">
								<option>England</option>
								<option>Wales</option>
								<option>Scotland</option>
								<option>Northern Ireland</option>
								<option>Republic Of Ireland</option>
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							</div>
						</div>
					</div>
		
					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-telephone">
							Telephone No.
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-telephone" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-email">
							Email Address
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-email" type="text" placeholder="">
					</div>

					<div class="w-full md:w-1/3 px-3 mt-4 md:mb-0">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-website">
							Website
						</label>
						<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomination-website" type="text" placeholder="">
					</div>

				</div>

				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Questions</section>

				<div class="flex flex-wrap -mx-3">
					<div class="w-full px-3">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-1">
						Question 1
						</label>
						<textarea id="nomination-question-1" name="nomination-question-1" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-2">
							Question 2
						</label>
						<textarea id="nomination-question-2" name="nomination-question-2" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-3">
							Question 3
						</label>
						<textarea id="nomination-question-3" name="nomination-question-3" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
					<div class="w-full px-3 mt-4">
						<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nomination-question-4">
							Question 4
						</label>
						<textarea id="nomination-question-4" name="nomination-question-4" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder=""></textarea>
					</div>
				</div>

				<section class="border-b border-gray-700 py-2 uppercase tracking-wide text-gray-700 text-lg font-bold my-6">Supporting Material</section>

				<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed hover:border-blue-500 rounded-md">
					<div class="space-y-1 text-center">
						<svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
							<path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<div class="flex text-sm text-gray-600">
							<label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
								<span>Upload a file</span>
								<input id="file-upload" name="file-upload" type="file" class="sr-only">
							</label>
							<p class="pl-1">or drag and drop</p>
						</div>
						<p class="text-xs text-gray-500">
							PDF, text & Word documents accepted.
						</p>
					</div>
				</div>

				<div class="flex justify-center md:justify-end mt-6 py-3 bg-gray-50">
					<button type="submit" class="btn-primary">		            	
        				<div class="bg-white w-full rounded p-3 text-blue-900">
	            			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-red-pigment-500 inline w-4 h-4 mr-2">
	            				<path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
	            			</svg>
	            			Submit your nomination
	            		</div>
        			</button>
		        </div>

			</form>

		</section>

		@include('_partials.collage')
	</main>

	@endsection