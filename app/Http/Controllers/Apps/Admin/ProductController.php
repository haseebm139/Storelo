<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Menu;


use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;

use Validator;
use Illuminate\Validation\Rule;
use Str;
class ProductController extends Controller
{
    public function importProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx,csv', 

        ]);

        if($validator->fails()){
            return redirect()->back()->with(['type'=>'error','message'=>$validator->errors()->first()]);
        }
        Excel::import(new ProductImport,request()->file('file'));
         
        return redirect()
                ->back()
                ->with(['message'=>'Bulk Products Upload Successfully','type'=>'success']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('menu','category')->get();
        $menus = Menu::get();
        $categories = Category::get();
        return view('admin.product-management.products.index',compact('data','menus','categories'));
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
            'image' =>'required',
            'category_id' =>'required',
            'menu_id' =>'required',
            'price' =>'required',

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
            $slug = Str::slug($request->name);
            $uniqueSlug = $this->makeUniqueSlug($slug);
            $input['name'] = $request->name;
            $input['name_in_he'] = $request->name_in_he;
            $input['slug'] =$uniqueSlug;
            $input['category_id'] = $request->category_id;
            $input['menu_id'] = $request->menu_id;
            $input['price'] = $request->price;
            $data->update($input);

            return redirect()
            ->route('product-management.product.index')
            ->with(['message'=>'Updated Successfully','type'=>'success']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['type' => 'error', 'message' => 'Something went wrong']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data =  Product::with('menu','category')->find($id);
        $menus = Menu::get();
        $categories = Category::get();
        return view('admin.product-management.products.edit',compact('data','menus','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =  Product::with('menu','category')->find($id);
        $menus = Menu::get();
        $categories = Category::get();
        return view('admin.product-management.products.edit',compact('data','menus','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $data =  Product::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.products.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            if ($request->name != $data->name) {
                $slug = Str::slug($request->name);
                $uniqueSlug = $this->makeUniqueSlug($slug);
                $input['name'] = $request->name;
                $input['slug'] =$uniqueSlug;

            }
            if ($request->category_id != $data->category_id) {
                $input['category_id']  = $request->category_id;

            }
            if ($request->name_in_he != $data->name_in_he) {
                $input['name_in_he']  = $request->name_in_he;

            }
            if ($request->menu_id != $data->menu_id) {
                $input['menu_id']  = $request->menu_id;

            }
            if ($request->price != $data->price) {
                $input['price']  = $request->price;
            }
            if($request->hasFile('image'))
            {
                $img = time().$request->file('image')->getClientOriginalName();
                $file_path = "documents/menu/".$img;
                $request->image->move(public_path("documents/menu/"), $img);
                $input['image']  = $file_path;
            }

            if (isset($input)) {

                $data->update($input);
                return redirect()
                ->route('product-management.products.index')
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
            $data = Product::find($id);
            if (!isset($data)) {
                return redirect()->route('product-management.products.index')->with(['message'=>'Data Not Found','type'=>'error']);
            }
            $data->delete();
            return redirect()
                ->route('product-management.products.index')
                ->with(['message'=>'Deleted Successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>'Something went wrong','type'=>'error']);
        }
    }


    public function change_status(Request $request)
    {
        try {
            //code...
            $statusChange = Product::where('id',$request->id)->update(['status'=>$request->status]);
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

        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
