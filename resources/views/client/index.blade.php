<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Clients') }}
            </h2>
            <a href="{{route('client.create')}}" class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Add New</a>
        </div>
    </x-slot>
    {{-- for displaying messages --}}
    @include('layouts.messages')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{-- Data displaying --}}


                     <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="border py-2 w-32">Thumbnail</th>
                                <th class="border py-2">Name</th>
                                <th class="border py-2">User name</th>
                                <th class="border py-2">email</th>
                                <th class="border py-2">Phone</th>
                                <th class="border py-2">Country</th>
                                <th class="border py-2">Tasks</th>
                                <th class="border py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                function getImageUrl($image){
                                    if(str_starts_with($image, 'http')){
                                        return $image;
                                    }
                                    return asset('storage/uploads') . '/'. $image;
                                }

                            @endphp

                            @foreach ($clients as $client)

                                <tr>
                                    <td class="border py-2 w-32 text-center">
                                        <img  width="50"   class="mx-auto rounded-full" src="{{getImageUrl($client->thumbnail)}}" alt="">
                                    </td>
                                    <td class="border py-2  text-center">{{$client->name}}</td>
                                    <td class="border py-2  text-center">{{$client->username}}</td>
                                    <td class="border py-2  text-center">{{$client->email}}</td>
                                    <td class="border py-2  text-center">{{$client->phone}}</td>
                                    <td class="border py-2  text-center">{{$client->country}}</td>
                                    <td class="border py-2  text-center">
                                        <div class="flex justify-between">
                                            <a href="{{route('client.edit', $client->id)}}" class="bg-green-500 text-white px-3 py-2">Edit</a>
                                            {{-- for delete data  --}}

                                            <form action="{{route('client.destroy', $client->id)}}" method='POST'
                                                onsubmit="return confirm('Do you really want to delete?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                class="bg-red-500 text-white px-3 py-2">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                     </table>
                     <div class="mt-5">{{$clients->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
