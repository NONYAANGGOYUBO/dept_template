

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
    <div x-data = "{modal:false}" class="">
        <h2 class="font-semibold text-xl mb-2">About Department</h2>

        <textarea disabled class="w-full rounded-md border-gray-300 border-2" name="" id=""  rows="5">{{$dbabout}}
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
                        <div x-show="showMessage" class="p-2 border border-green-500 rounded-md mb-2 bg-green-200/50 text-center">
                            <span  class="text-green-500 text-sm font-semibold">{{session('success')}}</span>
                        </div>
                    @endif
                </div>
                <form class="" action="" wire:submit="editabout">

                    <textarea class="w-full rounded-md border-gray-300 border-2" name="about" wire:model="about" id="" cols="30" rows="10"></textarea>
                    @error('about')
                        <span class="text-red-500 text-sm font-semibold">{{$message}}</span>
                    @enderror
                    <br>
                    <button @click = "modal = true"  class="inline-flex items-center px-4 py-2 bg-cyan-700 border border-transparent
                    rounded-md font-semibold text-xs text-white uppercase tracking-widest
                  hover:bg-gray-700 focus:bg-gray-700">save</button>
                    <div @click = "modal = false" class="inline-flex items-center px-4 py-2  border border-red-700
                    rounded-md font-bold text-xs text-red-700 uppercase tracking-widest
                  hover:bg-red-700 hover:text-white">cancel</div>
                </form>
            </div>
            </div>

        </div>
        <div>hello


        </div>
    </div>

</div>



