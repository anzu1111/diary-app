<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function saveContent(Request $request)
    {
        $validated = $request->validated([
            'content' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        session([
            'post.content' => $validated['content'],
        ]);

        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store(
                'temp/posts',
                'public'
            );

            session([
                'post.photo_path' => $path,
            ]);
        }

        return redirect()->route('post.emotion');
    }

    public function saveEmotion(Request $request)
    {
        $validated = $request->validated([
            'emotion' => ['required', 'string'],
        ]);

        session([
            'post.emotion' => $validated['emotion'],
        ]);

        return redirect()->route('post.tags');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tags' => ['nullable', 'array', 'max:3'],
            'tags.*' => ['string', 'max:50'],
        ]);

        $photoPath = session('post.photo_path');

        if (
            $photoPath &&
            Storage::disk('public')->exists($photoPath)
        ) {
            $fileName = basename($photoPath);

            $newPath = 'posts/' . $fileName;

            Storage::disk('public')->move(
                $photoPath,
                $newPath
            );

            $photoPath = $newPath;
        }

        $post = Post::create([
            'user_id' => auth()->id(),
            'content' => session('post.content'),
            'photo_path' => $photoPath,
            'emotion' => session('post.emotion'),
        ]);

        $tagIds = [];

        foreach ($validated['tags'] ?? [] as $tagName) {
            $tag = Tag::firstOrCreate(
                [
                    'user_id' => auth()->id(),
                    'name' => $tagName,
                ]
            );

            $tagIds[] = $tag->id;
        }

        $post->tags()->attach($tagIds);

        session()->forget('post');
        
        return redirect(route('home'));
    }
}
