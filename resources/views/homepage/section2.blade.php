  {{-- container --}}
<div x-data="{ mobilenavOpen: false }" class="text-white font-bold max-w-[1280px] w-full flex-col items-center">
    <a @click="mobilenavOpen = !mobilenavOpen" class="h-12 w-12 flex text-black items-center justify-center cursor-pointer hover:bg-gray-700 hover:text-white md:hidden">
        <i class="fa-solid fa-bars"></i>
    </a>
    {{-- navbar --}}
    <nav x-show="mobilenavOpen" x-cloak class="w-full h-full md:!block">
        <ul class="text-black font-medium text-sm block md:flex items-center p-0">
            <li class="flex items-center justify-center hover:text-white hover:bg-orange-700 ease-in-out duration-200">
                <a class="px-5 py-3" href="">HOME</a>
            </li>
            <li class="flex items-center justify-center hover:text-white hover:bg-orange-700 ease-in-out duration-200">
                <a class="px-5 py-3" href="">ABOUT DEPARTMENT</a>
            </li>
            <li class="flex items-center justify-center hover:text-white hover:bg-orange-700 ease-in-out duration-200">
                <a class="px-5 py-3" href="">NOTICES</a>
            </li>
            <li class="flex items-center justify-center hover:text-white hover:bg-orange-700 ease-in-out duration-200">
                <a class="px-5 py-3" href="">DOCUMENTS</a>
            </li>
            <li class="flex items-center justify-center hover:text-white hover:bg-orange-700 ease-in-out duration-200">
                <a class="px-5 py-3" href="{{route('cal')}}">OTHER</a>
            </li>
        </ul>
    </nav>

</div>
