<x-app-layout>

    <div class="p-4 h-fit flex flex-col gap-4 mb-96">
        <div class=" h-fit flex flex-col relative px-8 lg:px-16 xl:px-32 rounded-xl gap-8">
            <h1 class="text-5xl font-bold text-[#331B3B]">Juhendid</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Esmaabi</h1>
                    
                    <ul class="list-disc ">
                    <a href="{{ asset('assets/hk_vigastused_esmaabi.pdf') }}" download="{{ asset('assets/hk_vigastused_esmaabi.pdf') }}">hk_vigastused_esmaabi.pdf</a>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Väikelapse vaimse tervise soovitused</h1>
                    
                    <ul class="list-disc">
                    <a href="{{ asset('assets/Vaikelaps-vaimne-tervis-Peaasi-plakat.pdf') }}" download="{{ asset('assets/Vaikelaps-vaimne-tervis-Peaasi-plakat.pdf') }}">Väikelapse_vaimne_tervis.pdf</a>
                    </ul>
                </div>
                
            </div>
            <div class="w-full h-fit flex justify-end">
            <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
            </div>
        </div>
    </div>
</x-app-layout>