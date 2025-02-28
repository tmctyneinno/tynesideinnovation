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

    

}
