<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
       
        return view('admin.pages.service.index');
    }

    public function create(){
        return view('admin.pages.service.create');
    }
 
    public function store(Request $request)
    { 
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'Content' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd('service.store');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/service'), $imageName);
        }
        $slug = Str::slug($request->title);
        Service::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->Content,
            'image' => 'assets/images/service/'.$imageName ?? null,
        ]);
      
        return redirect()->back()->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail(decrypt($id));
        return view('admin.pages.service.edit', compact('service'));
    } 

    public function update(Request $request, $id)
    { 
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        $service = Service::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/service'), $imageName);
            
            $service->update(['image' =>  'assets/images/service/' . $imageName]);
        } 
        $slug = Str::slug($request->title);
        $service->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }
    

    public function destroy($id)
    {
        $service= Service::findOrFail(decrypt($id));
        $service->delete();
        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
    }
}
