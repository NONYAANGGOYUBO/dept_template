{{-- Container --}}
<div class="max-w-[1280px] w-full flex flex-col md:flex-row p-1 gap-4">
    {{-- about department box --}}
    <div class="md:w-1/3 flex flex-col p-3 bg-slate-50 shadow-md rounded-md">
        <div class="pb-3">
            <h1 class="text-2xl font-semibold">About Department</h1>
        </div>
        <div class="h-full">
            <p class="overflow-hidden h-[165px] text-justify mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti omnis rem accusantium quo delectus perferendis nostrum excepturi architecto qui? Rem perferendis, perspiciatis ex reiciendis dolores provident cumque eveniet modi eos?
                Obcaecati libero magni delectus nemo esse ipsam quam quia a. Temporibus facere, modi voluptatem maxime nisi sequi ea! Quaerat praesentium labore perspiciatis, dolorem beatae sapiente eius consectetur. Natus, beatae nemo.
                Nemo rerum facere iure, quidem laborum officiis omnis excepturi optio quas libero pariatur! Repellendus quis deleniti officia fuga ducimus qui esse, ea velit ut error voluptate harum, autem repellat nesciunt.
                Facilis, tempore optio voluptate voluptates nisi quibusdam sunt accusantium quasi porro maiores dolorum corporis placeat velit laborum consectetur qui dolores odit perferendis ex explicabo delectus earum? Consequuntur quibusdam consequatur aut.
                Provident cumque aspernatur quod hic tempora facere dolorem debitis deleniti veniam! Minima, nostrum porro. Commodi blanditiis sapiente, in tempora veniam excepturi unde minima! Esse unde optio aspernatur possimus quo aut.
                Porro ut illum sequi, omnis quidem debitis blanditiis! Deleniti veniam amet natus unde provident quibusdam delectus qui. Provident voluptas culpa earum, minus saepe adipisci, similique, hic maxime temporibus dolorum voluptatem.
            </p>
            <div class="hover:scale-110 ease-in-out duration-300 w-fit">
                <a href="" class="bg-yellow-200 font-bold text-yellow-700  p-2 rounded-md text-sm">{{--read more link--}}
                    Read more
                </a>
            </div>

        </div>


    </div>

    {{-- what's new, tenders box --}}
    <div x-data="{ activeTab: 'WhatsNew'}" class="w-full md:w-1/3 flex flex-col p-3 bg-slate-50 shadow-md rounded-md">
        <div id="notice" class=" text-2xl font-semibold mb-2">Notice Board</div>
        <div id="mini_nav" class="flex md:flex-row">
            <div @click="activeTab = 'WhatsNew' " :class="{' bg-cyan-700 text-white': activeTab === 'WhatsNew',
                'bg-gray-200 text-black': activeTab !== 'WhatsNew' }"
                class="p-2  md:w-1/3 text-center">
                <i class="fa-regular fa-newspaper pr-1"></i>
                What's New
            </div>
            <div @click="activeTab = 'Tenders' " :class="{'bg-cyan-700 text-white': activeTab === 'Tenders',
                'bg-gray-200 text-black': activeTab !== 'Tenders' }"
                class="p-2 md:w-1/3 text-center">
                <i class="fa-solid fa-briefcase pr-1"></i>
                Tenders
            </div>
            <div @click="activeTab = 'Notifications' " :class="{'bg-cyan-700 text-white': activeTab === 'Notifications',
                'bg-gray-200 text-black': activeTab !== 'Notifications' }"
                class="p-2 md:w-1/3 text-center">
                <i class="fa-regular fa-bell pr-1"></i>
                Notifications
            </div>
        </div>
        <div x-show="activeTab === 'WhatsNew' " class="p-2 mt-2">
            <ul>
                <li>MGK</li>
                <li>KGK</li>
                <li>JNU</li>
                <li>Gramin</li>
                <li>Pradhan</li>
            </ul>
        </div>
        <div x-show="activeTab === 'Tenders' " class="p-2 mt-2">
            <p>Tenders</p>
        </div>
        <div x-show="activeTab === 'Notifications' " class="p-2 mt-2">
            <p>Notfications</p>
        </div>
    </div>

    {{-- card of officers/ministers --}}
    <div id="cards" class="md:w-1/3 p-3 block rounded-md bg-slate-50 shadow-md">

        {{-- individual card --}}
        <div id="individual_card" class="flex flex-col justify-center items-center md:flex-row border-collapse border p-0 ">
            <div id="left_card" class="flex justify-center items-center w-2/6 h-32">
                <div id="pp_container">
                    <img src="logos/user.png" class="h-20" alt="">
                </div>
            </div>
            <div id="right_card" class="flex flex-col w-4/6 p-2">
                <div>
                    <p class="font-semibold">Hon'ble</p>
                    <p>Chief Minister Name</p>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <i class="fa-solid fa-phone pr-1"></i>
                        <a href="" class="text-xs">Contact</a>
                    </div>
                    <div class="w-1/2">
                        <i class="fa-solid fa-address-card pr-1"></i>
                        <a href="" class="text-xs">Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="individual_card" class="flex flex-col justify-center items-center md:flex-row border-collapse border p-0 mt-3">
            <div id="left_card" class="flex justify-center items-center w-2/6 h-32">
                <div id="pp_container">
                    <img src="logos/user.png" class="h-20" alt="">
                </div>
            </div>
            <div id="right_card" class="flex flex-col w-4/6 p-2">
                <div>
                    <p class="font-semibold">Hon'ble</p>
                    <p>Chief Minister Name</p>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <i class="fa-solid fa-phone pr-1"></i>
                        <a href="" class="text-xs">Contact</a>
                    </div>
                    <div class="w-1/2">
                        <i class="fa-solid fa-address-card pr-1"></i>
                        <a href="" class="text-xs">Profile</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
