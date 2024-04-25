<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.product-management.slider.index',compact('data'));
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
            'title' => 'required',
            'title_in_he' => 'required',
            'image' =>'required',
            'description' =>'required',
            'description_in_he' =>'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/products/".$img;
                $request->image->move(public_path("documents/products/"), $img);
                $input['image'] = $file_path;
            }

            $input['title'] = $request->title;
            $input['title_in_he'] = $request->title_in_he;
            $input['description'] =$request->description;
            $input['description_in_he'] =$request->description_in_he;
            Slider::create(
                $input

            );
            return redirect()->back()->with(['type'=>'success','message'=>"Data Store Successfully"]);
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
        $data =  Slider::find($id);

        return view('admin.product-management.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data =  Slider::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.slider.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            if ($request->title) {
                $input['title']  = $request->title;
            }
            if ($request->description) {
                $input['description']  = $request->description;
            }
            if ($request->description_in_he) {
                $input['description_in_he']  = $request->description_in_he;
            }
            if ($request->title_in_he) {
                $input['title_in_he']  = $request->title_in_he;
            }

            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/products/".$img;
                $request->image->move(public_path("documents/products/"), $img);
                $input['image'] = $file_path;
            }
            $data->update($input);

            return redirect()
            ->route('product-management.slider.index')
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
        try {
            $data = Slider::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.slider.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('product-management.slider.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Slider::where('id',$request->id)->update(['status'=>$request->status]);
            if($statusChange)
            {
                return array('message'=>'Status has been changed succ essfully','type'=>'success');
            }else{
                return array('message'=>'Status has not changed please try again','type'=>'error');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }

    }
}
