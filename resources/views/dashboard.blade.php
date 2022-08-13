<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-6 bg-white border-b border-gray-200">
            @if (sizeof($product))
                You are currently selling {{sizeof($product)}} products.
                <a class="text-xxs text-blue-500" href="/sell">Click to Sell More Items</a></div>
            @else
                You have not added any Items for sale.
                <a class="text-xxs text-blue-500" href="/sell">Sell Items</a></div>
            @endif
        </div>
        {{-- Main Content Begins --}}
    <div class="grid grid-cols-4 gap-4 p-6">
        @each('products.each-product-on-list', $product, 'product'),
    </div>
    {{-- Main Content Ends --}}
    <div class="p-6">{{$product->links()}}</div>
    </div>
</x-app-layout>
