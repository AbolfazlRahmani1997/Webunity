<?php

namespace App\Http\Controllers;

use App\Category;
use App\image;
use App\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {





        if ($request->ajax()) {
            $data = Post::latest()->with('category','user','images')->get();

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
        return view('Dashbord.Post.index');
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
    public function store(Request $request,Post $post)
    {


        Storage::put('file1.txt', $request);

        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',


        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        $imageName = time().'.'.$request->file('image')->extension();
        $imagePath=$request->file('image')->storeAs('images', $imageName, 'public');
        $image=new image;
        $image->name=$imageName;
        $image->path=$imagePath;
       $post= $post->storeData($request->all());
        $post->images()->save($image);

        return response()->json(['success'=>$request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post=new Post;
        $Post=$Post->findData($id);
        return $Post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = new Post;
        $data = $article->findData($id);

        $html = '<div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="name">تیتیر:</label>
                    <input type="text" class="form-control" name="Name" id="editTitle" value="'.$data->title.'">
                </div>
                <div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="name">متن:</label>
                    <textarea class="description"  name="body" id="editbody" value="'.$data->body.'"></textarea>

                </div>
  <div class="form-group" style="text-align: right;direction: rtl;">
                    <label for="name">عکس:</label>
                    <input class="form-control"type="file"  name="image" id="editimage" multiple/>
                </div>

              ';

        return response()->json(['html'=>$html]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
