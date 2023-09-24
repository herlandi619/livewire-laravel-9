<div>

    {{ $updateStateId }}
    <h1 class="text-2xl text-center text-slate-400">List Post</h1>
    @foreach ($posts as $post)
    <ul class="p-3 mt-3 bg-slate-400 text-white">
        <li>Created : {{ $post->user->name }} <span>{{ $post->created_at->diffForHumans() }}</span>. 
        <button wire:click="showUpdateForm({{ $post->id }})" class="bg-green-500 p-3 rounded-md shadow hover:bg-green-400 hover:scale-105 transition-all ease-in-out duration-300">Edit</button>
        <button wire:click="delete({{ $post->id }})" onclick="return confirm('Anda Yakin?') || event.stopImmediatePropagation()" class="bg-red-500 p-3 rounded-md shadow hover:bg-red-400 hover:scale-105 transition-all ease-in-out duration-300">Delete</button>
        </li>
        
        <li>
            @if ($updateStateId !== $post->id)
                Body : {{ $post->body }}
            @endif

            @if ($updateStateId === $post->id)
                <textarea wire:model="body" placeholder="Input Text Here . . . ."  rows="3" class="shadow appearance-none border rounded w-full  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "></textarea>

                <button wire:click="update({{ $post->id }})" class="bg-slate-500 text-white p-3 m-2 rounded-md shadow-md hover:bg-slate-400 hover:scale-105 transition ease-in duration-200 ">Save</button>

            @endif
        </li>
    </ul>
    @endforeach
</div>
