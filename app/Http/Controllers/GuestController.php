<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Blog;
use App\Models\Wish;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class GuestController extends Controller
{
    public function Articles(){
        $alaune=Annonce::paginate(3);
        $annonces=Annonce::paginate(30);

        $blogs=DB::select('select * from blogs');
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
    return view('home')->with('annonces',$annonces)->with('blogs',$blogs)->with('tot',$tot)->with('alaune',$alaune);}

    public function Blogs(){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}
        $blogs=DB::select('select * from blogs');

    }
    return view('blog')->with('blogs',$blogs)->with('tot',$tot);
}
public function Contact(){
    $tot=0;
    if(Auth::user()){
        $wishs= Wish::where('user',Auth::user()->email)->get();
        foreach($wishs as $w){
        $tot++;}

}
return view('contact')->with('tot',$tot);}
public function QuiSommesNous(){
    $tot=0;
    if(Auth::user()){
        $wishs= Wish::where('user',Auth::user()->email)->get();
        foreach($wishs as $w){
        $tot++;}

}
return view('qui-sommes-nous')->with('tot',$tot);}

    public function ArticlesFilter(){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        $annonces=Annonce::orderBy('id', 'desc')->get();

        return view('articles')->with('annonces',$annonces)->with('tot',$tot);

    }
    public function detailsArticle($id){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        $article=Annonce::where('id',$id)->get();
        return view('article-detaills')->with('article',$article)->with('tot',$tot);
    }
    public function publierAnnonce(Request $rq){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        return view('publier-annonce')->with('tot',$tot);
    }
    public function addToWishlist($id){
        $pd=Annonce::find($id);
        $w=new Wish();
        $w->user=Auth::user()->email;
        $w->name=$pd->name;
        $w->img=$pd->img;
        $w->proper=$pd->username;
        $w->telProper=$pd->telephone;
        $w->prix=$pd->price;
       if($w->save())
         return redirect()->back();
     else return "Error";
    }
    public function Annonce(Request $rq){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        $rq->validate([
            'categorie'=>'required',
            'titre'=>'required',
            'description'=>'required',
            'prix'=>'required',
             'place'=>'required',
            'photo'=>'required',
     ]);
        if($rq){
            $pd= new Annonce();
            $pd->categorie=$rq->categorie;
            $pd->name=$rq->titre;
            $pd->description=$rq->description;
            $pd->price=$rq->prix;
            $pd->place=$rq->place;
            $pd->username=Auth::user()->name;
            $pd->telephone=99514262;
            $newName=uniqid();
            $image=$rq->file('photo');
            $newName.=".".$image->getClientOriginalExtension();
                   $destPath='/uploads';
            $image->move($destPath,$newName);
            $pd->img=$newName;
            $pd->save();
            return redirect()->back();}
            else{
                echo 'Error';
            }
    }
    public function wishList($email){
        $wishes=Wish::where('user',$email)->get();
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        return view('wishlist')->with('wishes',$wishes)->with('tot',$tot);;

    }
    public function search(Request $req){
        $tot=0;
        $alaune=Annonce::paginate(3);
        $blogs=DB::select('select * from blogs');
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
    $annonces=Annonce::where('name','LIKE','%'.$req->prod.'%')->paginate(30);
        return view('home')->with('alaune',$alaune)->with('annonces',$annonces)->with('blogs',$blogs)->with('tot',$tot);;
    }
    public function searchArticle(Request $req){
        $tot=0;
        if(Auth::user()){
            $wishs= Wish::where('user',Auth::user()->email)->get();
            foreach($wishs as $w){
            $tot++;}

    }
        $pd=Annonce::where('name','LIKE','%'.$req->prod.'%')->get();
            return view('articles')->with('annonces',$pd)->with('tot',$tot);;
        }
        public function searchCat($cat){
            $tot=0;
            if(Auth::user()){
                $wishs= Wish::where('user',Auth::user()->email)->get();
                foreach($wishs as $w){
                $tot++;}

        }
            $pd=Annonce::where('categorie','LIKE','%'.$cat.'%')->get();
                return view('articles')->with('annonces',$pd)->with('tot',$tot);;
            }

            public function searchVille($ville){
                $tot=0;
                if(Auth::user()){
                    $wishs= Wish::where('user',Auth::user()->email)->get();
                    foreach($wishs as $w){
                    $tot++;}

            }
                $pd=Annonce::where('place','LIKE','%'.$ville.'%')->get();
                    return view('articles')->with('annonces',$pd)->with('tot',$tot);;
                }

                public function modifierProfile(Request $r){

                    $p=User::where('email',Auth::user()->email)->first();
                    $p->name=$r->nom;
                    $p->telephone=$r->telephone;
                    if(Auth::user()->password)
                    Auth::user()->password=Hash::make($r->password);
                   if($p->update()){
                    return redirect()->back()->with('success','Profile updated with success');
                     };
                    }
                    public function SupprimerWish($id){
                        $pd=Wish::find($id);
                          if($pd->delete())
                           return redirect()->back();
                           else{
                               echo "Error";
                           }
                    }
                    public function blogDetails($id){
                        $b=Blog::find($id);
                        $tot=0;
                        if(Auth::user()){
                            $wishs= Wish::where('user',Auth::user()->email)->get();
                            foreach($wishs as $w){
                            $tot++;}

                    }
                        return view('blog-details')->with('blog',$b)->with('tot',$tot);

                    }

}



