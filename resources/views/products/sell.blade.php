<x-base-layout>
    <x-form-container-card>
        @if ($errors->any())
            <div class="text-red-600 text-xs">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
        <x-slot name="title">
            What are you selling today?
        </x-slot>
            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <label for="title" class="text-sm text-gray-500">Product Title</label>
                    <input type="text" name="title" id="title" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
                </div>
                <div class="mt-2">
                    <label for="desc-sm" class="text-sm text-gray-500">Add Short Description Of The Product</label>
                    <input type="text" name="desc-sm" id="desc-sm" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
                </div>
                <div class="mt-2">
                    <label for="desc-full" class="text-sm text-gray-500">Add Complete Details Of The Product</label>
                    <textarea type="text" name="desc-full" id="desc-full" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full"></textarea>
                </div>
                <div class="mt-2">
                    <label for="price" class="text-sm text-gray-500">Product Price</label>
                    <input type="text" name="price" id="price" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
                </div>
                <div class="mt-2">
                    <label for="product-img" class="text-sm text-gray-500">Upload Product Image</label>
                    <input type="file" name="product-img" id="product-img" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
                </div>
                <x-button class="mt-4 w-full justify-center">
                   Post the Product 
                </x-button>
        </form>
    </x-form-container-card>
</x-base-layout>