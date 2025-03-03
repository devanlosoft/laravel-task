<x-layouts.app>
    <!--     <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div> -->
    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <!-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> -->
        <h1 class="text-3xl text-purple-800 text-center pt-5 font-extrabold">Bienvenido al gestor de tareas</h1>
        <div class="pl-5 pt-2 pr-5 overflow-x-auto">


            <button class="bg-purple-800 text-white px-3 py-1 mb-4 rounded-md hover:bg-purple-600">Nuevo</button>

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
                                <button class="bg-blue-800 text-white px-3 py-1 rounded-md hover:bg-blue-600">Edit</button>
                                <button class="bg-red-800 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
</x-layouts.app>