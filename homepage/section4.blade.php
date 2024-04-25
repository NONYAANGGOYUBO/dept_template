{{-- Container --}}
<div class="max-w-[1280px] w-full flex flex-col md:flex-row">
    {{-- about department box --}}
    <div class="md:w-1/3 flex flex-col p-3">
        <div>
            <h1 class="text-2xl font-semibold">About Department</h1>
        </div>
        <div>
            <p class="max-h-24 overflow-hidden">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="bg-yellow-400 text-black hover:text-white p-2 w-fit">
                Read More
            </div>
        </div>


    </div>

    {{-- what's new, tenders box --}}
    <div x-data="{ activeTab: 'WhatsNew'}" class="w-full md:w-1/3 flex flex-col p-3">
        <div id="mini_nav" class="flex flex-col border border-gray-300 md:flex-row">
            <div @click="activeTab = 'WhatsNew' " :class="{'bg-gray-100 text-black': activeTab === 'WhatsNew', 'bg-gray-200 text-black': activeTab !== 'WhatsNew' }" class="p-2 border-r border-gray-300 md:w-1/3">What's New</div>
            <div @click="activeTab = 'Tenders' " :class="{'bg-gray-100 text-black': activeTab === 'Tenders', 'bg-gray-200 text-black': activeTab !== 'Tenders' }" class="p-2 border-r border-gray-300 md:w-1/3">Tenders</div>
            <div @click="activeTab = 'Notifications' " :class="{'bg-gray-100 text-black': activeTab === 'Notifications', 'bg-gray-200 text-black': activeTab !== 'Notifications' }" class="p-2 md:w-1/3">Notifications</div>
        </div>
        <div x-show="activeTab === 'WhatsNew' " class="p-2">
            <ul>
                <li>MGK</li>
                <li>KGK</li>
                <li>JNU</li>
                <li>Gramin</li>
                <li>Pradhan</li>
            </ul>
        </div>
        <div x-show="activeTab === 'Tenders' ">
            <p>Tenders</p>
        </div>
        <div x-show="activeTab === 'Notifications' ">
            <p>Notfications</p>
        </div>
    </div>

    {{-- card of officers/ministers --}}
    <div id="cards" class="md:w-1/3 border border-gray-300 m-2 p-2">

        {{-- individual card --}}
        <div id="individual_card" class="flex flex-col justify-center items-center md:flex-row">
            <div id="left_card" class="flex justify-center items-center w-1/2">
                <div id="pp_container">
                    pp
                </div>
            </div>
            <div id="right_card" class="flex flex-col w-1/2">
                <div>
                    <p class="font-semibold">Hon'ble</p>
                    <p>Chief Minister Name</p>
                </div>
                <div>
                    <p>Profile</p>
                    <p>Contact</p>
                </div>
            </div>
        </div>
    </div>
</div>
