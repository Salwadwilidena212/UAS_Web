<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('feature', [
            'features' => $features
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
     * @param  \App\Http\Requests\StoreFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeatureRequest $request)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
        } else {
            $image_path = 'images/no-image.jpeg';
        }
        Feature::create([
            'image' => $image_path
        ]);
        return redirect('feature')->with('success', 'Successfully added feature!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeatureRequest  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
            $data = [
                'image' => $image_path
            ];
            Feature::find($feature->id)->update($data);
        }

        return redirect('feature')->with('success', 'Successfully changed feature!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        Feature::destroy($feature->id);
        return redirect('feature')->with('success', 'Successfully deleted feature!!');
    }
}
