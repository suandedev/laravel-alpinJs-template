<section x-data="{simpleText: false}"> {{-- alpin with bolean parameter --}}
    <div>
        <button x-on:click="simpleText = true">show</button>
        <button x-on:click="simpleText = false">hide</button>
    </div>
    <div class="">
        <p x-show="simpleText">this show message true</p>
        <p x-show="!simpleText">this show message false</p>
    </div>
</section>
<section x-data="{open: false}" class="mt-10"> {{-- alpin js with hidden --}}
    <div>
        <button x-on:click="open = ! open" class="bg-blue-500 p-3">menu</button>
    </div>
    <div :class="open ? '' : 'hidden'">
        <ul >
            <li>linl1</li>
            <li>linl2</li>
            <li>linl3</li>
            <li>linl4</li>
        </ul>
    </div>
</section>