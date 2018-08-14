<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\CategoryRequest;
use App\Category;
use Laracasts\Flash\Flash;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $c = Category::orderby('id','ASC')->paginate(10);

        return view('admin.categories.index')->with('list',$c);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
        $category  = new Category($request->all());
        $category->name = $request->name;

        $category-> save();

        Flash("Categoria ha sido correctamente agragada . Nombre: ".$category->name,'success')->important();

        return redirect()->route('categories.index');
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
        $c = Category::find($id);

        return view('admin.categories.edit')->with('categoria',$c);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        //
        $c = Category::find($id);

        $c-> fill($request->all());

        $c->save();

        Flash("Se ha editado exitosamente la categoria : ".$c->name,'success')->important();

        return redirect()->route('categories.index');

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
        $c = Category::find($id);
        $c->delete();

       Flash("Se ha borrado existosamente la categoria: ".$c->name,'warning')->important();

        return redirect()->route('categories.index');
    }
}
