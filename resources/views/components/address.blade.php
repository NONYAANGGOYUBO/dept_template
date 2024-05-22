<div class="bg-white bg-opacity-25 p-6 lg:p-8">
    <a href="{{route('dashboard')}}" class="">
        <i class="fa-solid fa-arrow-left-long text-xl py-2 text-blue-500"></i>
    </a>
    <div class="">

        <h2 class="font-semibold text-xl mb-2">Edit Address</h2>

            @if (session('success'))

                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 " role="alert">  {{--dark:bg-gray-800 dark:text-green-400  can be use for dark mode--}}
                    <span class="font-medium">{{session('success')}}</span>
                </div>

            @endif

        <div>
            <form action="{{route('editaddress')}}" class="w-full bg-white p-5 rounded-lg " method="POST">
                @csrf
                <div class="grid lg:grid-cols-2 grid-cols-1 pb-5">
                    <div class="flex flex-col p-3">
                        <label for="deptname" class="text-sm mt-5 mb-2 font-bold">Department Name</label>
                        <input value="{{$dbaddress==null?"no address available":($dbaddress->deptname==null?"no data":$dbaddress->deptname)}}" type="text" name="deptname" placeholder="Enter Department name or title" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('deptname')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="street" class="text-sm mt-5 mb-2 font-bold">Street</label>
                        <input value="{{$dbaddress==null?"no address available":($dbaddress->street==null?"no data":$dbaddress->street)}}" type="text" name="street" placeholder="street, area, colony name" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('street')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col p-3">
                        <label for="city" class="text-sm mt-3 mb-2 font-bold">City</label>
                        <input value="{{$dbaddress==null?"no address available":($dbaddress->city==null?"no data":$dbaddress->city)}}" type="text" name="city" placeholder="Enter city name" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('city')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="state" class="text-sm mt-3 mb-2 font-bold">State</label>
                        <select name="state" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                            <option class="text-md uppercase font-bold text-gray-400" value="" selected>Select state</option>
                            <option class="text-md uppercase font-bold text-gray-400" value="Arunachal Pradesh" {{$dbaddress==null?"":($dbaddress->state == 'Arunachal Pradesh' ? 'selected' : '')}}>Arunachal Pradesh</option>
                            <option class="text-md uppercase font-bold text-gray-400" value="Assam" {{$dbaddress==null?"":($dbaddress->state == 'Assam' ? 'selected' : '')}}>Assam</option>
                            <option class="text-md uppercase font-bold text-gray-400" value="Meghalaya" {{$dbaddress==null?"":($dbaddress->state == 'Meghaalaya' ? 'selected' : '')}}>Meghalaya</option>
                            <option class="text-md uppercase font-bold text-gray-400" value="Delhi" {{$dbaddress==null?"":($dbaddress->state == 'Delhi' ? 'selected' : '')}}>Delhi</option>

                        </select>

                        @error('state')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="district" class="text-sm mt-3 mb-2 font-bold">District</label>
                        <select name="district" id="" class="border border-gray-300 rounded-md p-2 text-sm">
                            <option value="" selected>Select district</option>
                            <option value="TAWANG" {{$dbaddress==null?"":($dbaddress->district == 'Assam' ? 'selected' : '')}}>TAWANG</option>
                            <option value="WEST KAMENG" {{$dbaddress==null?"":($dbaddress->district == 'WEST KAMENG' ? 'selected' : '')}}>WEST KAMENG</option>
                            <option value="EAST KAMENG" {{$dbaddress==null?"":($dbaddress->district == 'EAST KAMENG' ? 'selected' : '')}}>EAST KAMENG</option>
                            <option value="PAPUM PARE" {{$dbaddress==null?"":($dbaddress->district == 'PAPUM PARE' ? 'selected' : '')}}>PAPUM PARE</option>
                            <option value="LOWER SUBANSIRI" {{$dbaddress==null?"":($dbaddress->district == 'LOWER SUBANSIRI' ? 'selected' : '')}}>LOWER SUBANSIRI</option>
                            <option value="UPPER SUBANSIRI" {{$dbaddress==null?"":($dbaddress->district == 'UPPER SUBANSIRI' ? 'selected' : '')}}>UPPER SUBANSIRI</option>
                            <option value="WEST SIANG" {{$dbaddress==null?"":($dbaddress->district == 'WEST SIANG' ? 'selected' : '')}}>WEST SIANG</option>
                            <option value="EAST SIANG" {{$dbaddress==null?"":($dbaddress->district == 'EAST SIANG' ? 'selected' : '')}}>EAST SIANG</option>
                            <option value="UPPER SIANG" {{$dbaddress==null?"":($dbaddress->district == 'UPPER SIANG' ? 'selected' : '')}}>UPPER SIANG</option>
                            <option value="DIBANG VALLEY" {{$dbaddress==null?"":($dbaddress->district == 'DIBANG VALLEY' ? 'selected' : '')}}>DIBANG VALLEY</option>
                            <option value="LOHIT" {{$dbaddress==null?"":($dbaddress->district == 'LOHIT' ? 'selected' : '')}}>LOHIT</option>
                            <option value="CHANGLANG" {{$dbaddress==null?"":($dbaddress->district == 'CHANGLANG' ? 'selected' : '')}}>CHANGLANG</option>
                            <option value="TIRAP" {{$dbaddress==null?"":($dbaddress->district == 'TIRAP' ? 'selected' : '')}}>TIRAP</option>
                            <option value="KURUNG KUMEY" {{$dbaddress==null?"":($dbaddress->district == 'KURUNG KUMEY' ? 'selected' : '')}}>KURUNG KUMEY</option>
                            <option value="LOWER DIBANG VALLEY" {{$dbaddress==null?"":($dbaddress->district == 'LOWER DEBANG VALLEY' ? 'selected' : '')}}>LOWER DEBANG VALLEY</option>
                            <option value="ANJAW" {{$dbaddress==null?"":($dbaddress->district == 'ANJAW' ? 'selected' : '')}}>ANJAW</option>
                            <option value="LONGDING" {{$dbaddress==null?"":($dbaddress->district == 'LONGDING' ? 'selected' : '')}}>LONGDING</option>
                            <option value="NAMSAI" {{$dbaddress==null?"":($dbaddress->district == 'NAMSAI' ? 'selected' : '')}}>NAMSAI</option>
                            <option value="KRA DADI" {{$dbaddress==null?"":($dbaddress->district == 'KRA DADI' ? 'selected' : '')}}>KRA DADI</option>
                            <option value="SIANG" {{$dbaddress==null?"":($dbaddress->district == 'SIANG' ? 'selected' : '')}}>SIANG</option>
                            <option value="LOWER SIANG" {{$dbaddress==null?"":($dbaddress->district == 'LOWER SIANG' ? 'selected' : '')}}>LOWER SIANG</option>
                            <option value="KAMLE" {{$dbaddress==null?"":($dbaddress->district == 'KAMLE' ? 'selected' : '')}}>KAMLE</option>
                            <option value="CAPITAL COMPLEX ITANAGAR" {{$dbaddress==null?"":($dbaddress->district == 'CAPITAL COMPLEX ITANAGAR' ? 'selected' : '')}}>CAPITAL COMPLEX ITANAGAR</option>
                            <option value="PAKKE KESSANG" {{$dbaddress==null?"":($dbaddress->district == 'PAKE KESANG' ? 'selected' : '')}}>PAKE KESSANG</option>
                            <option value="SHI YOMI" {{$dbaddress==null?"":($dbaddress->district == 'SHI YOMI' ? 'selected' : '')}}>SHI YOMI</option>
                            <option value="LEPA RADA" {{$dbaddress==null?"":($dbaddress->district == 'LEPA RADA' ? 'selected' : '')}}>LEPA RADA</option>
                        </select>
                        @error('district')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col p-3">
                        <label for="pincode" class="text-sm mt-3 mb-2 font-bold">Pin Code</label>
                        <input value="{{$dbaddress==null?"no address available":($dbaddress->pincode==null?"no data":$dbaddress->pincode)}}" type="text" name="pincode"  placeholder="Enter Pincode" class="border border-gray-300 rounded-md p-2 text-sm">
                        @error('pincode')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>


                </div>

                <hr>

                <div wire:ignore class="h-80 w-full z-50" id="map">
                    leaflet
                </div>

                <div class="p-3 pb-5">

                    <input type="number" step="0.00000001" name="lat"  id="latitude" class="" value="{{$dbaddress==null?"no address available":($dbaddress->lat==null?"no data":$dbaddress->lat)}}">
                    <input type="number" step="0.00000001" name="lng" id="longitude" class="" value="{{$dbaddress==null?"no address available":($dbaddress->lng==null?"no data":$dbaddress->lng)}}">

                </div>
                <div class="p-3 pb-5">

                    <button class=" inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent
                    rounded-md font-semibold text-xs text-white uppercase tracking-widest
                hover:bg-gray-700 focus:bg-gray-700">save</button>
                    <div class=" inline-flex items-center px-4 py-2
                    rounded-md font-bold text-xs text-black uppercase tracking-widest border
                hover:shadow-xl cursor-pointer">cancel</div>
                </div>
            </form>

            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


            <script>


                var coordinates;


                var map = L.map('map').setView([
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



                map.on('click',function(e) {
                    myMarker.setLatLng(e.latlng)

                    document.getElementById('latitude').value = e.latlng.lat.toFixed(8);
                    document.getElementById('longitude').value = e.latlng.lng.toFixed(8);
                    // var lat = e.latlng.lat.toFixed(8);
                    // $this.address.lat = lat;

                    let lat = e.latlng.lat.toFixed(8); // Replace with your desired value

                    // Use Livewire's wire method to update the Livewire component's property




                });


                myMarker.addTo(map);
                osm.addTo(map);



            </script>

        </div>


    </div>
</div>
