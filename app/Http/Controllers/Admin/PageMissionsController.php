<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageMissionsItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageMissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        $page_missions = PageMissionsItem::where('id',1)->first();
        return view('admin.page_setting.page_missions', compact('page_missions'));
    }

    public function update(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['detail'] = $request->input('detail');
        $data['status'] = $request->input('status');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageMissionsItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'Missions Page Content is updated successfully!');

    }

}
