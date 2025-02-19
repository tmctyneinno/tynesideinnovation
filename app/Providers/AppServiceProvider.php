<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\PortfolioCategory;
use App\Models\TermsConditions;
use App\Models\VisionMission;
use App\Models\PrivacyPolicy;
use App\Models\MenuItem;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Tyneprint;
use App\Models\Faq;

class AppServiceProvider extends ServiceProvider
{ 
    /**
     * Register any application services.
     */ 
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    { 
        View::share('faqs', Faq::latest()->paginate(5));
        View::share('menuItems', MenuItem::with('dropdownItems')->get());
        View::share('sliders', Slider::first());
        View::share('policies', PrivacyPolicy::first()); 
        View::share('services', Service::latest()->get());
        View::share('blogs', Blog::latest()->get()); 
        View::share('tyneprint', Tyneprint::latest()->get());
        View::share('portfolioCategory', PortfolioCategory::get());
        View::share('portfolio', Portfolio::latest()->get());
        View::share('termsCondition', TermsConditions::first());
        View::share('visionMission', VisionMission::first()); 
       
    }
}
