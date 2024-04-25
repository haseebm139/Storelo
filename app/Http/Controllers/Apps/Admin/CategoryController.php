<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::with('menu')->get();
        $menu = Menu::get();
        return view('admin.product-management.categories.index',compact('data','menu'));
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
            'name_in_he' => 'required',
            'menu_id' => 'required',

        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        try {

            $slug = Str::slug($request->name);
            $uniqueSlug = $this->makeUniqueSlug($slug);
            $input['name'] = $request->name;
            $input['name_in_he'] = $request->name_in_he;
            $input['slug'] =$uniqueSlug;
            $input['menu_id'] =$request->menu_id;


            Category::create(
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
        $data =  Category::with('menu')->find($id);
        $menu = Menu::get();
        return view('admin.product-management.categories.edit',compact('data','menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =  Category::find($id);
        $menu = Menu::get();
        return view('admin.product-management.categories.edit',compact('data','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $data =  Category::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.category.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            if ($request->name != $data->name) {
                $input['name']  = $request->name;
                $slug = Str::slug($request->name);
                $uniqueSlug = $this->makeUniqueSlug($slug);
                $input['slug'] =$uniqueSlug;
            }
            if ($request->name_in_he != $data->name_in_he) {
                $input['name_in_he']  = $request->name;

            }

            if ($request->menu_id != $data->menu_id) {
                $input['menu_id']  = $request->menu_id;
            }
            if (isset($input)) {

                $data->update($input);
                return redirect()
                ->route('product-management.category.index')
                ->with(['message'=>'Updated Successfully','type'=>'success']);
            }

            return redirect()->back();
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
            $data = Category::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.category.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('product-management.category.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Category::where('id',$request->id)->update(['status'=>$request->status]);
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

        while (Category::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
