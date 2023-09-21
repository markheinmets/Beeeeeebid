<x-app-layout>

    <div class="p-4 h-full flex flex-col gap-4">
        <div class=" flex flex-col gap-2 relative  px-32 rounded-xl gap-8">
            <form action="" method="get" class="bg-white rounded-full flex shadow-md ">
                <input type="search" name="q" id="q" class="w-full border-0 rounded-l-full p-4 bg-transparent" placeholder="Otsing...">
                <button type="submit" class="border-2 border-black/50 rounded-full border-[#fb9333] bg-[#fb9333] py-2 px-4 flex items-center justify-center">
                <span class="material-symbols-outlined text-white">search</span>
                </button>
            </form>
            <div class="flex flex-wrap w-full px-64 h-8 gap-2 justify-center ">
                @foreach ($tags as $tag)
                    <a href="#{{ $tag->code_name }}" class="flex justify-center items-center px-6 py-2 rounded-full bg-[#fb9333]">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
