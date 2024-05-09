{{-- <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />
    <h2>Dashboard</h2>

</div> --}}


<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
        <div x-data = "{modal:false}" class="">
            <h2 class="font-semibold text-xl mb-2">About Department</h2>

            <textarea disabled class="w-full rounded-md border-gray-300 border-2" name="" id=""  rows="5">{{$about}}
            </textarea>


            <button @click ="modal=true" class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-cyan-700 focus:ring-offset-2 transition ease-in-out duration-150">edit</button>
            <div x-show="modal" class="p-16 bg-gray-100 fixed top-0 left-0 bottom-0 z-10 bg-slate-500/5 flex items-center justify-center w-full">
                <div class="w-full md:w-[80%] bg-white p-5 rounded-lg shadow-3xl" @click.outside = "modal = false">
                    <h1 class="text-center font-semibold text-xl p-2">Edit About Department</h1>
                    <form class="" action="{{route('editabout')}}" method="post">
                        @csrf
                        @if ($about===null)
                        <textarea class="w-full rounded-md border-gray-300 border-2" name="about" id="" cols="30" rows="10">Empty</textarea>
                        @else
                        <textarea class="w-full rounded-md border-gray-300 border-2" name="about" id="" cols="30" rows="10">{{$about}}</textarea>
                        @endif

                        @error('about')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                        <button @click = "modal = true"   type="submit" class="rounded-md bg-green-600 px-4 py-2 text-white hover:bg-green-950">save</button>
                        <div @click = "modal = false" class="rounded-md bg-red-600 px-4 py-2 text-white hover:bg-red-950 inline-block">cancel</div>
                    </form>
                </div>

            </div>


        </div>
</div>

