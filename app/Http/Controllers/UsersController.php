<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Article;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user=Auth::user();
        // $articles = Article::where('user_id',Auth::user()->id)->get();
        

            
      
 
        

        // return view('users.index',compact('user','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $user = User::findOrFail($id);
        $articles = Article::where('user_id',$id)->get();

        return view('users.show', compact('user','articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $image=$request->file('profile_image');
        
        if($request->file('profile_image')->isValid()){
        

        Cloudder::upload($image,null);
            $profile_id=Cloudder::getPublicId();
            $profile_url=Cloudder::show($profile_id, [
             'width'     => 150,
             'height'    => 150
           ]);
       
       
            $user->name = $request->name;
            $user->introduction=$request->introduction;
         
            $user->profile_image=$profile_url;
           
            $user->update();
           

     
       $user->update($request->validated());
       
       }
        return redirect()->route('users.show',compact('user'));
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
}
