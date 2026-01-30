    @extends('layout.app')

@section('title', 'All Recipes')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
       
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                @if($recipes->image)
                    <img src="{{ asset('storage/'.$recipes->image) }}" alt="{{ $recipes->title }}"
                        class="w-full h-48 object-cover">
                @endif

                <div class="p-5">
                    <h2
                     class="text-xl font-semibold text-rose-500 mb-2">
                        {{ $recipes->title }}
                    </h2>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ Str::limit($recipes->description, 120) }}
                    </p>
                    <p class="text-gray-600 text-sm mb-4" >{{$recipes->ingredients}}</p>

                </div>
            </div>
    </div>
@endsection

