<x-app-layout>

    <div class="p-4 h-fit flex flex-col gap-4 mb-44">
        <div class=" h-fit flex flex-col relative px-8 lg:px-16 xl:px-32 rounded-xl gap-8">
            <h1 class="text-5xl font-bold text-[#331B3B]">Vajalikud numbrid</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Perearsti nõuandetelefon</h1>
                    <p>Telefoni nr:</p>
                    <ul class="list-disc pl-8">
                        <li class="">1220</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Riigiinfo telefon</h1>
                    <p>Telefoni nr:</p>
                    <ul class="list-disc pl-8">
                        <li class="">1247</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Lasteabi telefon</h1>
                    <p>Telefoni nr:</p>
                    <ul class="list-disc pl-8">
                        <li class="">116 111</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Vältimatu psühholoogilise abi ööpäevaringne usaldustelefon</h1>
                    <p>Telefoni nr:</p>
                    <ul class="list-disc pl-8">
                        <li class="">126 <span class="text-[#FB9333]">(eesti keeles)</span></li>
                        <li class="">127 <span class="text-[#FB9333]">(vene keeles)</span></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold break-words  hyphens-manual">Mürgistusteabe&shy;keskuse ööpäevaringne infotelefon</h1>
                    <p>Telefoni nr:</p>
                    <ul class="list-disc pl-8">
                        <li class="">16662</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 p-4 border-2 border-[#FFF0DA] rounded-2xl">
                    <h1 class="text-2xl font-bold">Lastearsti tasuline nõuandeliin</h1>
                    <p>Telefoni nr: <span class="text-[#FB9333]">(hind 1min/1€)</span></p>
                    <ul class="list-disc pl-8">
                        <li class="">1599</li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-fit flex justify-end">
            <a href="{{ route('home') }}" class="bg-[#FFD79F] rounded-[100px] py-4 px-8 text-[#331B3B] text-lg font-semibold flex w-fit border-2 border-[#FB9333] md:border-[#FFD79F] md:hover:border-[#FB9333] transition-colors ease-in-out">Tagasi avalehele</a>
            </div>
        </div>
    </div>
</x-app-layout>
