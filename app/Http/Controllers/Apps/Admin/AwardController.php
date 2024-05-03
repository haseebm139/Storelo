<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Award::get();
        return view('admin.website-management.awards.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $validator = Validator::make($request->all(), [
            'bg_image' => 'required', 
            'image' => 'required', 
            'description' => 'required', 
            'description_in_he' => 'required', 

        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/awards/".$img;
                $request->image->move(public_path("documents/awards/"), $img);
                $input['image'] = $file_path;
            }
            if($request->hasFile('bg_image'))
            {
                $img = time().$request->file('bg_image')->getClientOriginalName();
                $file_path = "documents/awards/".$img;
                $request->bg_image->move(public_path("documents/awards/"), $img);
                $input['bg_image'] = $file_path;
            }
            $input['description'] = $request->description;
            $input['description_in_he'] = $request->description_in_he;

            Award::create($input);
            return redirect()
            ->route('product-management.awards.index')
            ->with(['message'=>'Create Successfully','type'=>'success']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Something went wrong']);
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Award::first();
        return view('admin.website-management.awards.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $data =  Award::find($id);
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/awards/".$img;
                $request->image->move(public_path("documents/awards/"), $img);
                $input['image']  = $file_path;
            }
            if($request->hasFile('bg_image'))
            {
                $img = time().$request->file('bg_image')->getClientOriginalName();
                $file_path = "documents/awards/".$img;
                $request->bg_image->move(public_path("documents/awards/"), $img);
                $input['bg_image']  = $file_path;
            }
            if ($request->description_in_he) {
                $input['description_in_he']  = $request->description_in_he;
            }
            if ($request->description) {
                $input['description']  = $request->description;
            }
             
            $data->update($input);

            return redirect()
            ->route('website-management.awards.index')
            ->with(['message'=>'Updated Successfully','type'=>'success']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Something went wrong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
