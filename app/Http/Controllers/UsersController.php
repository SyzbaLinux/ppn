<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {

        $user = new User();

        $user->fname                     = $request->fname;
        $user->lname                     = $request->lname;
        $user->email                     = $request->email;
        $user->address_line_1            = $request->address_line_1;
        $user->address_line_2            = $request->address_line_2;
        $user->city                      = $request->city;
        $user->zip_code                  = $request->zip_code;
        $user->state                     = $request->state;
        $user->home_court                = $request->home_court;
        $user->availability              = $request->availability;
        $user->profile_image             = $request->profile_image;
        $user->score_email_confirmation  = $request->score_email_confirmation;

        $user->save();

        $request->session()->flash('status', 'Profile Created Successfully!');
        return back();
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
        //
    }

    public function uploadFile($media,$path){
        if(is_file($media)){
            $media_name = time().'.'.$media->getClientOriginalExtension();
            $media->move(public_path($path), $media_name);
            $media_path = $path.$media_name;
            return $media_path;

        }else{
            return '--';
        }
    }
}
