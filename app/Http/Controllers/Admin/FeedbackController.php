<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        return view('admin.pages.website.feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.pages.website.feedback.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token', 'image']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_feedback.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/feedback'), $fileName);
            $data['image'] = 'uploads/feedback/' . $fileName;
        }

        Feedback::create($data);

        return redirect()->route('admin.feedback.index')->with('success', 'Feedback created successfully.');
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.pages.website.feedback.edit', compact('feedback'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $data = $request->except(['_token', '_method', 'image']);

        if ($request->hasFile('image')) {
            if ($feedback->image && file_exists(public_path($feedback->image))) {
                unlink(public_path($feedback->image));
            }
            $file = $request->file('image');
            $fileName = time() . '_feedback.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/feedback'), $fileName);
            $data['image'] = 'uploads/feedback/' . $fileName;
        }

        $feedback->update($data);

        return redirect()->route('admin.feedback.index')->with('success', 'Feedback updated successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        if ($feedback->image && file_exists(public_path($feedback->image))) {
            unlink(public_path($feedback->image));
        }

        $feedback->delete();

        return redirect()->route('admin.feedback.index')->with('success', 'Feedback deleted successfully.');
    }
}
