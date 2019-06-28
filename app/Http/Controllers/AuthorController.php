<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Author;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;

class AuthorController extends Controller
{
    private $folder = 'admin.authors';
    private $uri = 'authors';
    private $title = 'Authors';
    private $desc = 'Description';

    public function __construct(Author $table)
    {
        $this->table = $table;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['ajax'] = route($this->uri.'.data');
        $data['create'] = route($this->uri.'.create');

        return view($this->folder.'.index', $data);
    }

    public function data(Request $request)
    {
        // if ($request->ajax()) {
        //     $data = $this->table->select(['id', 'name', 'created_at']);
        //     return DataTables::of($data)
        //         ->addColumn('action', function ($index) {
        //             $tag = Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE"));
        //             $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i> Edit</a>";
        //             $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'><i class='fa fa-trash'></i> Delete</button>";
        //             $tag .= Form::close();
        //             return $tag;
        //         })
        //         ->rawColumns(['id', 'action'])
        //         ->make(true);
        // }

        $data = $this->table->select(['id', 'name', 'created_at']);
            return DataTables::of($data)
                ->addColumn('action', function ($index) {
                    $tag = Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE"));
                    $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i> Edit</a>";
                    $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'><i class='fa fa-trash'></i> Delete</button>";
                    $tag .= Form::close();
                    return $tag;
                })
                ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['title'] = $this->title;
        $data['form'] = $formBuilder->create('App\Forms\AuthorForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['url'] = route($this->uri.'.index');

        return view($this->folder.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->table->create($request->all());
        return redirect(route($this->uri.'.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = Author::find($id);
        return view('admin.authors.edit', compact('authors'));
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
        Author::find($id)->update($request->all());
        return redirect('admin/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::find($id)->delete();
        return redirect('admin/authors');
    }
}
