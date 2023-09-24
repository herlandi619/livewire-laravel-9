<div>
    <div class="my-11 text-center">
        {{ $body }}
    </div>
    <div>
        <textarea wire:model="body" placeholder="Input Text Here . . . ."  rows="3" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "></textarea>
    <div class="flex justify-end">
        <button wire:click="createPost" class="bg-slate-500 text-white p-3 m-2 rounded-md shadow-md hover:bg-slate-400 hover:scale-105 transition ease-in duration-200 ">Save</button>
    </div>
    </div>
</div>
