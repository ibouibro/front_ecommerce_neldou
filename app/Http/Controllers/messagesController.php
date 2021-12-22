<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class messagesController extends Controller
{
    public function show()
    {
        $messages = DB::table('messages')->orderBy('etat','desc')->get();
       
        return view("staff/message/index")->with(['messages' => $messages, 'count' => count($messages) ]);
    }

    public function supprimer(Request $request)
    {
        DB::table('messages')->where('id',$request->input('id'))->delete();
        $messages = DB::table('messages')->orderBy('etat','desc')->get();
        return view("staff/message/index")->with(['messages' => $messages,  'count' => count($messages) ]);
    }

    public function afficher(Request $request)
    {

        $message = DB::table('messages')->where('id',$request->input('id'))->first();
        DB::table('messages')->where('id',$request->input('id'))->update(['etat' => 1]);
        return view("staff/message/afficher")->with(['message' => $message ]);
    }
}
