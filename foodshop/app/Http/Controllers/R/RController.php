<?php

namespace App\Http\Controllers\R;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Homepage;
use App\Dishes;

class RController extends Controller
{
    
    public function index()
    {
        $banner_dishes1 = Dishes::find(1);
        $banner_dishes2 = Dishes::find(2);
        $banner_dishes3 = Dishes::find(3);
        $banner_dishes4 = Dishes::find(4);
        
        $welcome_id = Dishes::find(5);
        $about_us_id = Dishes::find(6);
        $our_services_id = Dishes::find(7);
        $upcomming_event_ids = Dishes::find(8);
        $testimonials_ids = Dishes::find(9);
        
//        $alldishes = Homepage::all();
        $alldishes = array(
                        'banner_dishes1' => $banner_dishes1,
                        'banner_dishes2' => $banner_dishes2,
                        'banner_dishes3' => $banner_dishes3,
                        'banner_dishes4' => $banner_dishes4,
                        'welcome_id' => $welcome_id,
                        'about_us_id' => $about_us_id,
                        'our_services_id' => $our_services_id,
                        'upcomming_event_ids' => $upcomming_event_ids,
                        'testimonials_ids' => $testimonials_ids
                    );
//        return $alldishes;
        return view('r.rhome', compact('alldishes', $alldishes));
    }
    
    public function contact(){
        return view('r/contacts');
    }
    
    
    
    public function cart(Request $r){
        $dishes = array();
        $dishIDs = explode(',', $r->dishids);
        foreach ($dishIDs as $dishid){
            $dishes[]=Dishes::find($dishid);
        }
//        return $dishes;
        return view('r/cart', compact('dishes', $dishes));
    }
    
    
    
    
    public function order(Request $r){
        return "Dish ids: ".$r->dishids
        ."       phone: ".$r->phone
        ."      address: ".$r->address;
    }
    
    
    
    
    
    
    
}
