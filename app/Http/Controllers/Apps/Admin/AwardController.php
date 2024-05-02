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
        //
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
            if($request->hasFile('logo'))
            {
                $img = time().$request->file('logo')->getClientOriginalName();
                $file_path = "documents/logo/".$img;
                $request->logo->move(public_path("documents/logo/"), $img);
                $input['logo']  = $file_path;
            }
            if ($request->working_hours) {
                $input['working_hours']  = $request->working_hours;
            }
            if ($request->working_hours_in_hebrew) {
                $input['working_hours_in_hebrew']  = $request->working_hours_in_hebrew;
            }
            if ($request->address) {
                $input['address']  = $request->address;
            }
            if ($request->address_in_hebrew) {
                $input['address_in_hebrew']  = $request->address_in_hebrew;
            }
            if ($request->email) {
                $input['email']  = $request->email;
            }
            if ($request->contact) {
                $input['contact']  = $request->contact;
            }
            if ($request->website_url) {
                $input['website_url']  = $request->website_url;
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
