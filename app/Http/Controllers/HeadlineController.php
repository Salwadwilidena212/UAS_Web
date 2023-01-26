<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeadlineRequest;
use App\Http\Requests\UpdateHeadlineRequest;
use App\Models\Headline;

class HeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headlines = Headline::all();
        return view('headline', [
            'headlines' => $headlines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeadlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeadlineRequest $request)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
        } else {
            $image_path = 'images/no-image.jpeg';
        }
        Headline::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_path
        ]);
        return redirect('headline')->with('success', 'Successfully added headline!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function show(Headline $headline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function edit(Headline $headline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeadlineRequest  $request
     * @param  \App\Models\Headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeadlineRequest $request, Headline $headline)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_path
            ];
        } else {
            $data = [
                'title' => $request->title,
                'description' => $request->description,
            ];
        }

        Headline::find($headline->id)->update($data);
        return redirect('headline')->with('success', 'Successfully changed headline!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headline  $headline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headline $headline)
    {
        Headline::destroy($headline->id);
        return redirect('headline')->with('success', 'Successfully deleted headline!');
    }
}
