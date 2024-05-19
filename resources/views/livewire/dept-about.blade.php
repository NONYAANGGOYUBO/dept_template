

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
    <div x-data = "{modal:false}"  class="">
        <div>
            <p class="text-gray-800 font-bold text-xl">About Department</p>
            <p class="py-2 text-gray-400">Update your department description</p>
        </div>
        <textarea disabled class="w-full rounded-md outline-none mt-3 border border-slate-200"
        name="" id=""  rows="5">{{$dbabout}}
        </textarea>


        <button @click ="modal=true" class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent
            rounded-md font-semibold text-xs text-white uppercase tracking-widest
          hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none
           focus:ring-2 focus:ring-cyan-700 focus:ring-offset-2 transition ease-in-out duration-150">edit</button>
        <div x-show="modal" class="p-16 bg-gray-100 fixed top-0 left-0 bottom-0 z-10 bg-slate-500/5 flex items-center justify-center w-full">
            <div class="w-full md:w-[80%] bg-white p-5 rounded-lg shadow-3xl" @click.outside = "modal = false">
                <h1 class="text-center font-semibold text-xl p-2">Edit About Department</h1>
                <div x-data="{showMessage: false}" x-init="window.addEventListener('flashMessage', () => { showMessage = true; setTimeout(() => { showMessage = false; }, 3000); })">
                    @if (session('success'))

                        <div x-show="showMessage" class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <span class="font-medium">{{session('success')}}</span>
                        </div>

                    @endif
                </div>
                <form class="" action="" wire:submit="editabout">

                    <textarea class="w-full rounded-md border-gray-300 border-2" name="about" wire:model="about" id="" cols="30" rows="10"></textarea>
                    @error('about')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{$message}}</span>
                        </div>
                    @enderror
                    <br>
                    <button @click = "modal = true"  class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent
                    rounded-md font-semibold text-xs text-white uppercase tracking-widest
                  hover:bg-gray-700 focus:bg-gray-700">save</button>
                    <div @click = "modal = false" class="inline-flex items-center px-4 py-2
                    rounded-md font-bold text-xs text-black uppercase tracking-widest border
                  hover:shadow-xl cursor-pointer">cancel</div>
                </form>
            </div>
            </div>

        </div>
        <hr class="my-4">
        <div>
{{-- address section --}}
            <div class=" bg-gray-50 h-full">
                <div class="flex justify-between py-3 h-24 items-center">
                    <div>
                        <p class="text-gray-800 font-bold text-xl">Address</p>
                        <p class="py-2 text-gray-400">Fill your department address details.
                            <br> Set your department latitude and longitude for showing exact location to your portal</p>
                    </div>

                </div>

                <div class="font-nunito bg-white border border-gray-300 rounded-md p-3">

                    <div class="grid lg:grid-cols-2 grid-cols-1 pb-5">
                        <div class="flex flex-col p-3">
                            <label for="deptname" class="text-sm mt-5 mb-2 font-bold">Department Name</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->deptname==null?"no data":$dbaddress->deptname)}}" type="text" name="deptname" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>

                        <div class="flex flex-col p-3">
                            <label for="street" class="text-sm mt-5 mb-2 font-bold">Street</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->street==null?"no data":$dbaddress->street)}}" type="text" name="street" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>

                        <div class="flex flex-col p-3">
                            <label for="city" class="text-sm mt-3 mb-2 font-bold">City</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->city==null?"no data":$dbaddress->city)}}" type="text" name="city" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>

                        <div class="flex flex-col p-3">
                            <label for="state" class="text-sm mt-3 mb-2 font-bold">State</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->state==null?"no data":$dbaddress->state)}}" name="state" id="" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>

                        <div class="flex flex-col p-3">
                            <label for="district" class="text-sm mt-3 mb-2 font-bold">District</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->district==null?"no data":$dbaddress->district)}}" name="district" id="" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>

                        <div class="flex flex-col p-3">
                            <label for="pincode" class="text-sm mt-3 mb-2 font-bold">Pin Code</label>
                            <input value="{{$dbaddress==null?"no address available":($dbaddress->pincode==null?"no data":$dbaddress->pincode)}}" type="text" name="pincode" disabled class="border border-gray-300 rounded-md p-2 text-sm">

                        </div>


                    </div>

                    <hr>



                    <div class="p-3 pb-5 ">
                        <label  class="text-sm mt-3 mb-2 font-bold">Latitude</label>
                        <input  disabled class="border border-gray-300 rounded-md p-2 text-sm" value="{{$dbaddress==null?"no":($dbaddress->lat==null?"no data":$dbaddress->lat)}}">

                        <label class="text-sm mt-3 mb-2 font-bold">Longitude</label>
                        <input  disabled class="border border-gray-300 rounded-md p-2 text-sm " value="{{$dbaddress==null?"no":($dbaddress->lng==null?"no data":$dbaddress->lng)}}">

                    </div>
                    <div wire:ignore class="h-80 w-full z-50" id="viewmap">
                        leaflet
                    </div>
                    <div class="p-3 pb-5">
                        <a href="{{route('showeditabout')}}">
                            <button class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent
                            rounded-md font-semibold text-xs text-white uppercase tracking-widest
                            hover:bg-gray-700 focus:bg-gray-700">
                            Edit
                        </button>
                        </a>

                    </div>
                </div>






                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

                <script>
                    var coordinates;

                    var map = L.map('viewmap').setView([
                        {{$dbaddress==null?28.2180:($dbaddress->lat==null?28.2180:$dbaddress->lat)}},
                        {{$dbaddress==null?94.7278:($dbaddress->lng==null?94.7278:$dbaddress->lng)}}
                        ], 7);

                    // layers
                    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    });

                    var myMarker = L.marker([
                        {{$dbaddress==null?28.2180:($dbaddress->lat==null?28.2180:$dbaddress->lat)}},
                        {{$dbaddress==null?94.7278:($dbaddress->lng==null?94.7278:$dbaddress->lng)}}
                    ])
                    // myMarker.addTo(map) will add the marker
                    myMarker.addTo(map)


                    myMarker.addTo(map);
                    osm.addTo(map);

                    function removemap(){
                        document.getElementById('viewmap').classList.add('hidden');
                    }
                    function applymap(){
                        document.getElementById('viewmap').classList.remove('hidden');
                    }

                </script>



            </div>




        </div>
    </div>

</div>



