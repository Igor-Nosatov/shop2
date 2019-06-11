<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Config;
use Newsletter;

class SubscribeController extends Controller {
    
    public $mailchimp;
    public function __construct(\Newsletter $mailchimp) 
    {
        $this->mailchimp = $mailchimp;
    }
    public function store(Request $request)
    {
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', 'Thanks For Subscribe');
        }
        return redirect('/')->with('failure', 'Sorry! You have already subscribed ');
    }
}
