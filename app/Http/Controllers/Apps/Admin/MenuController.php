<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $data = Menu::all();
        return view('admin.product-management.menu.index',compact('data'));
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
            'name' => 'required',
            'image' =>'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/menu/".$img;
                $request->image->move(public_path("documents/menu/"), $img);
            }
            $slug = Str::slug($request->name);
            $uniqueSlug = $this->makeUniqueSlug($slug);
            $input['name'] = $request->name;
            $input['slug'] =$uniqueSlug;
            $input['image'] = $file_path;

            Menu::create(
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
        $data =  Menu::find($id);
        return view('admin.product-management.menu.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =  Menu::find($id);

            return view('admin.product-management.menu.edit',compact('data'));
        }

    /**categories
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data =  Menu::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.menu.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            if ($request->name) {
                $input['name']  = $request->name;
            }
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/menu/".$img;
                $request->image->move(public_path("documents/menu/"), $img);
                $input['image']  = $file_path;
            }
            $data->update($input);

            return redirect()
            ->route('product-management.menu.index')
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
            $data = Menu::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.menu.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('product-management.menu.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Menu::where('id',$request->id)->update(['status'=>$request->status]);
            if($statusChange)
            {
                return array('message'=>'Status has been changed successfully','type'=>'success');
            }else{
                return array('message'=>'Status has not changed please try again','type'=>'error');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }

    }

    private function makeUniqueSlug($slug)
    {
        $uniqueSlug = $slug;
        $counter = 2;

        while (Menu::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
