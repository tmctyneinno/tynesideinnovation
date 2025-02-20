<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
       
        return view('admin.pages.portfolio.index');
    }

    public function create(){
        return view('admin.pages.portfolio.create');
    }
 
    public function storeCategory(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);
    
        // $slug = Str::slug($request->title);
        PortfolioCategory::create([
            'name' => $request->name,
        ]);
      
        return redirect()->back()->with('success', 'Portfolio created successfully.');
    }

    public function destroyCategory($id)
    {
        $portfolio= PortfolioCategory::findOrFail(decrypt($id));
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Service deleted successfully.');
    }

    
    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'required|string|max:255',
            'Content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $imageName = null; // Initialize $imageName to prevent undefined error
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/portfolio'), $imageName);
        }
    
        $slug = Str::slug($request->title);
    
        Portfolio::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'content' => $request->Content,
            'image' => $imageName ? 'assets/images/portfolio/' . $imageName : null,
        ]);
    
        return redirect()->back()->with('success', 'Portfolio created successfully.');
    }
    

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail(decrypt($id));
        return view('admin.pages.portfolio.edit', compact('portfolio'));
    } 

    public function update(Request $request, $id)
    { 
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'required|string|max:255',
            'Content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $portfolio = Portfolio::findOrFail($id);   
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/portfolio'), $imageName);
            
            $portfolio->update(['image' =>  'assets/images/portfolio/' . $imageName]);
        } 
        $slug = Str::slug($request->title);
        $portfolio->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully.');
    }
    

    public function destroy($id)
    {
        $portfolio= Portfolio::findOrFail(decrypt($id));
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Service deleted successfully.');
    }
}
