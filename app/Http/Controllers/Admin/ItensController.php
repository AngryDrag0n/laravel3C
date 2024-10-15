<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateItensRequest;
use App\Models\Item;
use App\Models\Support;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ItensController extends Controller
{
    public function show($id)
    {
        $item = Item::find($id);
        return view('admin.itens.show', compact('item'));
    }

    public function create(Support $explorer)
    {
        return view('admin.itens.create', compact('explorer'));
    }


    public function store(StoreUpdateItensRequest $request, Support $explorer)
    {
        $data = $request->all();
        $data['support_id'] = $explorer->id;
        Item::create($data);

        return redirect()->route('supports.index');

    }

    public function edit($id)
    {

        $explorer = Support::find($id);
        return view('site/itens/edit', compact('explorer'));
    }

    public function update(StoreUpdateItensRequest $request, Item $item, Support $explorer)
    {

        $item->update($request->only([
            'inventario'
        ]));

        $explorer->inventario = array_merge($explorer->inventario, [$request->item]);
        $item->inventario = $request->inventario;
        $item->save();
        $explorer->save();

        return redirect()->route('supports.index');
    }
}
