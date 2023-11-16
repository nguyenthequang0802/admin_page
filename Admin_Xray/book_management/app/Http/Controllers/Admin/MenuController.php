<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::where('menu_parent_id', '=', 0)->with('childs')->get();
        return view('admin.content.menu.index', ['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $menus = Menu::where('menu_parent_id', '=', 0)->with('childs')->get();
        return view("admin.content.menu.add", ['menus'=>$menus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $menu = new Menu();
        $menu['menu_name'] = $input['menuName'];
        $menu['menu_parent_id'] = $input['menuParentId'];
        $menu['menu_url'] = $input['menuUrl'];
        $menu->save();
        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $menus = Menu::where('menu_parent_id', '=', 0)->with('childs')->get();
        $item = Menu::find($id);
        return view("admin.content.menu.edit", ['menus'=>$menus, 'item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::find($id);
        $input = $request->all();
        $menu['menu_name'] = $input['menuName'];
        $menu['menu_parent_id'] = $input['menuParentId'];
        $menu['menu_url'] = $input['menuUrl'];
        $menu->save();
        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteChilds($id){
        $item = Menu::find($id);
        if($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChilds($child->id);
                }
            }
            $item->delete();
        }
    }

    public function destroy(string $id)
    {
        //
        $this->deleteChilds($id);
        return redirect()->route("admin.menu.index");
    }
}
