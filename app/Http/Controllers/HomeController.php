<?php

namespace App\Http\Controllers;


use App\Demande;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;;
use App\Reglement;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function search(Request $request)
    {
        $_type= "";
        $key= $request['key'];        
        $result = Reglement::query();
      
        if (!empty($request['type'])) {
            $type=$request['type'];    
            $result = $result->where('type', '=', $request['type']);
        }
        if (!empty($request['key'])) {
            $key=$request['key'];    
            // $result = $result->where('created_at', '<=', $request['date_fin']);
        }

        // $assurancesSolde = $result->get()->sum('prix');
        $results = $result->get();
     
        return view('search',compact(
            'results'
        ));

        
        return view('search');
    }



    public function police()
    {
        $demandes = Demande::where('police',1)->get();        
        return view('police',compact('demandes'));
        
    }



    public function gr()
    {
        $demandes = Demande::where('gr',1)->get();        
        return view('gr',compact('demandes'));
        
    }

    //
}
