<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Pets;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PetsController extends Controller
{
    //provide data to front end
    public function show(Request $request){
        $input = $request->all();
        $pets = DB::table('pets');
            $pets->leftjoin('category', 'pets.category_id', '=', 'category.category_id');
            $pets->select('pets.pets_id','pets.title', 'pets.price','pets.img','pets.rate','category.name as category','pets.description');
            if($input['id']){
                $pets->where('pets_id',$input['id']);
            }
            return $pets->get();

                   }

// controller of CMS index
    public function index()
    {
        $pets = DB::table('pets');
        $pets->leftjoin('category', 'pets.category_id', '=', 'category.category_id');
        $pets->select('pets.pets_id','pets.title',
            'pets.price', 'pets.rate','category.name as category','pets.img','pets.description');
        $pets=$pets->get();
        return view('pets.index')->with('pets',$pets);
    }

    public function create()
    {
        $category = DB::table('category')->get()->pluck('name','category_id');
        return view('pets.create')->with('category',$category);
    }

    public function store(Request $request): RedirectResponse
    {
        $file=$request->file('img');
        $folder_name = "uploads/images/product/" . date("Ym/", time());
        $upload_path = public_path() . '/' . $folder_name;
        $extension  =  strtolower($file->getClientOriginalExtension())?:'png';
        $fileName=$file->getFilename().'.'.$extension;
        $file->move($upload_path, $fileName);

            DB::table('pets')->insert([
                'title'=>$request->input('title'),
                'price'=>$request->input('price'),
                'rate'=>$request->input('rate'),
                'img'=>'http://homestead.test/'.$folder_name.$fileName,
                'description'=>$request->input('description'),
                'category_id'=>$request->input('category_id'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        return redirect()->action('App\Http\Controllers\PetsController@index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
         return $request->all();
         //DB::table('pets')->where('pets_id', ind->id)->delete();
     //return redirect()->action('App\Http\Controllers\PetsController@index');
    }
}







//$pets = DB::table('pets')->get();
// $pets=Pets::get();
//$category=Category::get();
// return $category->toJson();
// $pets=Pets::where('pets_id',$payload)->leftjoin("category",'category_id','=','category_id')->select('title','price','category')->get();
/* $query = Pets::query();
        isset($payload['pets_id']) && $query->where('pets_id', '=', $payload['pets_id']);
        isset($payload['title']) && $query->where('title', 'like', $payload['title'] . "%");
        isset($payload['category_id']) && $query->whereInwhere('category_id', '=', $payload['category_id']);
        $query->get();
        return $query->toJson();
        //config('app.url');
        //return var_dump($fileName);
*/
