<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::with('roles')->get();
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
      return view('Dashbord.User.index');
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
    public function store(Request $request, User $User)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $User->storeData($request->all());

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
       $User=new User;
       $User=$User->findData($id);
       return Role::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = new User;
        $data = $article->findData($id);

        $html = '<div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control" name="Name" id="editTitle" value="'.$data->name.'">
                </div>
                <div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="Password">Password:</label>
                    <input type="text" class="form-control" name="Password" id="editTitle" value="'.$data->name.'">
                </div>
                <div class="form-group">
                    <label for="Name">Description:</label>
                    <textarea class="form-control" name="email" id="editDescription">'.$data->email.'
                    </textarea>
                </div>';

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
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $article = new User;
        $article->updateData($id, $request->all());

        return response()->json(['success'=>'Article updated successfully']);


}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = new User;
        $article->deleteData($id);

        return response()->json(['success'=>'Article deleted successfully']);
    }
}
