<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
<<<<<<< Updated upstream
                {{ __('Edit Client') }}
=======
                {{ __('Add new Client') }}
>>>>>>> Stashed changes
            </h2>
            <a href="{{ route('client.index') }}"
                class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Back</a>
        </div>
    </x-slot>

<<<<<<< Updated upstream



=======
>>>>>>> Stashed changes
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- create new client --}}
<<<<<<< Updated upstream
                    <form action="{{route('client.update', $client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-6 flex space-x-4">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" class="formInput" value="{{$client->name}}">
=======
                    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-6 flex space-x-4">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" class="formInput" value="{{ old('name')}}">
>>>>>>> Stashed changes
                                @error('name')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1">
                                <label for="username" class="formLabel">User Naame</label>
<<<<<<< Updated upstream
                                <input type="text" name="username" id="username" class="formInput" value="{{ $client->username}}">
=======
                                <input type="text" name="username" id="username" class="formInput" value="{{ old('username')}}">
>>>>>>> Stashed changes
                                @error('username')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" flex mt-6 space-x-4">
                            <div class="flex-1">
                                <label for="email" class="formLabel">Email</label>
<<<<<<< Updated upstream
                                <input type="text" name="email" id="email" class="formInput" value="{{ $client->email}}">
=======
                                <input type="text" name="email" id="email" class="formInput" value="{{ old('email')}}">
>>>>>>> Stashed changes
                                @error('email')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="phone" class="formLabel">Phone</label>
<<<<<<< Updated upstream
                                <input type="text" name="phone" id="phone" class="formInput" value="{{ $client->phone }}">
=======
                                <input type="text" name="phone" id="phone" class="formInput" value="{{ old('phone')}}">
>>>>>>> Stashed changes
                                @error('phone')
                                    <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" flex space-x-2 mt-6 justify-between">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Country</label>
<<<<<<< Updated upstream



                                <select name="country" id="" class="formInput">
                                    <option value="none" >Select Country</option>
                                    {{-- for dynamic country --}}
                                    @foreach ($countries as $country)
                                        <option value=" {{$country}}" {{ $client->country == $country ? 'selected' : '' }}>{{$country}}</option>
                                    @endforeach
                                </select>
=======
                                <input type="text" name="country" id="country" class="formInput" value="{{ old('name')}}">
>>>>>>> Stashed changes
                                @error('country')
                                <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
<<<<<<< Updated upstream

                            <div class="flex-1">
                                <label for="status" class="formLabel">Status</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="active" {{ $client->status == 'active'? 'selected': ''}}>Active</option>
                                    <option value="inactive" {{$client->status == 'inactive'? 'selected': ''}}>In Active</option>
                                </select>
                                @error('status')
                                <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
=======
>>>>>>> Stashed changes
                            <div class="w-48">
                                <label for="">Select Your Image</label>
                                <label for="thumbnail" class="formLabel border border-green-500 px-4 py-2 text-md-center">Image</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="formInput hidden">
                                @error('thumbnail')
                                <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
<<<<<<< Updated upstream
                            {{-- profile image showing --}}


                            {{-- profile image url select --}}

                                @php
                                function getImageUrl($image){
                                    if(str_starts_with($image, 'http')){
                                        return $image;
                                    }
                                    return asset('storage/uploads') . '/'. $image;
                                }
                                @endphp

                            <div class="w-32 ">
                                <img class="rounded-full"  width="50" height="50" src="{{getImageUrl($client->thumbnail)}}" alt="">
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="submit-button">Update</button>
=======
                            <div class="flex-1">
                                <label for="status" class="formLabel">Status</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none" {{old('status')== 'none'? 'selected': ''}}>Select Status</option>
                                    <option value="active" {{old('status')== 'active'? 'selected': ''}}>Active</option>
                                    <option value="inactive" {{old('status')== 'inactive'? 'selected': ''}}>In Active</option>
                                </select>
                                @error('status')
                                <p class="text-red-700 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="submit-button">Submit</button>
>>>>>>> Stashed changes
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
