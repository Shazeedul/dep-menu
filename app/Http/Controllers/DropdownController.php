<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DropdownController extends Controller
{
    public function index()
    {
        $data['divisions'] = Division::get(["name", "id"]);
        return view('dropdown', $data);
    }
    public function fetchDistrict(Request $request)
    {
        $data['districts'] = District::where("division_id",$request->division_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchUpazila(Request $request)
    {
        $data['upazilas'] = Upazila::where("district_id",$request->district_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function string(Request $request){
        $request->validate([
            'division' => 'required|max:20',
            'district' => 'required|max:20',
            'upazila' => 'required|max:20',
            'file' => 'required',
        ]);
        // $data = array(
        //     'division-dd' => $request ->input('division'),
        //     'district-dd' => $request ->input('district'),
        //     'upazila-dd' => $request ->input('upazila'),
        // );

        $division_id = $request ->division;
        $district_id = $request ->district;
        $upazila_id = $request ->upazila;
        $division = Division::where('id', $division_id)->first();
        $district = District::where('id', $district_id)->first();
        $upazila = Upazila::where('id', $upazila_id)->first();

        $sdivision = Str::upper(Str::substr($division->name, 0, 3));
        $sdistrict = Str::upper(Str::substr($district->name, 0, 3));
        $supazila = Str::upper(Str::substr($upazila->name, 0, 3));

        $slug = $sdivision.'_'.$sdistrict.'_'.$supazila;
        $path = $division->name.'/'.$district->name.'/'.$upazila->name.'/';
        

        // dd($file);
        // $file = time(). $request->file('file')->getClientOriginalName();
        $file = $request->file('file');          
        
        // $store = $request->file('file')->storeAs($path, $file);

        $store = Storage::put($path, $file);
           
        // dd($division_id);

        switch ($division_id) {
            case '1':
                return $store;
                break;
            case '2':
                return $store;
                break;
            case '3':
                return $store;
                break;
        }
    }
}
