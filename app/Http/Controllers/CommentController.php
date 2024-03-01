<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email|max:50',
                'comment' => 'required',
                'product_id' => 'required|exists:products,id',
            ],[
                'fullname.required' => 'Proporciona nombre completo.',
                'email.max' => 'Email con máximo 50 caracteres.',
                'comment.required' => 'Favor de escribir el mensaje.',
                'product_id.required' => 'El ID del producto es requerido.',
                'product_id.exists' => 'El ID del producto no es válido.',
            ]);

            $comment = new Comment();
            $comment->fullname = $request->input('fullname');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            $comment->product_id = $request->input('product_id'); 
            $comment->save();

            return redirect()->route('detailproduct', ['id' => $request->input('product_id')])->with('success', 'Your comment has been sent.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
