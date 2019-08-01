<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $limit = 10;
//        $list_obj = Category::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
//        return view('admin.category.list')->with('list_obj', $list_obj);
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('admin.category.form');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(StoreCategoryRequest $request)
//    {
//        $request->validated([
//            'name' => 'required',
//            'category' => 'required'
//        ]);
//
//        $obj = new Category();
//        $obj->name = $request->get('name');
//        $obj->description = $request->get('description');
//        $obj->thumbnail = $request->get('thumbnail');
//        $obj->save();
//        Session::flash('message', 'Thêm mới thành công');
//        Session::flash('message-class', 'alert-success');
//        return redirect('/admin/category');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
////
//        $obj = Category::find($id);
//        if ($obj == null) {
//            return view('error.404');
//        }
//        return view('admin.category.show')->with('obj', $obj);
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
////
//        $obj = Category::find($id);
//        if ($obj == null || $obj->status != 1) {
//            return view('error.404');
//        }
//        return view('admin.category.edit')->with('obj', $obj);
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        $obj = Category::find($id);
//        $validate_unique = '';
//        if ($obj->name != $request->get('name')) {
//            $validate_unique = '|unique:categories';
//        }
//        $request->validate([
//            'name' => 'required|max:50|min:10' . $validate_unique,
//            'description' => 'required',
//            'thumbnail' => 'required'
//        ], [
//            'name.required' => 'Vui lòng nhập tên danh mục.',
//            'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
//            'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
//            'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
//            'description.required' => 'Vui lòng nhập mô tả cho danh mục',
//            'thumbnail.required' => 'Vui lòng nhập ảnh đại diện cho danh mục',
//        ]);
//
//        if ($obj == null || $obj->status != 1) {
//            return view('error.404');
//        }
//        $obj->name = $request->get('name');
//        $obj->description = $request->get('description');
//        $obj->thumbnail = $request->get('thumbnail');
//        $obj->save();
//        Session::flash('message', 'Sửa thành công');
//        Session::flash('message-class', 'alert-success');
//        return redirect('/admin/category');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        $obj = Category::find($id);
//        if ($obj == null) {
//            return response()->json(['message' => 'Category không tồn tại hoặc đã bị xoá!'], 404);
//        }
//        $obj->status = 0;
//        $obj->save();
//        return response()->json(['message' => 'Đã xoá thông tin danh mục'], 200);
//    }

    public function index()
    {
        $games = Game::latest()->paginate(5);

        return view('game.index',compact('games'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);

        Game::create($request->all());

        return redirect()->route('game.index')
            ->with('success','Game created successfully.');
    }

    public function show(Game $game)
    {
        return view('game.show',compact('game'));
    }

    public function edit(Game $game)
    {
        return view('game.edit',compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
        ]);

        $game->update($request->all());

        return redirect()->route('game.index')
            ->with('success','Game updated successfully');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('game.index')
            ->with('success','Game deleted successfully');
    }
}
