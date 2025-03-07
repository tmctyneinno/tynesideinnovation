<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use App\Models\Project;
use App\Models\DropdownItem;
use App\Models\Service;
use App\Models\ProjectMenu;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\ConsultantFormController;
use App\Mail\ContactUs;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
   
    public function index($slug)
    {
       
        $pages = [
            'home' => 'frontend.home',
            'about-us' => 'frontend.about-us',
            'contact' => 'frontend.contact',
            'blog' => 'frontend.blog.index', 
            // 'blog' => 'frontend.blog-details',
            'consultant-form' => 'users.pages.consultant-form',
            'faq' => 'frontend.faq',
            'our-team' => 'frontend.our-team',
            'how-we-work' => 'frontend.how-we-work',
            'terms-conditions'  => 'frontend.terms-conditions',
            'privacy-policy'  => 'frontend.privacy-policy',
            'what-we-do' => 'frontend.what-we-do',
            'mission-and-vision' => 'frontend.mission-and-vision',
            'our-values' => 'frontend.our-values',
            'our-services' => 'frontend.services',
            'tyneprints' => 'frontend.tyneprints',
            'porfolio' => 'frontend.porfolio',
            'management' => 'frontend.management'
        ];

        $servicesPages = [ 
            'web-development',
            'branding-design',
            'digital-marketing',
            'app-development',
            'search-engine',
            'it-solutions',
            'imaging-and-digital-printing'
        ];
        
        if (array_key_exists($slug, $pages)) {
           
            return view($pages[$slug]);
        }
        if (in_array($slug, $servicesPages)) {
            $solution = DropdownItem::where('slug', $slug)->first();
    
            if (!$solution) {
                return view('frontend.404'); 
            }
          
            return view("frontend.services.$slug");
        }
        else { 
                // If referral code is not found, return 404
                return view('frontend.404');
            
        }
        
       
    }

    private function generateReferralCode()
    {
        return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
    }


    public function Store(Request $request){
         $capt = captcha_check($request->captcha);
         if($capt){
             Session::flash('message', 'Captcha does not match, try again');
             Session::flash('alert', 'danger');
             return back()->withInput($request->all());
         }
         $data = [
             'name' =>  $request->name,
             'phone' => $request->phone,
             'email' =>  $request->email,
             'message' => $request->message
         ];
         Session::flash('message', 'Request sent Successfully');
         Session::flash('alert', 'success');
         Mail::to('support@tynesideinnovation.com')->send(new ContactUs($data));
         return back();
    

}




public function details($slug){
    $postItem = Blog::where('slug', $slug)->first();

    if (!$postItem) { 
        return view('home.errors.404'); 
    }

    $relatedPost = Blog::where('slug', '!=', $slug)
                            ->latest()
                            ->get();

    return view('frontend.blog.blog-details', compact('postItem', 'relatedPost'));
}

    public function SiteMap()
    {
        return asset('sitemap.xml');
    }

}

