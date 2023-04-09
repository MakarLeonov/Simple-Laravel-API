<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AutoMark;
use App\Http\Resources\AutoMarksResource;
use App\Http\Requests\AutoMarksRequest;

class AutoMarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AutoMarksResource::collection(AutoMark::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutoMarksRequest $request)
    {
        $new_mark = AutoMark::create($request->validated());

        return new AutoMarksResource($new_mark);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new AutoMarksResource(AutoMark::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AutoMarksRequest $request, AutoMark $mark)
    {
        $mark->update($request->validated());

        return new AutoMarksResource($mark);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutoMark $mark)
    {
        $mark->delete();

        return "The entry was successfully deleted";
    }
}
