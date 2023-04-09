<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Http\Resources\PromotionResource;
use App\Http\Requests\PromotionRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PromotionResource::collection(Promotion::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionRequest $request)
    {
        $new_promotion = Promotion::create($request->validated());

        return new PromotionResource($new_promotion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PromotionResource(Promotion::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromotionRequest $request, Promotion $promo)
    {
        $promo->update($request->validated());

        return new PromotionResource($promo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promo)
    {
        $promo->delete();

        return Response::make("", 204);
    }
}
