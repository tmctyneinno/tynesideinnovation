<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\TermsConditionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\VisionMissionController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TynePrintController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\BlogController;

use App\Exports\ConsultantsExport;
use App\Http\Controllers\BookInspection;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ConsultantFormController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CoreValueController;
use App\Http\Controllers\QuicklinkController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\SociallinkController;
use App\Http\Controllers\Auth\AdminLoginController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GalleryContoller;



Route::prefix('admin')->group(function () { 
    Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('admin.login');
    Route::post('/manage/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::post('/manage/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.index');

        Route::post('/settings/update-password', [AdminLoginController::class, 'updatePassword'])->name('admin.password.update');
        Route::get('/settings/show-password', [AdminLoginController::class, 'showChangePasswordForm'])->name('admin.show.password');
        // Menu
      
        Route::get('/menu/create', [MenuController::class, 'creatMenu'])->name('admin.menu.create');
        Route::get('/manage/menu/index', [MenuController::class, 'indexMenu'])->name('admin.menu.index');
        Route::post('/menu', [MenuController::class, 'storeMenu'])->name('admin.menu.store');
        Route::get('/menu/{id}/edit', [MenuController::class, 'editMenu'])->name('admin.menu.edit');
        Route::put('/menu/{id}', [MenuController::class, 'updateMenu'])->name('admin.menu.update');
        Route::delete('/menu/{id}', [MenuController::class, 'destroyMenu'])->name('admin.menu.destroy');
        //Slider  
        Route::get('/manage/sliderIndex', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('/manage/sliderCreate', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::put('/slider/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
        Route::get('/slider/{id}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');
        
        //visionMission
        Route::get('/settings/vision-mission', [VisionMissionController::class, 'index'])->name('admin.visionMission.index');
        Route::post('/settings/vision-mission/store', [VisionMissionController::class, 'store'])->name('admin.visionMission.store');
        Route::put('/settings/vision-mission/update/{id}', [VisionMissionController::class, 'update'])->name('admin.visionMission.update');
         
        Route::post('/settings/store/why-choose-us', [SettingsController::class, 'storeWhyChooseUs'])->name('admin.settings.store_why_choose_us');
        Route::put('/settings/update/why-choose-us/{id}', [SettingsController::class, 'updateWhyChooseUs'])->name('admin.settings.update_why_choose_us');
        //About us
        Route::get('/settings/about-us', [SettingsController::class, 'getAboutUs'])->name('admin.settings.aboutUs');
        Route::post('/settings/store/about-us', [SettingsController::class, 'storeAboutUs'])->name('admin.settings.storeAboutus');
        Route::put('/settings/update/about-us/{id}', [SettingsController::class, 'updateAboutUs'])->name('admin.settings.updateAboutus');
        //Core Value 
        Route::get('/settings/core-value', [CoreValueController::class, 'index'])->name('admin.coreValue.index');
        Route::post('/settings/store/core-value', [CoreValueController::class, 'storeCoreValue'])->name('admin.settings.storeCoreValue');
        Route::put('/settings/update/core-value/{id}', [CoreValueController::class, 'updateCoreValue'])->name('admin.settings.updateCoreValue');
        //Office Hours 
        Route::get('/settings/office/hours/index', [SettingsController::class, 'indexOfficeHours'])->name('admin.officeHours.index');
        Route::post('/settings/store/office-hours', [SettingsController::class, 'storeOfficeHours'])->name('admin.office-hours.store');
        Route::put('/settings/update/office-hours/{id}', [SettingsController::class, 'updatestoreOfficeHours'])->name('admin.office-hours.update');
         
        //Contact Us 
        Route::get('/settings/contact-us', [SettingsController::class, 'getcontactUs'])->name('admin.settings.contactUs');
        Route::post('/settings/store/contact-us', [SettingsController::class, 'storeContactUs'])->name('admin.settings.storeContactUs');
        Route::put('/settings/update/contact-us/{id}', [SettingsController::class, 'updateContactUs'])->name('admin.settings.updateContactUs');
        //Social Links 
        Route::get('/sociallinks/index', [SociallinkController::class, 'index'])->name('admin.socialLink.index');
        Route::post('/settings/store/social-links', [SociallinkController::class, 'storeSocialLinks'])->name('admin.settings.storeSocialLinks');
        Route::put('/settings/update/social-links/{id}', [SociallinkController::class, 'updateSocialLinks'])->name('admin.settings.updateSocialLinks');
       
        //Project
        Route::get('/project/index', [ProjectController::class, 'index'])->name('admin.project.index');
        Route::get('/project/create', [ProjectController::class, 'create'])->name('admin.project.create');
        Route::post('project/store', [ProjectController::class, 'store'])->name('admin.project.store');
        Route::get('project/{id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::put('/project/{id}', [ProjectController::class, 'update'])->name('admin.project.update');
        Route::get('project/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');

        //Blog 
        Route::get('blog/index', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('post/blog', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
        
        
        //Teams 
        Route::get('/team/index', [TeamController::class, 'getTeam'])->name('admin.team.getTeam');
        Route::get('/team/create', [TeamController::class, 'create'])->name('admin.team.create');
        Route::post('/team/store', [TeamController::class, 'store'])->name('admin.team.store');
        Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('admin.team.edit');
        Route::put('/team/{id}', [TeamController::class, 'update'])->name('admin.team.update');
        Route::get('/team/{id}', [TeamController::class, 'destroy'])->name('admin.team.destroy');
       
         //Privacy
        Route::get('/index/privacypolicy', [PrivacyController::class, 'index'])->name('admin.privacyPolicy.index');
        Route::post('/store/privacypolicy', [PrivacyController::class, 'store'])->name('admin.privacy.store');
        Route::put('/update/privacypolicy/{id}', [PrivacyController::class, 'update'])->name('admin.privacy.update');
        
        //Terms Conditions
        Route::get('/terms/conditions', [TermsConditionController::class, 'index'])->name('admin.termsCondition.index');
        Route::post('/terms/conditions/store/', [TermsConditionController::class, 'store'])->name('admin.termsCondition.store');
        Route::put('/terms/conditions/update/{id}', [TermsConditionController::class, 'update'])->name('admin.termsCondition.update');
         
        //Events
        Route::get('events/index', [EventController::class, 'index'])->name('admin.events.index');
        Route::get('events/create', [EventController::class, 'create'])->name('admin.events.create');
        Route::post('events/store', [EventController::class, 'store'])->name('admin.events.store');
        Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
        Route::put('/events/{id}', [EventController::class, 'update'])->name('admin.events.update');
        Route::get('/events/{id}', [EventController::class, 'destroy'])->name('admin.events.destroy');

        //Galleries
        Route::get('projects/status/index', [GalleryContoller::class, 'index'])->name('admin.projects.status.index');
        Route::get('projects/status/create', [GalleryContoller::class, 'create'])->name('admin.projects.status.create');
        Route::post('projects/status/store', [GalleryContoller::class, 'store'])->name('admin.projects.status.store');
        Route::get('/projects/status/{id}/edit', [GalleryContoller::class, 'edit'])->name('admin.projects.status.edit');
        Route::put('/projects/status/{id}', [GalleryContoller::class, 'update'])->name('admin.gallery.update');
        Route::get('/gaprojects/statusllery/{id}', [GalleryContoller::class, 'destroy'])->name('admin.projects.status.destroy');
        
        //QuickLink 
        Route::get('/quicklink/index', [QuicklinkController::class, 'index'])->name('admin.quicklink.index');
        Route::get('/quicklink/create', [QuicklinkController::class, 'create'])->name('admin.quicklink.create');
        Route::post('/quicklink/store', [QuicklinkController::class, 'store'])->name('admin.quicklink.store');
        Route::get('quicklink/{id}/edit', [QuicklinkController::class, 'edit'])->name('admin.quicklink.edit');
        Route::put('quicklink/{id}', [QuicklinkController::class, 'update'])->name('admin.quicklink.update');
        Route::get('quicklink/{id}', [QuicklinkController::class, 'destroy'])->name('admin.quicklink.destroy');

        //Services
        Route::get('service/index', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('service/create', [ServiceController::class, 'create'])->name('admin.service.create');
        Route::post('post/service', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::put('service/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::delete('service/{id}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
       
        //TynPrint
        Route::get('tyneprint/index', [TynePrintController::class, 'index'])->name('admin.tyneprint.index');
        Route::get('tyneprint/create', [TynePrintController::class, 'create'])->name('admin.tyneprint.create');
        Route::post('post/tyneprint', [TynePrintController::class, 'store'])->name('admin.tyneprint.store');
        Route::get('tyneprint/{id}/edit', [TynePrintController::class, 'edit'])->name('admin.tyneprint.edit');
        Route::put('tyneprint/{id}', [TynePrintController::class, 'update'])->name('admin.tyneprint.update');
        Route::delete('tyneprint/{id}', [TynePrintController::class, 'destroy'])->name('admin.tyneprint.destroy');
       

        //PortfolioController
        Route::get('portfolio/index', [PortfolioController::class, 'index'])->name('admin.portfolio.index');
        Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
        Route::post('post/portfolio', [PortfolioController::class, 'store'])->name('admin.portfolio.store'); 
        Route::get('portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
        Route::put('portfolio/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
        Route::delete('portfolio/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');

        Route::post('post/portfolio/category', [PortfolioController::class, 'storeCategory'])->name('admin.portfolio.category.store'); 

       
          
        //Faqs
        Route::get('faq/index', [FAQController::class, 'index'])->name('admin.faq.index');
        Route::get('faq/create', [FAQController::class, 'create'])->name('admin.faq.create');
        Route::post('post/faq', [FAQController::class, 'store'])->name('admin.faq.store');
        Route::get('faq/{id}/edit', [FAQController::class, 'edit'])->name('admin.faq.edit');
        Route::put('faq/{id}', [FAQController::class, 'update'])->name('admin.faq.update');
        Route::delete('faq/{id}', [FAQController::class, 'destroy'])->name('admin.faq.destroy');

        Route::get('faq/submt/form', [FAQController::class, 'submtFormView'])->name('admin.faq.submtForm');
        Route::get('/faq/form/view/{id}', [FAQController::class, 'submitFormShow'])->name('admin.faq.submitForm.show');
        Route::get('/faq/form/destroy/{id}', [FAQController::class, 'submitFormDestroy'])->name('admin.faq.submitForm.destroy');

        
        //Consultant
        Route::get('/consultant/index', [ConsultantFormController::class, 'index'])->name('admin.consultant.index');
        Route::get('/consultant/show/{id}', [ConsultantFormController::class, 'show'])->name('admin.consultant.show');
        Route::get('/consultant/destroy/{id}', [ConsultantFormController::class, 'destroy'])->name('admin.consultant.destroy');
        Route::get('/consultants/export', function () {
            return Excel::download(new ConsultantsExport, 'consultants.xlsx');
        })->name('admin.consultants.export');
        Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
        Route::get('/subscribe', [NewsletterController::class, 'showContacts'])->name('newsletter.get');

        //Book Inspection
        Route::get('/inspection/index', [BookInspection::class, 'index'])->name('admin.inspection.index');
        Route::get('/inspection/show/{id}', [BookInspection::class, 'show'])->name('admin.inspection.show');
        Route::get('/inspection/destroy/{id}', [BookInspection::class, 'destroy'])->name('admin.inspection.destroy');
        //Contact
        Route::get('/contact/index', [ContactFormController::class, 'index'])->name('admin.contact.index');
        Route::get('/contact/show/{id}', [ContactFormController::class, 'show'])->name('admin.contact.show');
        Route::get('/contact/destroy/{id}', [ContactFormController::class, 'destroy'])->name('admin.contact.destroy');
       
        
    });  
});
