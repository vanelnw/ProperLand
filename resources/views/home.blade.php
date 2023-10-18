@extends('base')

@section('content')
    <section class="m-4 md:m-8">
        <div class="container p-4 mx-auto my-6 space-y-1 text-center">
		    <span class="text-xs font-semibold tracki uppercase dark:text-violet-400">shortcut to your dream ui</span>
		    <h2 class="pb-3 text-3xl font-bold md:text-4xl">Create a stylish website in minutes</h2>
		    <p>Get a jumpstart to creating your new webpage! With our fully responsive and carefully styled components you can get the structure of your website done with just a couple of clicks.</p>
	    </div>

       <div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Nos biens</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($properties as $property)
        <div class="bg-gray-700 p-4">
            @include('property.card')
        </div>
        @endforeach
    </div>
</div>

    </section>
@endsection