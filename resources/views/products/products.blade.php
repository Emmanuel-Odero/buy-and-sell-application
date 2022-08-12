<x-base-layout>
    {{-- Main Content Begins --}}
    <div class="grid grid-cols-4 gap-4 p-6">
        @foreach ($products as $product)
        <a href="/product/{{$product->id}}">
            <div class="bg-white rounded shadow overflow-hidden">
                <img src="{{$product->image_url}}">
                <div class="p-4">
                    <div class="text-sm font-semibold">{{$product->title}}</div>
                    <div class="text-xs text-gray-500">{{$product->short_desc}}</div>
                </div>
                <div class="border-t px-4 py-2 text-bold sm">{{$product->price}}</div>
            </div>
        </a>
        @endforeach
    </div>
    {{-- Main Content Ends --}}

</x-base-layout>    