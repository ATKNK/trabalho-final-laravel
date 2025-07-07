<nav class="flex flex-row bg-sky-700 text-stone-100 p-4 items-center justify-between">
    <div class="flex flex-row">
        <a href="/">
            <h1 class="font-bold text-xl p-5">Terraria Setup Creator</h1>
        </a>
        <div class=" flex flex-row items-center space-x-2">
            <a class="bg-sky-600 p-3 rounded-xl" href="/classes">Classes</a>
            <a class="bg-sky-600 p-3 rounded-xl" href="/weapons">Weapons</a>
            <a class="bg-sky-600 p-3 rounded-xl" href="/armors">Armor</a>
            <a class="bg-sky-600 p-3 rounded-xl" href="/accessories">Accessories</a> 
            <a class="bg-sky-600 p-3 rounded-xl" href="/players">Players</a>
            <a class="bg-sky-600 p-3 rounded-xl" href="/setups">Setups</a>
        </div>
    </div>

    <div class="flex flex-row items-center space-x-2">
        <a class="bg-sky-600 p-3 rounded-xl" href="{{route('profile.edit')}}">{{ Auth::user()->name ?? "Login" }}</a>
        <form class="bg-sky-600 p-3 rounded-xl" action="{{route('logout')}}" method="POST">
            @csrf
            <button class="bg-sky-600 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black">Logout</button >
        </form>
    </div>
</nav>