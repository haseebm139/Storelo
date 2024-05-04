<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Video::all();
        return view('admin.website-management.video.index',compact('data'));
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
            'path' => 'required|file|max:20480', 

        ]);
        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            if($request->hasFile('path'))
            {
                $img = time().$request->file('path')->getClientOriginalName();
                $file_path = "documents/videos/".$img;
                $request->path->move(public_path("documents/videos/"), $img);
                $input['path'] = $file_path;
            }

            
            Video::create(
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
        $data =  Video::find($id);

        return view('admin.website-management.video.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =  Video::find($id);

        return view('admin.website-management.video.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [             
            'path' => 'required|file|max:20480', 

        ]);
        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            $data =  Video::find($id);
             

            if($request->hasFile('path'))
            {
                $img = time().$request->file('path')->getClientOriginalName();
                $file_path = "documents/videos/".$img;
                $request->path->move(public_path("documents/videos/"), $img);
                $input['path'] = $file_path;
            }
            $data->update($input);

            return redirect()
            ->route('website-management.video.index')
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
            $data = Video::find($id);
            if (!isset($data)) {
                return redirect()->route('website-management.video.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('website-management.video.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Video::where('id',$request->id)->update(['status'=>$request->status]);
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
