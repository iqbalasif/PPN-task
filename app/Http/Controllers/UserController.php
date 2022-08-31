<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PlayingTime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $states = \DB::table('states')->get();
        $home_courts = \DB::table('homecourts')->get();
        $playing_times = \DB::table('playing_times')->get();
        $user = User::findOrFail($id);
        $user_playing = \DB::table('playing_times')
        ->join('user_playing','playing_times.id','user_playing.playing_id')
        ->where('user_playing.user_id',$id)->get();
        return view('profile',compact('states','home_courts','playing_times','user','user_playing'));
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
        $this->validate($request,
        [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'home_court' => 'required'
        ]);
        $user = User::findOrFail($id);
        $user->first_name = isset($request->first_name) ? $request->first_name : $user->first_name;
        $user->last_name = isset($request->last_name) ? $request->last_name : $user->last_name;
        $user->email = isset($request->email) ? $request->email : $user->email;
        $user->address1 = isset($request->address1) ? $request->address1 : $user->address1;
        $user->address2 = isset($request->address2) ? $request->address2 : $user->address2;
        $user->city = isset($request->city) ? $request->city : $user->city;
        $user->state_id = isset($request->state) ? $request->state : $user->state_id;
        $user->zip_code = isset($request->zip_code) ? $request->zip_code : $user->zip_code;
        $user->home_court_id = isset($request->home_court) ? $request->home_court : $user->home_court_id;
        $user->playingtimes()->sync($request->playing_time);
        $user->save();
        return redirect()
            ->route('user.edit',$user->id)
            ->with('success', 'Profile has been updated successfully.');
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
