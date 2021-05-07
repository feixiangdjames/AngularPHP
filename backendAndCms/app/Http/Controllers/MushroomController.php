<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MushroomController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function show(Request $request){
    $input = $request->all();
    $mushroom = DB::table('mushroom');
    $mushroom->leftjoin('types', 'mushroom.types_id', '=', 'types.types_id');
    $mushroom->select('mushroom.mushroom_id','mushroom.title', 'mushroom.price','mushroom.img','mushroom.rate','types.name as subtitle','mushroom.description');
    if($input['id']){
        $mushroom->where('mushroom_id',$input['id']);
    }
    return $mushroom->get();
}

// controller of CMS index
    public function index()
    {
        $mushroom = DB::table('mushroom');
        $mushroom->leftjoin('types', 'mushroom.types_id', '=', 'types.types_id');
        $mushroom->select('mushroom.mushroom_id','mushroom.title', 'mushroom.price','mushroom.img','mushroom.rate','types.name as subtitle','mushroom.description');

        $mushroom=$mushroom->get();
        return view('mushroom.index')->with('sisi',$mushroom);
    }

    public function create()
    {
        $types = DB::table('types')->get()->pluck('name','types_id');
        return view('mushroom.create')->with('sisitype',$types);
    }
    public function store(Request $request)
    {
 $file=$request->file('img');
        $folder_name = "uploads/images/mushroom/" . date("Ym/", time());
        $upload_path = public_path() . '/' . $folder_name;
        $extension  =  strtolower($file->getClientOriginalExtension())?:'png';
        $fileName='https://myprojectcms.tk/'.$file->getFilename().'.'.$extension;
        $file->move($upload_path, $fileName);

        DB::table('mushroom')->insert([
            'title'=>$request->input('title'),
            'price'=>$request->input('price'),
            'rate'=>$request->input('rate'),
            'img'=>$folder_name.$fileName,
            'description'=>$request->input('description'),
            'types_id'=>$request->input('category_id'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->action('App\Http\Controllers\MushroomController@index');
    }
}
