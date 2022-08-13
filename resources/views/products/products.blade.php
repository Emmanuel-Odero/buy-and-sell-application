<x-base-layout>
    {{-- Main Content Begins --}}
    <div class="grid grid-cols-4 gap-4 p-6">
        @each('products.each-product-on-list', $products, 'product'),
    </div>
    {{-- Main Content Ends --}}
    <div class="p-6">{{$products->links()}}</div>
</x-base-layout>    