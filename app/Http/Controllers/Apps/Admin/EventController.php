<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Event::all();
        return view('admin.product-management.events.index',compact('data'));
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
            'image' =>'required',
            'description' =>'required',

        ]);

        // return $request->all();
        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/events/".$img;
                $request->image->move(public_path("documents/events/"), $img);
                $input['image'] = $file_path;
            }

            $input['title'] = $request->title;
            $input['description'] =$request->description;

            Event::create(
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
        $data =  Event::find($id);

        return view('admin.product-management.events.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data =  Event::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.events.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            if ($request->title) {
                $input['title']  = $request->title;
            }
            if ($request->description) {
                $input['description']  = $request->description;
            }
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/events/".$img;
                $request->image->move(public_path("documents/events/"), $img);
                $input['image'] = $file_path;
            }
            $data->update($input);

            return redirect()
            ->route('product-management.events.index')
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
            $data = Event::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.events.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('product-management.events.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Event::where('id',$request->id)->update(['status'=>$request->status]);
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
