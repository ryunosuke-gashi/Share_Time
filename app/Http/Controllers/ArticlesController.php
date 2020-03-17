<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use JD\Cloudder\Facades\Cloudder;
use App\Article;
use App\User;
use App\Http\ControllersController;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        $articles = Article::latest('created_at')->whereHas('user',function($query){
            $query->where('univ_id', Auth::user()->univ_id);
        })->get();
       
 
        return view('articles.index', compact('articles', 'user'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
            return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        
        $image=$request->file('place_image');

        if(isset($image)){
 
            Cloudder::upload($image,null);
           
            $place_id=Cloudder::getPublicId();
            $place_url=Cloudder::show($place_id, [
             'width'     => 700,
             'height'    => 700
           ]);
       
        $article=Article::create([
            'user_id'=>auth()->user()->id,
            'food' => $request->food,
            'meet_place' => $request->meet_place,
            'place_image' => $place_url,
            'time' => $request->time,
            'meet_place' => $request->meet_place,

            ]);
            return redirect()->route('articles.index');
          
        }else
        $article=Article::create([
            'user_id'=>auth()->user()->id,
            'food' => $request->food,
            'meet_place' => $request->meet_place,
            'time' => $request->time,
            'meet_place' => $request->meet_place,

            ]);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        
        $article = Article::findOrFail($id);
 
        return view('articles.show', compact('article'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::where('user_id',Auth::user()->id)->where('id',$id)->first();
       
      if(!isset($article)){
          return redirect('articles')->with('message', '他人の記事です');
         
      }else{
      $article->delete();
      return redirect('articles')->with('error', 'ok');
      }
}
}
