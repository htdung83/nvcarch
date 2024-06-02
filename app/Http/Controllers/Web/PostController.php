<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        protected PostRepository $repository
    ) {
    }

    public function show(string $slug)
    {
        $needle = Post::whereSlug($slug)->firstOrFail();

        $previousPosts = $this->repository->findPostsBefore($needle);

        return view('web.posts.show', compact('needle', 'previousPosts'));
    }
}
