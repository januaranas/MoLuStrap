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
         $datas = Datas::paginate(5);
        return view('show')->with('datas',$datas);
    }

    public function Create(Request $request)
    {
        $requestData = $request->all();        
        Datas::create($requestData);
        return redirect('/');
    }

    public function ReadAll()
    {
        $datas = Datas::all();
        return $datas;
    }

    public function Read($id)
    {
        $data = Datas::findOrFail($id);
        return $data;
    }

    public function Update(Request $request)
    {        
        $requestData = $request->all();     
        $data = Datas::findOrFail($request->id_update);
        $data->update($requestData);
        return redirect('/');
    }

    public function Delete(Request $request)
    {
        Datas::destroy($request->id_delete);
        return redirect('/');
    }

}
