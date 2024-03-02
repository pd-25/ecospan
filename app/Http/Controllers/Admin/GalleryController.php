<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : view
    {
        return view('admin.galleries.list', ['galleries' => Gallery::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : view
    {
        return view('admin.galleries.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $gallery = new Gallery;
            $gallery->image = $request->image;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().rand(0000, 9999).'.'.$image->getClientOriginalExtension();
                $gallery->image = 'storage/'.$image->storeAs('galleries', $imageName, 'public');
            }

            $gallery->save();
            session()->flash('alert-success', 'New Gallery Created successfully!');

            return redirect()->intended(route('admin.galleries.index'));
        } catch (Exception $e) {
            session()->flash('alert danger', $e->getMessage());
         }

         return redirect()->intended(route('admin.galleries.create'))->withInput();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery) : View
    {
        return view('admin.galleries.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery) : RedirectResponse
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        try {

            if ($request->hasFile('image')) {
                $oldImage = $gallery->image;
                $image = $request->file('image');
                $imageName = time().rand(0000, 9999).'.'.$image->getClientOriginalExtension();
                $gallery->image = 'storage/'.$image->storeAs('galleries', $imageName, 'public');

                if (isset($oldImage) && File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $gallery->update();
            session()->flash('alert-success', 'Gallery updated successfully!');

            return redirect()->intended(route('admin.galleries.index'));
        } catch (Exception $e) {
            session()->flash('alert danger', $e->getMessage());
         }

        return redirect()->intended(route('admin.galleries.edit', ['gallery' => $gallery->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Gallery $gallery) : RedirectResponse
    {
        try {
            $gallery->delete();
            $oldImage = $gallery->image;
            if (isset($oldImage) && File::exists($oldImage)) {
                File::delete($oldImage);
            }

            session()->flash('alert-success','Gallery Deleted Successfully');
        } catch(Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.galleries.index');
    }
}
