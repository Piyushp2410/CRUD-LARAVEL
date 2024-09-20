<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Addblogs;
use Symfony\Contracts\Service\Attribute\Required;

class AddblogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addblogs');
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
    public function store(Request $request)
    {
        $request -> validate([
            "title"=> "required",
            "description"=> "required",
        ]);
        $data=array(
            "title" => $request->title,
            "description"=>$request->description,
        );
        Addblogs::create($data);
        return redirect('/addblogs')->with('success', 'Thank for adding blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Addblogs::all();
        return view('/manageblogs',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editblogs = Addblogs::where('id',$id)->first();
        return view('/editblogs',['editblogs'=>$editblogs]);
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
        $request -> validate([
            "title"=> "required",
            "description"=> "required",
        ]);
        $data=array(
            "title" => $request->title,
            "description"=>$request->description,
        );
        Addblogs::where('id', $id)->update($data);
        return redirect('/manageblogs')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Addblogs::where('id',$id)->delete();
        return redirect('/manageblogs')->with('del','Deleted Successfully');
    }
}
