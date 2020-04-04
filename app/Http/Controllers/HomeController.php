<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UrlShortner;


class HomeController extends Controller{
    /**
     * Listing of Short Url.
    */

    public function index()
    {
        //dd('hi');
        $shortLinks = UrlShortner::latest()->get();
        return view('urlshortner',compact('shortLinks'));
    }

    /**
     * Save data In Database
     * 
     * 
     */
    public function store(Request $request)
    {   
        $input['orglink'] = $request->orglink;
        $input['shortcode'] = uniqid();

        UrlShortner::create($input);

        return redirect('url-shorten')
             ->with('success', 'Short Url Generated Successfully!');
    }

    /**
     * Used to redirect
     */
    public function shortenLink($code)
    {
        $replace = UrlShortner::where('shortcode', $code)->first();
        if($replace->open>=1){
           echo "Acccess denied";
        }else {
            UrlShortner::where('shortcode',$code)->update(['open' => $replace->open+1]);
            return redirect($replace->orglink);
        }    
        
    }
}


