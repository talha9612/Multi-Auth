<x-app-layout>
    <x-slot name="header">
        <h2 class = "font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class ="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class ="bg-white overflow-hidden shadow-sm  sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0"> Add Product </h1>
                    <hr/>
                    @if(Session()->has('error'))
                    <div>
                        {{Session('error')}}
                    </div>
                    @endif
                <!-- Form -->
                    <form action="{{ route('admin/products/save') }}" method="POST">
                        @csrf
                        
                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Product Title</label>
                            <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                            @error('title')
                            <span class = "text-danger">{{$message}}</span> 
                            @enderror                       
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category" class="block text-gray-700">Category</label>
                            <input type="text" id="category" name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                            @error('category')
                            <span class = "text-danger">{{$message}}</span> 
                            @enderror 
                        </div>
 
                        <!-- Price -->
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700">Price</label>
                            <input type="text" id="price" name="price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                            @error('price')
                            <span class = "text-danger">{{$message}}</span> 
                            @enderror 
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-between">
                            <a href="{{ route('admin/products') }}" style="background-color: yellow; color: black; position: relative; z-index: 10;" class="px-4 py-2 rounded-lg hover:bg-blue-700">Go Back</a>
                            <button type="submit" style="background-color: yellow; color: black; position: relative; z-index: 10;" class="px-4 py-2 rounded-lg hover:bg-blue-700">Submit</button>
                        </div>                
                    </div>
            </div>
        </div>
    </div>
</x-app_layout>