<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tasks') }}
            </h2>
            <a href="{{route('task.create')}}" class="border border-indigo-700 bg-indigo-500 hover:bg-indigo-700 rounded text-white px-4 py-2 shadow">Add New</a>
        </div>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{-- Data displaying --}}


                     <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="border py-2">id</th>
                                <th class="border py-2">Name</th>
                                <th class="border py-2">price</th>
                                <th class="border py-2">status</th>
                                <th class="border py-2">client</th>
                                <th class="border py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)

                                <tr>

                                    <td class="border py-2  text-left px-2">{{$task->id}}</td>
                                    <td class="border py-2  text-left px-2">{{$task->name}}</td>
                                    <td class="border py-2  text-center">{{$task->price}}</td>
                                    <td class="border py-2  text-center capitalize">{{$task->status}}</td>
                                    <td class="border py-2  text-center"><a class="text-orange" href="{{route('searchTaskByClient', $task->client)}}">{{$task->client->name}}</a></td>
                                    <td class="border py-2  text-center">
                                        <div class="flex justify-around">
                                            <a href="{{route('task.edit', $task->id)}}" class="bg-green-500 text-white px-3 py-2">Edit</a>
                                            <a href="{{route('task.show', $task->id)}}" class="bg-orange-500 text-white px-3 py-2">Show</a>

                                            {{-- for delete data  --}}
                                            <form action="{{route('task.destroy', $task->id)}}" method='POST'
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
                     <div class="mt-5">{{$tasks->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
