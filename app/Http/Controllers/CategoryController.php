<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {


        if($request->has('q')){
            $data = [];
            $search = $request->q;
            $data =Category::select("id","name")
                ->where('name','LIKE',"%$search%")
                ->get();
            return response()->json($data);
        }

        if ($request->ajax()) {
            $data = Category::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $btn = '<button type="button" class="btn btn-success btn-sm" id="getEditArticleData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteArticleModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#ChengRoleModal" class="btn btn-info btn-sm" id="getRoleId">Role</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Dashbord.Category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $category->storeData($request->all());

        return response()->json(['success'=>'Article added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Category=new Category;
        $Category=$Category->findData($id);
        return $Category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = new Category;
        $data = $article->findData($id);

        $html = '<div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="name">نام:</label>
                    <input type="text" class="form-control" name="Name" id="editTitle" value="'.$data->name.'">
                </div>
              ';

        return response()->json(['html'=>$html]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        return "asdfsd";
        $validator = \Validator::make($request->all(), [
            'name' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $article = new Category;
        $article->updateData($id, $request->all());

        return response()->json(['success'=>'Article updated successfully']);


    }
    public function dataAjax(Request $request)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = new Category;
        $article->deleteData($id);

        return response()->json(['success'=>'Article deleted successfully']);
    }
}
