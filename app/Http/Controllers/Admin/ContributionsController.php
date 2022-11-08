<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\EA_Indemnisations;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ContributionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $contributions = EA_Indemnisations::all();
        return view('admin.contributions.index', compact('contributions'));
    }
//
//    public function create()
//    {
//        return view('admin.etablissementdecredits.create');
//    }
//
//    public function store(Request $request)
//    {
//        $etablissementdecredits = new etablissementdecredits();
//        $data = $request->only($etablissementdecredits->getFillable());
//
//        $request->validate([
//            'raison sociale' => 'required|unique:etablissementdecredits',
//            'slug' => 'unique:etablissementdecredits',
//            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
//
//
//        ]);
//
//        if(empty($data['slug'])) {
//            $data['slug'] = Str::slug($request->etablissementdecredits);
//        }
//
//        $statement = DB::select("SHOW TABLE STATUS LIKE 'etablissementdecredits'");
//        $ai_id = $statement[0]->Auto_increment;
//        $ext = $request->file('logo')->extension();
//        $final_name = 'raison sociale-'.$ai_id.'.'.$ext;
//        $request->file('logo')->move(public_path('uploads/'), $final_name);
//        $data['logo'] = $final_name;
//
//        $etablissementdecredits->fill($data)->save();
//        return redirect()->route('admin.etablissementdecredits.index')->with('success', 'Etablissement de credits is added successfully!');
//    }
//
//    public function edit($id)
//    {
//        $etablissementdecredits = etablissementdecredits::findOrFail($id);
//        return view('admin.etablissementdecredits.edit', compact('etablissementdecredits'));
//    }
//
//    public function update(Request $request, $id)
//    {
//        $etablissementdecredits = etablissementdecredits::findOrFail($id);
//        $data = $request->only($etablissementdecredits->getFillable());
//
//        if($request->hasFile('logo')) {
//            $request->validate([
//                'raison_sociale'   =>  [
//                    'required',
//                    Rule::unique('services')->ignore($id),
//                ],
//                'slug'   =>  [
//                    Rule::unique('services')->ignore($id),
//                ],
//                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
//            ]);
//            unlink(public_path('uploads/'.$etablissementdecredits->photo));
//            $ext = $request->file('photo')->extension();
//            $final_name = 'service-'.$id.'.'.$ext;
//            $request->file('photo')->move(public_path('uploads/'), $final_name);
//            $data['photo'] = $final_name;
//        } else {
//            $request->validate([
//                'name'   =>  [
//                    'required',
//                    Rule::unique('services')->ignore($id),
//                ],
//                'slug'   =>  [
//                    Rule::unique('services')->ignore($id),
//                ]
//            ]);
//            $data['photo'] = $etablissementdecredits->photo;
//        }
//
//        $etablissementdecredits->fill($data)->save();
//        return redirect()->route('admin.etablissementdecredits.index')->with('success', 'Etablissement de credits is updated successfully!');
//    }
//
//    public function destroy($id)
//    {
//        $etablissementdecredits = etablissementdecredits::findOrFail($id);
//        unlink(public_path('uploads/'.$etablissementdecredits->photo));
//        $etablissementdecredits->delete();
//        return Redirect()->back()->with('success', 'Etablissement de credits is deleted successfully!');
//    }

}
