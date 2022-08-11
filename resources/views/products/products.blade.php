<x-base-layout>
    {{-- Main Content Begins --}}
    <div class="grid grid-cols-4 gap-4 p-6">
        @for ($i = 0; $i < 12; $i++)
        <a href="/product/1">
            <div class="bg-white rounded shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Ymx1ZXRvb3RoJTIwZWFycGhvbmV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60">
                <div class="p-4">
                    <div class="text-sm font-semibold">Headphone</div>
                    <div class="text-xs text-gray-500">Excellent quality headphones at low cost</div>
                </div>
                <div class="border-t px-4 py-2 text-bold sm">KSH2000</div>
            </div>
        </a>
        @endfor
    </div>
    {{-- Main Content Ends --}}

</x-base-layout>    