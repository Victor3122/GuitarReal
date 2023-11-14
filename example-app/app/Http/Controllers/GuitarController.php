<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $guitars = Guitar::all();
        return view('guitars.index', ['guitars' => $guitars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect('guitar')->with('status', 'Failed')
                ->with('error', 'Validation failed')
                ->withErrors($validator)
                ->withInput();
        }
    
        Guitar::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect('guitar')->with('status', 'Guitar Created Successfully');
    }
    // public function store(Request $request): RedirectResponse
    // {
    //     $validator = validator($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|string|max:255',
    //         'description' => 'required'
    //     ]);
    
    //     if ($validator->fails()) {
    //         return redirect()->route('guitars.create')
    //             ->with('error', 'Validation failed')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    
    //     try {
    //         Guitar::create([
    //             'name' => $request->name,
    //             'price' => $request->price,
    //             'description' => $request->description,
    //         ]);
    
    //         return redirect('guitar')->with('status', 'Guitar Created Successfully');
    //     } catch (\Exception $e) {
    //         return redirect('guitar/create')->with('error', 'Failed to create guitar. Please try again.');
    //     }
    // }

    public function create_guitars(Request $request){
        $guitar = new Guitar();
        Guitar::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return response()->json([
        
        'message'   =>  'Guitar',
        'status'    =>  'success',
        'guitars'   =>  $guitar
    ]);
    }

    
    public function show(Guitar $guitar): View
    {
        $guitars = Guitar::all();
        return view('guitars.show', ['guitars' => $guitars]);
    }
     //@return JSON $guitars
     public function get_guitars()
     {
         $guitars = Guitar::get();
         return response()->json([
             'message'   =>  'Guitar',
             'status'    =>  'success',
             'guitars'   =>  $guitars
         ]);
     }
        
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $guitar = Guitar::find($id);
        return view('guitars.edit', ['guitar' => $guitar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect('guitar')->with('status', 'Failed')
                ->with('error', 'Validation failed')
                ->withErrors($validator)
                ->withInput();
        }
    
        $guitar = Guitar::find($id);
        $guitar->name = $request->name;
        $guitar->price = $request->price;
        $guitar->description = $request->description;
        $guitar->save();
    

        return redirect('guitar')->with('status', 'Guitar Updated Successfully');
    }
//     public function update($id, Request $request): RedirectResponse
// {
//     $validator = validator($request->all(), [
//         'name' => 'required|string|max:255',
//         'price' => 'required|string|max:255',
//         'description' => 'required'
//     ]);

//     if ($validator->fails()) {
//         return redirect()->route('guitars.edit', $id)
//             ->with('error', 'Validation failed')
//             ->withErrors($validator)
//             ->withInput();
//     }

//     try {
//         $guitar = Guitar::find($id);
//         $guitar->name = $request->name;
//         $guitar->price = $request->price;
//         $guitar->description = $request->description;
//         $guitar->save();

//         return redirect('guitar')->with('status', 'Guitar Updated Successfully');
//     } catch (\Exception $e) {
//         return redirect("guitar/$id/edit")->with('error', 'Failed to update guitar. Please try again.');
//     }
// }
    public function update_guitar($id, Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required'
        ]);
    
        $guitar = Guitar::find($id);
        $guitar->name = $request->name;
        $guitar->price = $request->price;
        $guitar->description = $request->description;
        $guitar->save();
    
        return response()->json([
            'message' => 'Guitar updated successfully!',
            'data' => $guitar
        ]);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {   
        $guitar = Guitar::find($id);
        $guitar->delete();

        return redirect('/guitar')->with('status', 'Guitar Delete Successfully');
    }

    public function delete_guitar($id) {
        $guitar = Guitar::find($id);
        $guitar->delete();
    
        return response()->json([
            'message' => 'Guitar deleted successfully!'
        ]);
    }
    public function __invoker(Request $request){
       
    $file =$request->file('avatar');
    return Storage::putFile('laravel-boy', $file);
    }

}