<?php

namespace App\Http\Controllers;
use App\Models\MailingList;
class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        $data = MailingList::get();
        return view('pages.dashboards.index',compact('data'));
    }


}
