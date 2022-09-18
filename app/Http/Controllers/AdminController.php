<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use App\Models\Annonce;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ListeAnnonces(){
        $Annonces=DB::select('select * from annonces');
        return view('admin.annonces')->with('Annonces',$Annonces);
    }
    public function ListeBlogs(){
        $blogs=DB::select('select * from blogs');
        return view('admin.blogs')->with('blogs',$blogs);
    }
    public function AddBlog(Request $req){
        $req->validate([
            'nom'=>'required',
            'text'=>'required',
            'date'=>'required',
            'photo'=>'required'
     ]);
        if($req){
            $pd= new Blog();
            $pd->nom=$req->nom;
            $pd->text=$req->text;
            $pd->date=$req->date;
            $newName=uniqid();
            $image=$req->file('photo');
            $newName.=".".$image->getClientOriginalExtension();
                   $destPath='uploads';
            $image->move($destPath,$newName);
            $pd->img=$newName;
            $pd->save();
            return redirect()->back();}
            else{
                echo 'Error';
            }

    }
    public function ModifyBlog(Request $request){
        $pd=Blog::find($request->id);
            $pd->nom = $request->nom;
            $pd->text = $request->text;
            $pd->date = $request->date;
            if($request->file('photo')){
                $filePath=public_path().'/uploads/'.$pd->img;
                 unlink($filePath);
                $newName=uniqid();
                $image=$request->file('photo');
                $newName.=".".$image->getClientOriginalExtension();
                $destPath='uploads';
                $image->move($destPath,$newName);
                $pd->img=$newName;
            }
            if($pd->update())
     return redirect()->back();
     else{
        echo "Error";
     }
    }
    public function SupprimerBlog($id){
        $pd=Blog::find($id);
        $filePath=public_path().'/uploads/'.$pd->img;
        unlink($filePath);
          if($pd->delete())
           return redirect()->back();
           else{
               echo "Error";
           }
    }
    public function SupprimerAnnonce($id){
        $pd=Annonce::find($id);
        $filePath=public_path().'/uploads/'.$pd->img;
        unlink($filePath);
          if($pd->delete())
           return redirect()->back();
           else{
               echo "Error";
           }
    }
    public function modifierProfile(Request $r){

        $p=User::where('email',Auth::user()->email)->get();
        $p->name=$r->nom;
        $p->email=$r->email;
        $p->telephone=$r->telephone;
if($p){
return redirect()->back()->with('succ','ok');
};
    }}
