<x-base-layout>
    {{-- Main Content Begins --}}
    <div class="flex m-4">
        <div class="w-1/2 rounded shadow overflow-hidden">
            <img src="{{ asset($product->image_url )}}" alt="{{$product->title}}" class="object-cover h-100 w-full">
        </div>
        <div class="w-1/2 rounded bg-white ml-2 p-4 relative">
            <div class="font-semi-bold">{{$product->title}}</div>
            <div class="text-sm text-gray-500">
                {{$product->short_desc}}
            </div>
            <div class="text-xs text-gray-500">
                {{$product->full_desc}}
            </div>
            <div class="mt-4">
                <div class="text-xs font-semi-bold text-gray">Sold by:</div>
                <div class="text-sm text-gray-500">{{$product->user->name}}</div>
            </div>
            <div class="mt-2">
                <div class="text-xs">Phone Number:</div>
                @auth
                    <div class="text-sm text-gray-500">{{$product->user->phoneNumber}}</div>
                @else
                    <div class="text-sm text-gray-500">*******<a class="text-xs text-blue-500" href="/login">Login to check</a></div>
                @endauth
            </div>
            <div class="mt-2">
                <div class="text-xs">Email:</div>
                @auth
                    <div class="text-sm text-gray-500">{{$product->user->email}}</div>
                @else
                  <div class="text-sm text-gray-500">******<a class="text-xs text-blue-500" href="/login">Login to check</a></div>
                @endauth
            </div>
            <div>
                <div class="absolute bottom-0 right-0 m-6 rounded-full py-2 px-4 bg-green-500">
                    <div class="text-white font-bold text-sm">KSH {{$product->price}}</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Main Content Ends --}}
</x-base-layout>