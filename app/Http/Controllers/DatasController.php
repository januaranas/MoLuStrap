<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Datas;

class DatasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke()
    {
        $users = Datas::all();
        return $users;
    }

    public function Create(Request $request)
    {
        $requestData = $request->all();        
        Datas::create($requestData);
        return 'Done';
    }

    public function Read($id)
    {
        $data = Datas::findOrFail($id);
        return $data;
    }

    public function Update(Request $request, $id)
    {
        $requestData = $request->all();        
        $data = Datas::findOrFail($id);
        $data->update($requestData);
        return 'done';
    }

    public function Delete($id)
    {
        Datas::destroy($id);
        return 'done';
    }

}
