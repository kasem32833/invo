<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add new Client') }}
            </h2>
            <a href="{{ route('client.index') }}"
                class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- create new client --}}
                    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-6 flex space-x-4">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" class="formInput">
                            </div>
                            <div class="flex-1">
                                <label for="username" class="formLabel">User Naame</label>
                                <input type="text" name="username" id="username" class="formInput">
                            </div>
                        </div>
                        <div class=" flex mt-6 space-x-4">
                            <div class="flex-1">
                                <label for="phone" class="formLabel">Phone</label>
                                <input type="text" name="phone" id="phone" class="formInput">
                            </div>
                            <div class="flex-1">
                                <label for="email" class="formLabel">Email</label>
                                <input type="text" name="email" id="email" class="formInput">
                            </div>
                        </div>
                        <div class=" flex space-x-2 mt-6 justify-between">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Country</label>
                                <input type="text" name="country" id="country" class="formInput">
                            </div>
                            <div class="">
                                <label for="thumbnail" class="formLabel">Image</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="formInput">
                            </div>
                            <div class="flex-1">
                                <label for="status" class="formLabel">Status</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none">Select Status</option>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">In Active</option>
                                </select>
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
