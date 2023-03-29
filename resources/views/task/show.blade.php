<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('View Tasks') }}
            </h2>
            <a href="{{route('task.create')}}" class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Add New</a>
        </div>
    </x-slot>

    {{-- for displaying messages --}}
    @include('layouts.messages')



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{-- Data displaying --}}

                   <div>
                        <h2>{{$task->name}}</h2>
                        <h2>Price: ${{$task->price}}</h2>
                        <h2>{{$task->client->name}}</h2>
                        <h4 class="my-3 font-bold">Task Details:</h4>
                        <div class="my-4 p-5 border">
                            {!! $task->description !!}
                        </div>
                   </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
