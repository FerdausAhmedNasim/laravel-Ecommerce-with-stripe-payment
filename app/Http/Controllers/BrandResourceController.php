<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            
            $data = Brand::query();
            return DataTables::of($data)
            ->addIndexColumn()
            //No need Blade change for show logo change only here and below part
            ->addColumn('brand_logo',function($row){
                $logoUrl= asset('uploads/brands/'.$row->brand_logo);
                return '<img src="'.$logoUrl.'" width="100" height="100">';
            })
            ->addColumn('action',function($row){
                //Edit Button
                $editUrl = route('bands.edit', $row->id);
                $editBtn = '<a href="'.$editUrl.'" class="btn  btn-primary">Edit</a>';

                //Delete Button
                $deleteBtn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger ">Delete</a>';

                //Show Button
                $showUrl = route('bands.show',$row->id);
                $showBtn = '<a href="'.$showUrl.'" class="btn  btn-success">Show</a>'; 

                //Return and show button to blade
                return $editBtn . ' ' . $showBtn . ' ' . $deleteBtn;
            })
            //No need Blade change for show logo change only here and upper part
            ->rawColumns (['brand_logo','action'])
            // ->rawColumns (['action'])
            ->make(true);
        }
        return view('backend.bands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name'=>'required|string|max:255',
            'brand_logo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //Handle file Upload
        if($request->hasFile('brand_logo')){
            $brandLogo = $request->file('brand_logo');
            $logoName = time().'.'.$brandLogo->getClientOriginalExtension();
            $brandLogo->move(public_path('uploads/brands'),$logoName);
        }
        //save to database
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $logoName;
        $brand->save();

        //redirect with success message
        return redirect()->route('bands.index')->with('success','Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $band= Brand::findorFail($id);
        return view('backend.bands.show',compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $band = Brand::findorFail($id);
        return view('backend.bands.edit',compact('band'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'brand_name' => 'string|max:255',
            'brand_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $brand = Brand::findorFail($id);
        $brand->brand_name = $request->brand_name;
        //if new image upload
        if($request->hasFile('brand_logo'))
        {
            //Delete old logo
            if($brand->brand_logo && file_exists(public_path('uploads/brands/'.$brand->brand_logo)))
            {
                unlink(public_path('uploads/brands/'.$brand->brand_logo));
            }
            //upload new logo 
            $brandLogo = $request->file('brand_logo');
            $logoName = time().'.'.$brandLogo->getClientOriginalExtension();
            $brandLogo->move(public_path('uploads/brands'),$logoName);
            $brand->brand_logo = $logoName;
        }
        //Save
        $brand->save();

        //Reload and go back index file

        return redirect()->route('bands.index')->with('success','Brand Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Brand::find($id);
        $data->delete();
        return response()->json(['success'=>'Band deleted successfully.']);
    }
}
