<x-base-layout>
    {{-- Main Content Begins --}}
    <div class="flex m-4">
        <div class="w-1/2 rounded shadow overflow-hidden">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Ymx1ZXRvb3RoJTIwZWFycGhvbmV8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60" alt="Product detail" class="object-cover w-full">
        </div>
        <div class="w-1/2 rounded bg-white ml-2 p-4 relative">
            <div class="font-semi-bold">Headphone</div>
            <div class="text-sm text-gray-500">
                Excellent quality headphones at low cost.
            </div>
            <div class="text-xs text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus doloremque itaque natus eos porro? Nobis, accusantium. Rem, illo eius. Dolor laudantium minus temporibus repellendus id tempore adipisci expedita exercitationem suscipit.
                <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quasi consequuntur iure dolorum itaque quia ut molestiae iste soluta eveniet, incidunt ratione officia ullam sequi explicabo assumenda aperiam et fugiat!
            </div>
            <div class="mt-4">
                <div class="text-xs font-semi-bold text-gray">Sold by:</div>
                <div class="text-sm text-gray-500">John Doe</div>
            </div>
            <div class="mt-2">
                <div class="text-xs">Phone Number:</div>
                @auth
                    <div class="text-sm text-gray-500">+2547 000 1112 33</div>
                @else
                    <div class="text-sm text-gray-500">*******<a class="text-xs text-blue-500" href="/login">Login to check</a></div>
                @endauth
            </div>
            <div class="mt-2">
                <div class="text-xs">Email:</div>
                @auth
                    <div class="text-sm text-gray-500">johndoe@mail.com</div>
                @else
                  <div class="text-sm text-gray-500">******<a class="text-xs text-blue-500" href="/login">Login to check</a></div>
                @endauth
            </div>
            <div>
                <div class="absolute bottom-0 right-0 m-6 rounded-full py-2 px-4 bg-green-500">
                    <div class="text-white font-bold text-sm">$20</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Main Content Ends --}}
</x-base-layout>