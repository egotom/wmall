<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Store;
use Auth;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function overview()
    {
        return view('admin.overview');
    }
    public function album()
    {
        return view('admin.album');
    }
    public function menu()
    {
        return view('admin.menu');
    }
    public function menuEdit($id)
    {
        //dd($id);
        return view('admin.menuEdit');
    }
    public function store()
    {
        $store=Store::where('user_id', Auth::user()->id)->first();
        //dd($store->name);
        return view('admin.store',compact('store'));
    }
    public function storeAdd()
    {
        //dd(request()->all());

        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255','min:6'],
            'avg_price' => ['required', 'string', 'max:255','min:6'],
            'address' => ['required', 'string', 'max:255','min:6'],
            'telphone' => ['required', 'string', 'max:255','min:6'],
            'part_time' => ['required', 'string', 'max:255','min:6']
        ]);
        $store= new Store;
        $store->user_id=Auth::user()->id;
        $store->name=request('name');
        $store->avg_price=request('avg_price');
        $store->address=request('address');
        $store->telphone=request('telphone');
        $store->part_time=request('part_time');
        $store->takeout=request('takeout');
        $store->save();
        $ok=["保存成功！"];
        return view('admin.store',compact('ok'));
    }
    public function storeEdit()
    {
        dd(request()->all());

        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255','min:6'],
            'avg_price' => ['required', 'string', 'max:255','min:6'],
            'address' => ['required', 'string', 'max:255','min:6'],
            'telphone' => ['required', 'string', 'max:255','min:6'],
            'part_time' => ['required', 'string', 'max:255','min:6']
        ]);
        $store= Store::where('user_id', Auth::user()->id)->first();
        $store->user_id=Auth::user()->id;
        $store->name=request('name');
        $store->avg_price=request('avg_price');
        $store->address=request('address');
        $store->telphone=request('telphone');
        $store->part_time=request('part_time');
        $store->takeout=request('takeout');
        $store->save();
        $ok=["保存成功！"];
        return view('admin.store',compact('ok'));
    }

    public function statistics()
    {
        return view('admin.statistics');
    }
    public function setting()
    {
        return view('admin.setting');
    }

    public function albumAdd(){
		return null;
	}
}
