<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <form class="w-full max-w-sm p-2" action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="md:flex flex-col md:items-start mb-6">
            <div class="md:w-1/3">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>

            </div>
            <div class="md:w-2/3">
                <textarea id="title" name="title" rows="2"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="post title ..."></textarea>
            </div>
        </div>

        <div class="md:flex flex-col md:items-start mb-6">
            <div class="md:w-1/3">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>

            </div>
            <div class="md:w-2/3">
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="post title ..."></textarea>
            </div>
        </div>



        <div class="md:flex flex-col md:items-start">
            <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Create
                </button>
            </div>
        </div>
    </form>
</x-app-layout>