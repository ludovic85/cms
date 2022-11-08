<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Indemnisations;
use App\Models\Admin\etablissementdecredits;
use App\Models\Admin\Ea_bqmandataires;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class IndemnisationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        // $indemnisations = indemnisations::all();
        $indemnisations = DB::table('indemnisations')
            ->join('etablissementdecredits as ec_f' , 'indemnisations.id_bq','=', 'ec_f.id')
            ->join('etablissementdecredits as ec_l', 'indemnisations.id_liquidateur', '=','ec_l.id')
            ->select('indemnisations.id','numero','id_liquidateur','id_bq','indemnisations.statut as statut_ind','descpt',
            'periode0', 'periode1','periode2','ec_f.raison_sociale as raison_sociale_faillite','ec_l.raison_sociale as raison_sociale_liquidateur')
            ->get();

        return view('admin.indemnisations.index', compact('indemnisations'));

    }

    public function create()
    {
        $banques = etablissementdecredits::where('statut','=','0')->get();
        return view('admin.indemnisations.create',compact('banques'));
    }

    public function store(Request $request)
    {
        $indemnisations = new indemnisations();
        $data = $request->only($indemnisations->getFillable());

        $request->validate([
            'numero' => 'required|unique:indemnisations',
            'id_bq' => 'required',
            'statut' => 'required',
            'periode0' => 'required',
            'periode1' => 'required',
            'periode2' => 'required'
        ]);

//>>        if(empty($data['numero'])) {
//            echo('Insérer numéro indemnisation svp!') ;
//        }
//        $statement = DB::select("SHOW TABLE STATUS LIKE 'indemnisations'");
//        $ai_id = $statement[0]->Auto_increment;
//       // $ext = $request->file('numero')->extension();
//       // $final_name = '-'.$ai_id.'.'.$ext;
//       // $request->file('numero')->move(public_path('banques/'), $final_name);
//        $data['numero'] = $final_name;

        $indemnisations->fill($data)->save();

        $indemnisation =  Indemnisations::where('numero','=',$request->numero)->first();
        $ea_bqmandataires = new ea_bqmandataires();
        $ea_bqmandataires->id_indem = $indemnisations->id;
        $ea_bqmandataires->id_bq = $indemnisations->id_bq;
        $ea_bqmandataires->NbreCltsAffectes = 0;
        $ea_bqmandataires->NbreCltsPayes = 0;
        $ea_bqmandataires->TotalMttPaye= 0;
        $ea_bqmandataires->save();

        return redirect()->route('admin.indemnisations.index')->with('success', 'Indemnisation créée avec succès!');


    }


    public function edit($id)
    {

         $indemnisations = indemnisations::findOrFail($id);
        $etablissementsdecredits=DB::table('etablissementdecredits')->get();


        return view('admin.indemnisations.edit', compact('indemnisations','etablissementsdecredits'));
    }


    public function update(Request $request, $id)
    {
        $indemnisations = indemnisations::findOrFail($id);
        $data = $request->only($indemnisations->getFillable());

//        if($request->hasFile('id')) {
//            $request->validate([
//                'id_bq'   =>  [
//                    'required',
//                    Rule::unique('indemnisations')->ignore($id),
//                ]
//            ]);
//           unlink(public_path('uploads/'.$indemnisations->photo));
//            $ext = $request->file('photo')->extension();
//            $final_name = 'indemnisations-'.$id.'.'.$ext;
//            $request->file('photo')->move(public_path('uploads/'), $final_name);
//            $data['photo'] = $final_name;
//        } else {
//            $request->validate([
//                'periode1'   =>  [
//                    'required',
//                    Rule::unique('indemnisations')->ignore($id),
//                ],
//                'periode2'   =>  [
//                    Rule::unique('indemnisations')->ignore($id),
//                ]
//            ]);
//            $data['photo'] = $indemnisations->photo;
//        }

       $indemnisations->fill($data)->save();
       return redirect()->route('admin.indemnisations.index')->with('success', 'Indemnisation mis à jour avec succès!');
   }

    public function destroy($id)
    {
       $indemnisations = indemnisations::findOrFail($id);
 //       unlink(public_path('uploads/'.$indemnisations->photo));
        $indemnisations->delete();
        return Redirect()->back()->with('success', 'Indemnisation supprimée avec succès!');
    }

}
