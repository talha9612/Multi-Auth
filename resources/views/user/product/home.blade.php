<x-app-layout>
    <x-slot name="header">
        <h2 class = "font-semibold text-xl text-gray-800 leading-tight">
            {{__('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class ="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class ="bg-white overflow-hidden shadow-sm  sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class = "d-flex align-items-center justify-content-between">
                        <h1 class="mb-0"> List Product </h1>
                    </div>
            <!-- Products Table -->
            <table class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Title</th>
                                <th class="border border-gray-300 px-4 py-2">Category</th>
                                <th class="border border-gray-300 px-4 py-2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->id }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->title }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->category }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->price }}</td>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class= "text-center" colspan="5"> Product Not Found</td>
                            </tr>
                            @endforelse
                            <div class="flex justify-between">
                            <a href="{{ route('user/dashboard') }}" style="background-color: yellow; color: black; position: relative; z-index: 10;" class="px-4 py-2 rounded-lg hover:bg-blue-700">Go Back</a>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app_layout>