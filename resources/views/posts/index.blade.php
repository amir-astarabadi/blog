<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                        <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">title</th>
                                <th scope="col" class="px-6 py-4">description</th>
                                <th scope="col" class="px-6 py-4">created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)

                            <tr class="border-b border-neutral-200 dark:border-white/10">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">
                                    {{$post->id}}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{$post->title}}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{$post->short_description}}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    {{$post->created_at->diffForHumans()}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>