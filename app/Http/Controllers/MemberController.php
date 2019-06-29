<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;
use App\Model\TypeMember;
use Kris\LaravelFormBuilder\FormBuilder;
use DataTables;
use Form;

class MemberController extends Controller
{
    private $folder = 'admin.members';
    private $uri = 'members';
    private $title = 'Members';
    private $desc = 'Description';

    public function __construct(Member $table)
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
        $data = Member::select(['id', 'type_member_id', 'name', 'address', 'phone', 'created_at']);
            return DataTables::of($data)
                ->editColumn('type_member_id', function ($index) {
                    return ($index->type_member->name) ?? '-';
                })
                ->addColumn('action', function ($index) {
                    $tag = Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE"));
                    $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i> Edit</a>";
                    $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'><i class='fa fa-trash'></i> Delete</button>";
                    $tag .= Form::close();
                    return $tag;
                })
                ->rawColumns(['id','action'])
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
        $data['form'] = $formBuilder->create('App\Forms\MemberForm', [
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
        return redirect(route($this->uri.'.index'))->with('success', 'Data berhasil diinput');
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
    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['title'] = $this->title;
        $tbl = $this->table->find($id);
        $data['form'] = $formBuilder->create('App\Forms\MemberForm', [
            'method' => 'PUT',
            'model' => $tbl,
            'url' => route($this->uri.'.update', $id)
        ]);

        $data['url'] = route($this->uri.'.index');
        return view($this->folder.'.create', $data);
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
        $this->table->findOrFail($id)->update($request->all());
        return redirect(route($this->uri.'.index'))->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tb = $this->table->findOrFail($id);
        $tb->delete();
        return redirect(route($this->uri.'.index'))->with('success', 'Data berhasil dihapus');
    }
}
