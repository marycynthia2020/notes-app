<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $notes = $request->user()->notes()->get();

        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(CreateNoteRequest $request)
    {

        $request->user()->notes()->create($request->validated());

        return redirect()->route('notes.index');
    }

    public function show(Request $request, Note $note)
    {
        if ($request->user()->can('update', $note)) {
            return view('notes.show', ['note' => $note]);
        }
        abort(404);
    }

    public function edit(Request $request, Note $note)
    {
        if ($request->user()->can('update', $note)) {
            return view('notes.edit', ['note' => $note]);
        }
        abort(404);
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {

        if ($request->user()->can('update', $note)) {
            $note->title = $request->title;
            $note->description = $request->description;
            $note->save();

            return redirect()->route('notes.show', ['note' => $note]);
        }
        abort(403);
    }

    public function destroy(Request $request, Note $note)
    {

        Gate::authorize('update', $note);
        $note->delete();
        return redirect()->route('notes.index');
    }
}
