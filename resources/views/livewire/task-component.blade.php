<div>
    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

        <div class="pl-5 pt-2 pr-5 overflow-x-auto">


            <button wire:click="openCreateModal"
                class="bg-purple-800 text-white px-3 py-1 mb-4 mt-4 rounded-md hover:bg-purple-600">Nuevo</button>

            <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                <thead class="bg-purple-800 text-white">
                    <tr class="divide-x divide-gray-300">
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Task</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($tasks as $task)
                        <tr class="divide-x divide-gray-300 hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-normal bg-purple-50"> {{ $task->title }}</td>
                            <td class="px-6 py-4 whitespace-normal"> {{ $task->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap bg-purple-50">
                                <button wire:click.prevent="openCreateModal({{ $task }})"
                                    class="bg-blue-800 text-white px-3 py-1 rounded-md hover:bg-blue-600">Edit</button>
                                <button wire:click.prevent="deleteTask({{ $task }})"
                                    class="bg-red-800 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


    @if ($modal)


        <!-- Modal -->
        <div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
            <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
                <div class="w-full">
                    <div class="m-8 my-20 max-w-[400px] mx-auto">
                        <div class="mb-8">
                            <h1 class="mb-4 text-3xl font-extrabold">Crear nueva tarea</h1>
                            <form action="">
                                <div class="space-y-4">
                                    <div>
                                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                        <input autofocus wire:model="title" type="text" name="title" id="title"
                                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm
                                                                                                                                                                                                                                                        focus:ring-2 focus:ring-purple-600">
                                    </div>
                                    <div>
                                        <label for="description"
                                            class="block text-sm font-medium text-gray-700">Description</label>
                                        <input wire:model="description" type="text" name="description" id="description"
                                            class="mb-10 mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm
                                                                                                                                                                                                                                                        focus:ring-2 focus:ring-purple-600 focus:border-transparent"></input>
                                    </div>
                            </form>
                        </div>
                        <div class="space-y-4">
                            <button wire:click.prevent="updateOrCreateTask"
                                class="p-3 bg-black rounded-full text-white w-full font-semibold">Crear tarea</button>
                            <button wire:click.prevent="closeCreateModal"
                                class="p-3 bg-white border rounded-full w-full font-semibold">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final del modal -->

    @endif
</div>