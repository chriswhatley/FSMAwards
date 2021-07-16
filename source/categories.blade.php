---
pagination:
    collection: awards
    perPage: 15
---

@extends('_layouts.master', 
	['page_title' => 'Awards Categories', 
	'meta_title' => 'Associate your brand with excellence at The Fire & Security Matters Awards', 
	'meta_description' => 'Reach thousands of industry professionals before, during and after the event, network with the industry’s most influential people and a unique opportunity to position your organisation as an industry leader!'])

@section('content')

	{{-- Main Content --}}
    <main class="relative bg-white w-full z-10">

    	@include('_components.title-component', ['title' => 'The Awards', 'background_image' => 'highlights'])
       
        <section class="container mx-auto py-10 px-6">

        	<div class="w-full text-center">
	    		<p>Please make sure you have properly read the categories and criteria before entering. The criteria is different for each category and you are able to enter multiple categories. You can also enter more than one nomintion in each category provided they are different products, services or nominees.</p>
				<p class="mt-4 text-center font-semibold">DEADLINE FOR ENTRIES: {{ $page->awardsDeadline }}.</p>
	    	</div>

			<div class="mt-12 flex flex-wrap">
				@foreach ($pagination->items as $award)
					@include('_components.award-component')	
				@endforeach
			</div>
		 	

		</section>

@endsection