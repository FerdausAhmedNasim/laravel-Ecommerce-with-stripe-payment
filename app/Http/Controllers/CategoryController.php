<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
    
                $data = Category::query();
                return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                  
                    // Edit Button (AJAX Call)
                    $editUrl = route('categories.edit', $row->id);
                    $editBtn = '<a href="'.$editUrl.'" class="btn btn-sm btn-primary">Edit</a>';
    
                    // Delete Button (AJAX Call)
                    $deleteBtn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm">Delete</a>';
    
                    return  $editBtn . '&nbsp;' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
      
        return view('backend.categories.category');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required|string|max:555',
            'subcategory_name'=>'required|string|max:555',
        ]);
        try {
            Category::create($request->all());
            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_id'=>'string|max:555',
            'subcategory_name'=>'string|max:555',
        ]);
        try {
            $category->update($request->only(['category_id', 'subcategory_name']));
            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = Category::find($id);
        $data->delete();
        return response()->json(data:['success'=>'Category deleted successfully.']);
    }
}
