<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();

        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create($request->all());

        return redirect()->route('comments.index')->with('success', 'Comentario creado exitosamente.');
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment->update($request->all());

        return redirect()->route('comments.index')->with('success', 'Comentario actualizado exitosamente.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')->with('success', 'Comentario eliminado exitosamente.');
    }

    public function show($id)
{
    $comment = Comment::find($id);

    if (!$comment) {
        abort(404); 
    }

    
    return view('comments.show', ['comment' => $comment]);
}


public function generatePdf()
{
    $comments = Comment::all();

    $dompdf = new Dompdf();

    $html = view('pdf.comments', compact('comments'));

    $dompdf->loadHtml($html);

    $dompdf->render();

    $filename = 'comments.pdf';

    return $dompdf->stream($filename);
}
}