<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequestCategory;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    protected $request;
    private $repository;

    public function __construct(Request $request, Category $category)
    {
        $this->request = $request;
        $this->repository = $category;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id')->paginate(5);
        return view('category.list', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestCategory $request)
    {
        $data = $request->all();
        Category::create($data);
        Session::flash('mensagem_ok', 'Categoria cadastrada!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        if (!$category) {
            return redirect()->back();
        }
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequestCategory $request, $id)
    {
        $data = $request->all();
        $category = $this->repository->find($id);
        $category->update($data);
        Session::flash('mensagem_ok', 'Categoria editada!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->repository->where('id', $id)->first();
        $category->delete();
        Session::flash('mensagem_ok', 'Categoria excluída!');
        return redirect()->route('category.index');
    }
}
