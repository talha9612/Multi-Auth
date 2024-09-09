<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Report') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Account Created</th>
                                <th>Last Login</th>
                                <th>Last Logout</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->last_login_at }}</td>
                                    <td>{{ $user->last_logout_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-between">
                        <a href="{{ route('admin/dashboard') }}" style="background-color: yellow; color: black; position: relative; z-index: 10;" class="px-4 py-2 rounded-lg hover:bg-blue-700">Go Back</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>