<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user()->articles;
        // $articles = Article::latest()->get();
        return view('account.index', $data);
    }

    public function edit($user)
    {
        $user = User::where('name', $user)->first();
        return view('account.update', compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $validateData = $request->validate([
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:4000',
            'first_name' => 'nullable|min:3|max:10',
            'last_name' => 'nullable|min:3|max:10',
            'contact' => 'nullable', 
        ]);

        if($request->has('avatar')){
            $avataruploaded = $request->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath, $avatarname);

            $user->avatar = '/images/' . $avatarname;
            $user->first_name = $request['first_name'];
            $user->last_name = $request['last_name'];
            $user->contact = $request['contact'];
            $user->save();    
        }else{
            // $user = User::find($user);
            $user->first_name = $request['first_name'];
            $user->last_name = $request['last_name'];
            $user->contact = $request['contact'];
            $user->save();
        };
        
        return redirect()->route('account');
    }

    public function detail($user)
    {
        $user = User::where('name', $user)->first();
        return view('account.detail', compact('user'));
    }

    public function createPost()
    {
        return view('account.post.create');
    }
}
