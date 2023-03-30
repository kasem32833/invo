<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add new Invoice') }}
            </h2>
            <a href="{{ route('invoice.index') }}"
                class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (count($clients) == 0)
                        {{-- When there is no client --}}
                        <div class="flex flex-col justify-center items-center bg-orange-400 w-full">
                            <h4 class="text-xl">You don't have any client</h4>
                            <p>Please add client first</p>
                            <a href="{{route('client.create')}} " class="bg-orange-900 px-4 py-2 rounded-md my-4">Add your client</a>
                        </div>

                    @endif

                    {{-- create new client --}}
                    <form action="{{route('task.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-6 flex space-x-4">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" class="formInput" value="{{ old('name')}}">
                                @error('name')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" flex mt-6 space-x-4">
                            <div class="flex-1">
                                <label for="price" class="formLabel">price</label>
                                <input type="number" name="price" id="price" class="formInput py-2" value="{{ old('price')}}">
                                @error('price')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="client_id" class="formLabel">Client Name</label>
                                <select name="client_id" id="client_id" class="formInput">
                                    <option value="none" >Select Client</option>

                                    {{-- for dynamic country --}}
                                    @foreach ($clients as $client)
                                        <option value="{{$client->id}} {{$client->id == old('client_id') ? 'selected': ''}}">{{$client->name}}</option>
                                    @endforeach
                                </select>
                                @error('client_id')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" flex space-x-2 mt-6 justify-between">
                            <div class="flex-1 text-white">
                                <label for="description" class="formLabel">Description</label>
                                <textarea name="description" id="description"  rows="10" class="formInput ">
                                    {{old('description')}}
                                </textarea>
                                @error('description')
                                <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
