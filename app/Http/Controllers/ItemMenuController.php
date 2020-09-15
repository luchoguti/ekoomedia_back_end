<?php

namespace App\Http\Controllers;

use App\Models\ItemMenu;
use Illuminate\Http\Request;

class ItemMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ItemMenu::query ()->paginate ();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ItemMenu::query ()->where ('id_items_menu','=',$id)->paginate ();
    }
}
