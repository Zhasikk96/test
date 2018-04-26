<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Http\Controllers\Controller;
use App\Mail\SendMail2;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function userCabinet(Request $request){
        $user = User::find(Auth::id());
        $user->ball=$request->score;
        $user->save();


        return view('cabinet', [
            'user' => $user]);

    }

    public function About(){

        return view('about');

    }


    public function userQual1(){

        return view('qual1');

    }
    public function userQual2(Request $request){

        $user = User::find(Auth::id());
        $user->ball=$request->score;
        $user->save();
        return view('qual2');

    }
    public function userQual3(Request $request){
        $user = User::find(Auth::id());
        $user->ball=$request->score;
        $user->save();
        return view('qual3');

    }


    public function userTest(){

        return view('test');

    }

    public function uploadFile(Request $request)
    {
        DB::table('certificates')
            ->where('user_id', Auth::id())
            ->delete();

        for ($i = 1; $i < 5; $i++) {
            $path = $request->file('certfile'.$i)->store('public');
            $certificate = new Certificate();
            $certificate->user_id = Auth::id();
            $certificate->path = $path;
            $certificate->save();
        }

        set_time_limit('3600');

        Mail::to('zhasikk.a@gmail.com')->send(new SendMail(Auth::id()));

        return redirect()->to('/cabinet');
    }

    public function uploadFile2(Request $request)
    {
        DB::table('certificates')
            ->where('user_id', Auth::id())
            ->delete();

        for ($i = 1; $i <=3; $i++) {
            $path = $request->file('certfile'.$i)->store('public');
            $certificate = new Certificate();
            $certificate->user_id = Auth::id();
            $certificate->path = $path;
            $certificate->save();
        }

        set_time_limit('3600');

        Mail::to('zhasikk.a@gmail.com')->send(new SendMail2(Auth::id()));

        return redirect()->to('/cabinet');
    }

    public function update(Request $request)
    {

    }

}

