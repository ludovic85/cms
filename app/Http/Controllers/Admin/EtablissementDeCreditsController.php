<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\etablissementdecredits;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class EtablissementdecreditsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $etablissementdecredits = etablissementdecredits::all();
        return view('admin.etablissementdecredits.index', compact('etablissementdecredits'));
    }

    public function create()
    {
        return view('admin.etablissementdecredits.create');
    }

    public function store(Request $request)
    {
        $etablissementdecredits = new etablissementdecredits();
        $data = $request->only($etablissementdecredits->getFillable());

        $request->validate([
            'raison_sociale' => 'required|unique:etablissementdecredits',
            'email' => 'required|unique:etablissementdecredits|email',
           'slug' => 'unique:etablissementdecredits',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048'

        ]);

        if(empty($data['slug'])) {
            $data['slug'] = Str::slug($request->raison_sociale);
        }

        $statement = DB::select("SHOW TABLE STATUS LIKE 'etablissementdecredits'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('logo')->extension();
        $final_name = 'raison sociale-'.$ai_id.'.'.$ext;
        $request->file('logo')->move(public_path('banques/'), $final_name);
        $data['logo'] = $final_name;

        $etablissementdecredits->fill($data)->save();
        return redirect()->route('admin.etablissementdecredits.index')->with('success', 'Etablissement de credit ajouté avec succès!');
    }

    public function edit($id)
    {
        $etablissementdecredits = etablissementdecredits::findOrFail($id);
        return view('admin.etablissementdecredits.edit', compact('etablissementdecredits'));
    }

    public function update(Request $request, $id)
    {
        $etablissementdecredits = etablissementdecredits::findOrFail($id);
        $data = $request->only($etablissementdecredits->getFillable());

        if($request->hasFile('logo')) {
            $request->validate([
                'raison_sociale'   =>  [
                    'required',
                    Rule::unique('etablissementdecredits')->ignore($id),
                ],
                'slug'   =>  [
                    Rule::unique('etablissementdecredits')->ignore($id),
                ],
                'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email'
            ]);
            unlink(public_path('banques/'.$etablissementdecredits->logo));
            $ext = $request->file('logo')->extension();
            $final_name = 'raison_sociale-'.$id.'.'.$ext;
            $request->file('logo')->move(public_path('banques/'), $final_name);
            $data['logo'] = $final_name;
        } else {
            $request->validate([
                'raison_sociale'   =>  [
                    'required',
                    Rule::unique('etablissementdecredits')->ignore($id),
                ],
                'slug'   =>  [
                    Rule::unique('etablissementdecredits')->ignore($id),
                ],
                'email' => 'required|email'

            ]);
            $data['logo'] = $etablissementdecredits->logo;
        }

        $etablissementdecredits->fill($data)->save();
        return redirect()->route('admin.etablissementdecredits.index')->with('success', 'Etablissement de crédit mis à jour avec succès!');
    }

    public function destroy($id)
    {
        $etablissementdecredits = etablissementdecredits::findOrFail($id);
        unlink(public_path('banques/'.$etablissementdecredits->logo));
        $etablissementdecredits->delete();
        return Redirect()->back()->with('success', 'Etablissement de credit supprimé avec succès!');
    }

}
