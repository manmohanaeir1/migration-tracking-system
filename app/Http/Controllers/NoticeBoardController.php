<?php

namespace App\Http\Controllers;

use App\Models\NoticeBoard;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{

    public function index()
    {
        // Fetch all notes
        $notes = NoticeBoard::all();

        return view('note.index', compact('notes'));
    }


    public function create()
    {
        return view('note.create');
    }


    public function store(Request $request)
    {
        if (\Auth::user()->can('create note')) {
            $validator = \Validator::make(
                $request->all(), [
                'title' => 'required',
                'description' => 'required',
            ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            if (!empty($request->attachment)) {
                $noteFilenameWithExt = $request->file('attachment')->getClientOriginalName();
                $noteFilename = pathinfo($noteFilenameWithExt, PATHINFO_FILENAME);
                $noteExtension = $request->file('attachment')->getClientOriginalExtension();
                $noteFileName = $noteFilename . '_' . time() . '.' . $noteExtension;

                $dir = storage_path('upload/applicant/attachment');
                $image_path = $dir . $noteFilenameWithExt;


                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $request->file('attachment')->storeAs('upload/applicant/attachment/', $noteFileName);
            }

            $note = new NoticeBoard();
            $note->title = $request->title;
            $note->description = $request->description;
            $note->attachment = !empty($request->attachment) ? $noteFileName : '';
            $note->parent_id = \Auth::user()->id;
            $note->save();

            return redirect()->back()->with('success', __('Note successfully created.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }


    public function show(NoticeBoard $noticeBoard)
    {
        //
    }


    public function edit($id)
    {
        if (\Auth::user()->can('edit note')) {
            $note = NoticeBoard::find($id);

            return view('note.edit', compact('note'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }


    public function update(Request $request, $id)
    {
        if (\Auth::user()->can('edit note')) {
            $validator = \Validator::make(
                $request->all(), [
                'title' => 'required',
                'description' => 'required',
            ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            $note = NoticeBoard::find($id);
            if (!empty($request->attachment)) {
                $noteFilenameWithExt = $request->file('attachment')->getClientOriginalName();
                $noteFilename = pathinfo($noteFilenameWithExt, PATHINFO_FILENAME);
                $noteExtension = $request->file('attachment')->getClientOriginalExtension();
                $noteFileName = $noteFilename . '_' . time() . '.' . $noteExtension;

                $dir = storage_path('upload/applicant/attachment');

                $image_path = $dir . $noteFilenameWithExt;

                if (!empty($note->attachment)) {

                    unlink($dir . '/' . $note->attachment);
                }


                if (!file_exists($dir)) {
                    mkdir($dir, 0777, true);
                }
                $request->file('attachment')->storeAs('upload/applicant/attachment/', $noteFileName);
                $note->attachment = !empty($request->attachment) ? $noteFileName : '';
            }


            $note->title = $request->title;
            $note->description = $request->description;

            $note->save();

            return redirect()->back()->with('success', __('Note successfully updated.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }


    public function destroy($id)
    {
        if (\Auth::user()->can('delete note')) {
            $note = NoticeBoard::find($id);
            $dir = storage_path('upload/applicant/attachment');
            if ($note->attachment) {
                unlink($dir . '/' . $note->attachment);
            }

            $note->delete();

            return redirect()->back()->with('success', 'Note successfully deleted.');
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }
}
