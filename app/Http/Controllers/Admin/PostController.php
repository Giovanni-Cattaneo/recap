<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // logica per visualizzare la lista dei post
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // logica per visualizzare il form di creazione del post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // logica per salvare un nuovo post
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // logica per visualizzare un post specifico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // logica per visualizzare il form di modifica del post
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // logica per aggiornare un post specifico
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // logica per eliminare un post specifico
    }
}
