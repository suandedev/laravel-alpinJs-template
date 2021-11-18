<x-my-app>
    <main x-data="{open: false}" class="bg-gray-100 p-10">
        <h1 class="">dashboard</h1>

        <button @click="open = ! open" class="bg-indigo-500 p-3 my-3 rounded">
            add
        </button>
        <form x-show="open" class="bg-gray-50 absolute w-80 flex flex-col p-3  rounded shadow-sm" action="">
            <label for="">
                post
            </label>
            <input class="border rounded-sm border-indigo-300 focus:border-transparent focus:outline-none " type="text" placeholder="post...">
        </form>

    </main>
</x-my-app>