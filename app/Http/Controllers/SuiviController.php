<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suivi;
use App\Models\Rubrique;

class SuiviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $suivis = Suivi::orderBy('id','DESC')->paginate(6);
        return view('Suivis/index')->with(compact('suivis'));
    }

    public function rapport(){
        $suivis = Suivi::orderBy('created_at','DESC')->paginate(0);
        return view('Suivis/rapport')->with(compact('suivis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suivis = Suivi::all();
        $rubriques = Rubrique::all();
        return view('Suivis/create')->with(compact('suivis','rubriques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $suivi = new Suivi();
        $suivi->rubrique_id = $request->rubrique_id;
        $suivi->libele = $request->libele;
        if($request->entree==null && $request->sortie){
            $suivi->sortie = $request->sortie;
            $suivi->entree = 0;
        }

        elseif($request->sortie==null && $request->entree){
            $suivi->sortie = 0;
            $suivi->entree = $request->entree;
        }
        elseif ($request->entre!=$request->sortie) {
            $suivi->entree = $request->entree;
            $suivi->sortie = $request->sortie;
        }

        else{
            $suivi->entree = 0;
            $suivi->sortie = 0;
        }
        //dd($suivi);
        $suivi->save();
        return redirect('/suivis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rubriques = Rubrique::all();
        $suivi = Suivi::find($id);
        return view('Suivis/edit')->with(compact('suivi','rubriques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $suivi = Suivi::find($request->id);
        $suivi->rubrique_id = $request->rubrique_id;
        $suivi->libele = $request->libele;
        if($request->entree==0.0 && $request->sortie){
            $suivi->sortie = $request->sortie;
            $suivi->entree = 0;
        }

        elseif($request->sortie==0.0 && $request->entree){
            $suivi->sortie = 0;
            $suivi->entree = $request->entree;
        }

        elseif ($request->entre!=$request->sortie) {
            $suivi->entree = $request->entree;
            $suivi->sortie = $request->sortie;
        }

        else{
            $suivi->entree = 0;
            $suivi->sortie = 0;
        }
        //dd($suivi);
        $suivi->save();
        return redirect('/suivis');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function journalmois(){
        $suivis = Suivi::all();
        return view('Journaux/journalmois')->with(compact('suivis'));
    }

    public function janvier(){
        
        $suivis = Suivi::where('created_at','like','%-01-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/janvier')->with(compact('suivis'));
    }

    
    public function fevrier(){
        
        $suivis = Suivi::where('created_at','like','%-02-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/fevrier')->with(compact('suivis'));
    }

    
    public function mars(){
        
        $suivis = Suivi::where('created_at','like','%-03-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/mars')->with(compact('suivis'));
    }

    
    public function avril(){
        
        $suivis = Suivi::where('created_at','like','%-04-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/avril')->with(compact('suivis'));
    }
    
    
    public function mai(){
        
        $suivis = Suivi::where('created_at','like','%-05-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/mai')->with(compact('suivis'));
    }

    
    public function juin(){
        
        $suivis = Suivi::where('created_at','like','%-06-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/juin')->with(compact('suivis'));
    }

    
    public function juillet(){
        
        $suivis = Suivi::where('created_at','like','%-07-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/juillet')->with(compact('suivis'));
    }

    
    public function aout(){
        
        $suivis = Suivi::where('created_at','like','%-08-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/aout')->with(compact('suivis'));
    }

    
    public function septembre(){
        
        $suivis = Suivi::where('created_at','like','%-09-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/septembre')->with(compact('suivis'));
    }

    
    public function octobre(){
        
        $suivis = Suivi::where('created_at','like','%-10-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/octobre')->with(compact('suivis'));
    }

    
    public function novembre(){
        
        $suivis = Suivi::where('created_at','like','%-11-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/novembre')->with(compact('suivis'));
    }

    
    public function decembre(){
        
        $suivis = Suivi::where('created_at','like','%-12-%')->orderBy('created_at','ASC')->paginate(0);
        return view('Journaux/decembre')->with(compact('suivis'));
    }

    public function compte(Request $request){
        $janvier = Suivi::where('created_at','like','%-01-%');
        $fevrier = Suivi::where('created_at','like','%-02-%');
        $mars = Suivi::where('created_at','like','%-03-%');
        $avril = Suivi::where('created_at','like','%-04-%');
        $mai = Suivi::where('created_at','like','%-05-%');
        $juin = Suivi::where('created_at','like','%-06-%');
        $juillet = Suivi::where('created_at','like','%-07-%');
        $aout = Suivi::where('created_at','like','%-08-%');
        $septembre = Suivi::where('created_at','like','%-09-%');
        $octobre = Suivi::where('created_at','like','%-10-%');
        $novembre = Suivi::where('created_at','like','%-11-%');
        $decembre = Suivi::where('created_at','like','%-12-%');
        $resultat = $request->ma + $request->mp;
        return view('Journaux/compte')->with(compact('resultat','janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre'));
    }

    public function calcule(Request $request){
        //$resultat = $request->ma + $request->mp;
        if ($request->mp > $request->ma) {
            $resultat = ($request->mp-$request->ma * 2)/100;
            //dd($rep);
        }
        else {
            $resultat = ($request->ma-$request->mp * 2)/100;
            //dd($rep);
        }

        return redirect('/suivis/compte')->with(compact('resultat'));
    }

    public function trimestre(){
        return view('Journaux/trimestre');
    }
    
    public function semestre(){
        return view('Journaux/semestre');
    }
    
    public function ans(){
        return view('Journaux/ans');
    }
    
    public function decennie(){
        return view('Journaux/decennie');
    }
}
