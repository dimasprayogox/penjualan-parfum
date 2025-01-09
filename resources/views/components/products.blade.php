<div id="products" class="w-full flex flex-col py-24 dark:bg-gray-800">
    <div class="flex flex-col w-[90%] lg:w-4/5 2xl:w-3/5 mx-auto">    
        <div class="w-full md:w-4/5 md:mx-auto text-center pt-3 px-4 md:!px-0">
            <h1 class="text-3xl mt-2 md:text-4xl font-semibold">
                <span class="font-extrabold text-sky-600">Products</span>
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full">    
            @foreach($products as $product) <!-- Loop through each product -->
                <div class="rounded-2xl bg-gray-900 pr-0 md:mr-4 mt-6 transform transition-transform duration-300 hover:scale-105"> <!-- Tambahkan kelas untuk efek zoom -->
                    <div class="flex flex-col relative">
                        <div class="h-64 w-full overflow-hidden p-3"> 
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 class="w-full h-full object-cover rounded-xl" 
                                 title="{{ $product->name }}" 
                                 alt="{{ $product->name }}" />
                        </div>
                    </div>
                    <div class="flex flex-col px-4 ">
                        <p class="text-sm mt-3 text-gray-400 font-semibold">
                            {{ $product->Kategori->name ?? 'No Category' }} <!-- Display product category name -->
                        </p>
                        <h1 class="text-2xl my-2 md:text-3xl font-bold text-gray-600 ">
                            <span class="text-sky-600">{{ $product->name }}</span> <!-- Display product name -->
                        </h1>
                        <p class="text-sm mb-3 line-clamp-3 hover:line-clamp-none text-gray-500 text-justify">
                            {{ $product->description }} <!-- Display product description -->
                        </p>
                    </div>
                    <div class="flex flex-row py-3 px-4 border-t border-gray-100 dark:!border-gray-600">
                        <div class="w-1/2 flex flex-row dark:text-gray-200">
                            <span class="mr-1">Rp</span>
                            <span>{{ number_format($product->price, 0, ',', '.') }}</span> <!-- Display product price -->
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-6">
            {{ $products->links() }} <!-- Menampilkan pagination -->
        </div>
    </div>
</div>