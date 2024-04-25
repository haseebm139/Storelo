<?php

namespace App\Http\Controllers\Apps\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use Validator;
use Illuminate\Validation\Rule;
use Str;
class WebsiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WebsiteSetting::get();
        return view('admin.website-management.website.index',compact('data'));
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
        $data = WebsiteSetting::first();
        return view('admin.website-management.website.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $data =  WebsiteSetting::find($id);
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
            ->route('website-management.website.index')
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
