<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class stagiairesController extends Controller
{
    public function Create(){

    }
    public function Read(){
        $stagiaires=Stagiaire::all();
        return view('index',['stagiaires'=>$stagiaires]);

    }
    public function Voir( Request $request ){
        $stagiaires=Stagiaire::find($request->id);
        return view('Voir',['stagiaires'=>$stagiaires]);

    }
    public function Update( Request $request ){
        $stagiaires=Stagiaire::find($request->id);

        $filePathName = 'images/' . $stagiaires->photo;

        if( file_exists($filePathName) ){
        unlink($filePathName);
        }

        $filename = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $filename);
        $stagiaires->nom =$request->username;
        $stagiaires->prenom =$request->prenom;
        $stagiaires->email =$request->email;
        $stagiaires->photo =$filename;
        $stagiaires->date_naissance =$request->date_naissance;


        $stagiaires->save();
        return Redirect('/');

    }
    public function Delete(Request $request ){
        $stagiaires=Stagiaire::find($request->id);

        $filePathName = 'images/' . $stagiaires->photo;
        if( file_exists($filePathName) ){
           unlink($filePathName);
        }


        $stagiaires->delete();
        return Redirect('/');

    }
    public function add( Request $request ){


        $filename = time().'.'.request()->photo->getClientOriginalExtension();
        request()->photo->move(public_path('images'), $filename);


        $stagiaires=new Stagiaire();

        $stagiaires->nom =$request->username;
        $stagiaires->prenom =$request->prenom;
        $stagiaires->email =$request->email;
        $stagiaires->photo =$filename;
        $stagiaires->date_naissance =$request->date_naissance;


        $stagiaires->save();
        return Redirect('/');

}
public function Updatedata($id){
    $stagiaires=Stagiaire::find($id);
    return view('update',['data'=>$stagiaires , 'id'=>$id]);
}
}
