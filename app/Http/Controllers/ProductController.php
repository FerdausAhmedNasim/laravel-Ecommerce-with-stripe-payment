<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            
            $data = Product::query();
            return DataTables::of($data)
            ->addIndexColumn()
            //No need Blade change for show logo change only here and below part
            ->addColumn('image',function($row){
                $logoUrl= asset('uploads/Products/'.$row->image);
                return '<img src="'.$logoUrl.'" width="100" height="100">';
            })
            ->addColumn('action',function($row){
                //Edit Button
                $editUrl = route('products.edit', $row->id);
                $editBtn = '<a href="'.$editUrl.'" class="btn  btn-primary">Edit</a>';

                //Delete Button
                $deleteBtn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger ">Delete</a>';

                //Show Button
                $showUrl = route('products.show',$row->id);
                $showBtn = '<a href="'.$showUrl.'" class="btn  btn-success">Show</a>'; 

                //Return and show button to blade
                return $editBtn . ' ' . $showBtn . ' ' . $deleteBtn;
            })
            //No need Blade change for show logo change only here and upper part
            ->rawColumns (['image','action'])
            // ->rawColumns (['action'])
            ->make(true);
        }
        return view('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:555',
            'description' => 'required|string|max:555',
            'price' => 'required|numeric|max:999999',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        try {
            $data = $request->only(['name', 'description', 'price']);
    
            // Image Upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products'), $imageName);
                $data['image'] = $imageName;
            }
    
            Product::create($data);
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage())->withInput();
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $product= Product::findorFail($id);
        return view('backend.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
        $product = Product::findorFail($id);
        return view('backend.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'description' => 'string|max:255',
            'price' => 'numeric|max:999999',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        $product = Product::findorFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        
        //if new image upload
        if($request->hasFile('image'))
        {
            //Delete old logo
            if($product->image && file_exists(public_path('uploads/products/'.$product->image)))
            {
                unlink(public_path('uploads/products/'.$product->image));
            }
            //upload new logo 
            $productimage = $request->file('image');
            $imageName = time().'.'.$productimage->getClientOriginalExtension();
            $productimage->move(public_path('uploads/products'),$imageName);
            $product->image = $imageName;
        }
        //Save
        $product->save();

        //Reload and go back index file

        return redirect()->route('products.index')->with('success','Product Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return response()->json(['success'=>'product deleted successfully.']);
    }
}
