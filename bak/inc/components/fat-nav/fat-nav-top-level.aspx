<!-- Top Level -->
<span v-scope="{toggle : false}" class="top-level ps-0 flex-c d-xl-block justify-content-between px-5 py-3 px-xl-0 py-xl-1 w-100" :class="{"bg-dark" : toggle}" @click="{toggle = !toggle}">
    <a href="/new-cars/" class="text-uppercase">Vehicles Section</a>
    <i class="fa-thin d-xl-none" :class="toggle ? "fa-circle-caret-up" : "fa-circle-caret-down""></i>
</span>
<!-- Top Level : END-->