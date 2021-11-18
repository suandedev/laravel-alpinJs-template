<nav>
    <ul :class="open ? '' : 'hidden'" class="md:flex md:flow-row">
        <li class="mx-3">
            <a @click="dropDown = ! dropDown" class="bg-indigo-300 block px-6 py-3 rounded text-center hover:bg-indigo-400 hover:text-gray-100" href="#">
                link2
            </a>
            <ul x-show="dropDown" class="text-center">
                <li>linl1</li>
                <li>linl2</li>
            </ul>
        </li>
    </ul>
</nav>