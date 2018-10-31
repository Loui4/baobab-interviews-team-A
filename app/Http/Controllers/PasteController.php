<?php

namespace App\Http\Controllers;

use App\Paste;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\UserTagged;
use App\Mail\SendMailable;
use App\Http\controllers\MailController;

class PasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        //
        return view('index')->with([
            'pastes' => Paste::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create')->with([
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = 1;//Auth::user()->id

        $paste = Paste::create([
            'content' => $request->content,
            'title' => $request->title,
            'user_id' => $user
        ]);

        if(!is_null($request->user)) {
            foreach ($request->user as $user) {
                $paste->tags()->attach($user);
                //$user->notify(new UserTagged($invoice));
            }
        }


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paste $paste
     * @return \Illuminate\Http\Response
     */
    public function show(Paste $paste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paste $paste
     * @return \Illuminate\Http\Response
     */
    public function edit(Paste $paste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Paste $paste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paste $paste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paste $paste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paste $paste)
    {
        //
    }

    /*public function sendMail()
    {
        $mail = new MailController();
        $user = User::find(1);
        $mail->basic_email($user);

    }*/

}
