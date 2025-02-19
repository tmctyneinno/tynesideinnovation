<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MenuItem;
use App\Models\DropdownItem;
use App\Models\Slider;
use App\Http\Traits\AdminTrait;
use Exception; 

class SliderController extends Controller
{
    use AdminTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){
        $sliders = Slider::all();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function create(){
        return view('admin.pages.slider.create');
    }
   
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'required|string|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048', // File must be an image with a max size of 5MB
        ]);
        try{
            
            if ($request->hasFile('image')) {
                $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('assets/images/slider'), $imageName);
                $imagePath = 'assets/images/slider/' . $imageName;
            }
            
            Slider::create([
                'title' => $validatedData['title'],
                'caption' => $validatedData['caption'],
                'image' => $imagePath ?? null,
            ]);

            return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
        } catch (Exception $e) {
            return redirect()->route('admin.slider.index')->with('error', 'Slider creation failed. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail(decrypt($id));
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image with max size of 2MB
        ]);

        $slider = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
             if (File::exists(public_path($slider->image))) {
                File::delete(public_path($slider->image));
            }

            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('sliders'), $imageName);

            $slider->image = 'sliders/' . $imageName;
        }

        $slider->title = $validatedData['title'];
        $slider->caption = $validatedData['caption'];

        $slider->save();

         return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully!');
    }
 
    public function validateSlider(Request $request, $isCreate)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'caption' => 'nullable|string',
        ];

        if ($isCreate) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $request->validate($rules);
    }

    public function destroy($slider)
    {
        $slider = Slider::findOrFail(decrypt($slider));
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }

   
}
