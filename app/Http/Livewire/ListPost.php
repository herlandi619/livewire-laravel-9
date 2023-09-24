<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
    protected $listeners = [ 'refreshPage' => '$refresh'];

    public $updateStateId = 0;
    public $body = 0;

    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.list-post',[
            "posts" => $posts
        ]);
    }

    public function showUpdateForm($postId)
    {   
        $post = Post::find($postId);
        $this->body = $post->body;
        $this->updateStateId = $postId;
    }

    public function update($postId)
    {
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();

        $this->updateStateId = "";

    }

    public function delete($postId)
    {   
        $post = Post::find($postId);
        $post->delete();
    }
}
