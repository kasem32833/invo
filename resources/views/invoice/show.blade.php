<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('View Tasks') }}
            </h2>
            <a href="{{route('task.create')}}" class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Add New</a>
        </div>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{-- Data displaying --}}

                   <div>
                        <h2>{{$task->name}}</h2>
                        <h2>Price: ${{$task->price}}</h2>
                        <h2>{{$task->client->name}}</h2>
                        <div class="flex justify-between items-center">
                            <div class="bg-indigo-500 inline-block px-4 py-2 rounded">
                                <p>{{$task->status}}</p>
                            </div>
                            <div class="bg-indigo-500 inline-block px-4 py-2 rounded">
                                @if ($task->status == 'pending')
                                <form action="{{route('markAsComplete', $task)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="">
                                        <button type="submit">Mark as Complte</button>
                                    </div>
                                </form>

                                @endif
                            </div>

                        </div>
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
