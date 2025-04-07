<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index(Request $request){
        $profiles = Profile::paginate(10);
        return view("Profile.index",compact('profiles'));
    }
    public function show(Request $request){
        $id = (int)$request->id;
        $profile = Profile::findOrFail($id);

        return view('Profile.show',compact('profile'));
    }
    public function create (Request $request){
        return view("Profile.create");
    }
    public function store (ProfilRequest $request){
        $password = Hash::make($request->password);

        
        
        $data=$request->validated();
        $data["password"] = $password;
        $data['image'] =$request->file('image')->store('profile','public');
        Profile::create($data);
        return redirect()->route("profiles.index")->with("success","Votre compte est bien crée.");
    }
    public function edit (Profile $profile){
        return view('Profile.edite',compact('profile'));
    }
    public function update(ProfilRequest $request, Profile $profile){
        
        $data=$request->validated();
        $data['password'] = Hash::make($request->password);
        $data['image'] = $this->validImage($request,$profile);

        $profile->fill($data)->save();
        return redirect()->route('profiles.edit',$profile->id)->with('success','update est bien success');
    }
    public function destroy(Request $request){

        Profile::destroy($request->id);
        return redirect()->route("profiles.index")->with("success","this cards bien delete");
    }
    private function validImage(ProfilRequest $request,Profile $profile){
        if($request->hasFile('image')){
            return $request->file('image')->store('profile','public');
        }
        return $profile->image;
    }
}
