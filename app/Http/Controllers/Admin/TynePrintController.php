<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Tyneprint;
use Illuminate\Http\Request;

class TynePrintController extends Controller
{
    public function index(){
       
        return view('admin.pages.tyneprint.index');
    }

    public function create(){
        return view('admin.pages.tyneprint.create');
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/tyneprint'), $imageName);
        }
        $slug = Str::slug($request->title);
        Tyneprint::create([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->Content,
            'image' => 'assets/images/tyneprint/'.$imageName ?? null,
        ]);
      
        return redirect()->back()->with('success', 'Tyneprint created successfully.');
    }

    public function edit($id)
    {
        $tyneprint = Tyneprint::findOrFail(decrypt($id));
        return view('admin.pages.tyneprint.edit', compact('tyneprint'));
    } 

    public function update(Request $request, $id)
    { 
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required', 
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', 
        ]);
    
        $tyneprint = Tyneprint::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/tyneprint'), $imageName);
            
            $tyneprint->update(['image' =>  'assets/images/tyneprint/' . $imageName]);
        } 
        $slug = Str::slug($request->title);
        $tyneprint->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.tyneprint.index')->with('success', 'Tyneprint updated successfully.');
    }
    

    public function destroy($id)
    {
        $tyneprint= Tyneprint::findOrFail(decrypt($id));
        $tyneprint->delete();
        return redirect()->route('admin.tyneprint.index')->with('success', 'Tyneprint deleted successfully.');
    }
}
