<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Mail\BeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isRevisor')->except('becomeRevisor','makeRevisor');
    }


    public function index() {
        $item_to_check = Item::where('is_accepted', null)->first();
        $item_to_undo = Item::where('is_accepted', false)->first();
        return view('revisor.index', compact('item_to_check'),compact('item_to_undo'));
    }   

    public function acceptItem(Item $item) {
        $item->setAccepted(true);
        return redirect(route('revisor.index'))->with('message', 'Hai accettato l\'annuncio');
    }

    public function rejectItem(Item $item) {
        $item->setAccepted(false);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'hai richiesto correttamente di diventare revisore');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect(route('homepage'))->with('message', "l'utente selezionato è diventato revisore");
    }
}
