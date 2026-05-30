<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NoteController extends Controller
{
    public function index(Request $request){
       $notes = $request->user()->notes()->get();
        return view('notes.index', ['notes' => $notes]);
    }

    public function create(){
        return view('notes.create');
    }

    public function store(CreateNoteRequest $request){
    
        $request->user()->notes()->create($request->validated());
        return redirect()->route('notes.index');
    }

    public function show(Note $note){
        if(!Gate::allows('view-notes', $note)){
            abort(403);
        }
        return view('notes.show', ['note' => $note]);
    }

    public function edit(Note $note){
         if(!Gate::allows('view-notes', $note)){
            abort(403);
        }
        return view('notes.edit', ['note' => $note]);
    }

    public function update(UpdateNoteRequest $request, Note $note){
         if(!Gate::allows('view-notes', $note)){
            abort(403);
        }
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return redirect()->route('notes.show', ['note' => $note]);
    }          
    
    public function destroy(Note $note){
         if(!Gate::allows('view-notes', $note)){
            abort(403);
        };
        $note->delete();

        return redirect()->route('notes.index');
    }
}
