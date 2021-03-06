<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::orderBy('id', 'ASC')->get();
        // return $tables;
        return view('tables/index', ['tables' => $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new Table();
        $table->name = $request->name;
        $table->number = $request->number;
        $table->status = $request->status;

        // return $table;
        $table->save();

        if (!empty($table)) {
            return Redirect::route('admin.tables.index')->with(['message' => 'Tạo thành công']);
        }
        return Redirect::route('admin.tables.index')->with(['message' => 'Tạo thất bại']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editStatus($id, $status)
    {
        $table = Table::find($id);
        $table->status = $status;
        $table->id = $id;
        // return $table;
        $table->save();

        return Redirect::route('admin.tables.index')->with(['message' => 'Cập nhật thành công']);
    }
}
