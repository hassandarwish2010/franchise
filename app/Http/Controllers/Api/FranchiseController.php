<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Country;
use App\Franchise;
use App\Franchise_market;
use App\FranchiseType;
use App\Image;
use App\Market;
use App\Period;
use App\Port;
use App\Token;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class FranchiseController extends Controller
{
    private function responseJson($status, $message, $data = null)
    {
        $response = [

            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response);
    }
///////////////////////////////

public function GetAllFranchise(){
    $franchises=Franchise::all();
    return $this->responseJson(1,'success',$franchises);
}


    //////////////////////////////////////////
public function GetFranchiseType(){
   $franchise_type=FranchiseType::all();
    return $this->responseJson(1,'success',$franchise_type);
}//end franchisetype

    public function GetPeriod(){
        $period=Period::all();
        return $this->responseJson(1,'success',$period);
    }//end of getpriod

    public function GetFranchise(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $franchise=Franchise::where('id',$request->id)->first();

        if(!$franchise){
            return $this->responseJson(0,'this franchise not found','');
        }
        else{
            $franchise=Franchise::with(['franchise_market','images','ports','periods','countries','categories'])->where('id',$request->id)->first();
            return $this->responseJson(1,'operation success',$franchise);
        }
    }//end of getfranchise

    public function CreateFranchise(Request $request){

        $validation = validator()->make($request->all(), [
            'details' => 'required',
            'name' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'country_id' => 'required',
            'establish_date' => 'required|date',
            'period_id' => 'required',
            'image'=>'required|image',
            'franchise_type_id'=>'required|integer',
            'franchise_type_value'=>'required|integer',
            'owner_ship_commission'=>'required|integer',
            'marketing_commission'=>'required|integer',
            'existing_local_branch'=>'sometimes|nullable|integer',
            'undercost_local_branch'=>'sometimes|nullable|integer',
            'existing_outside_branch'=>'sometimes|nullable|integer',
            'undercost_outside_branch'=>'sometimes|nullable|integer',
            'other_commission'=>'sometimes|nullable',
            'other_commission_value'=>'sometimes|nullable|integer',
            'space'=>'required|array|min:1',
            'total_Investment'=>'required|array|min:1',
            'franchise_market'=>'required|array|min:1',
            'banners'=>'required|array|min:1',
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $arr=count($request->franchise_market);
        $franchiseCount=count($request->franchise_market);
        $banners=count($request->banners);
       // return $request->space[1];
        $period=Period::where('id',$request->period_id)->first();
        if(!$period){
            return $this->responseJson(0,'this period not found','');
        }
        $user=User::where('id',$request->user_id)->first();
        if(!$user){
            return $this->responseJson(0,'this user not found','');
        }
        //$ids=Market::whereIn('id',$request->franchise_market)->get();
        //dd($ids);
        foreach ($request->franchise_market as $id){
            $market=Market::where('id',$id)->first();
            if(!$market){
                return $this->responseJson(0,'market_id not found'.' '.$id,'');

        }}
        $category=Category::where('id',$request->category_id)->first();
        if(!$category){
            return $this->responseJson(0,'this category not found','');
        }
        $country=Country::where('id',$request->country_id)->first();
        if(!$country){
            return $this->responseJson(0,'this country not found','');
        }

        $franchise_type=FranchiseType::where('id',$request->franchise_type_id)->first();
        if(!$franchise_type){
            return $this->responseJson(0,'this franchise type not found','');
        }
        $request->image = uploadImage($request->image);
        $franchise = Franchise::create($request->all());
        $franchise->image = $request->image;
        $franchise->save();

        for ($i=0;$i<$arr;$i++){
            $port = new Port();
            $port->franchise_id = $franchise->id;
            $port->space = $request->space[$i];
            $port->total_Investment = $request->total_Investment[$i];
            $port->save();
        }

        for ($i=0;$i<$franchiseCount;$i++){
            $frmarket = new Franchise_market();
            $frmarket->franchise_id = $franchise->id;
            $frmarket->market_id = $request->franchise_market[$i];
            $frmarket->save();
        }

        for ($i=0;$i<$banners;$i++){
            $request->image = uploadImage($request->banners[$i]);
            $image = new Image();
            $image->image = $request->image;
            $image->type = 'franchise';
            $image->type_id = $franchise->id;
            $image->save();
        }

        $tokens =Token::where('token', '!=' ,'')->pluck('token')->toArray();

        if (count($tokens)) {
            $body  = [

                'en' => 'New franchise added',
                'ar' => 'تم اضافة علامة جديدة'

            ];

            $title ='message';

            $data =[

                'franchise_name' =>$franchise->id ,
                'image' => $franchise->image,

            ];

            $send = notifyByFirebase($title, $body, $tokens, $data, $is_notification =false);//$is_notification false for android develoer and true for ios
          // return $send;
        }


        return $this->responseJson(1,'the data inserted successfuly',$franchise);
    }//end of crate franchise

    public function GetUserFranchise(Request $request){
        $validation = validator()->make($request->all(), [
            'user_id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $franchises=Franchise::where('user_id',$request->user_id)->get();

        if(count($franchises)<1){
            return $this->responseJson(0,'No franchises for this user','');
        }
        else{
            return $this->responseJson(1,'operation success',$franchises);
        }

    }//get user franchise

    public function DeleteFranchise(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $franchise=Franchise::where('id',$request->id)->first();

        if(!$franchise){
            return $this->responseJson(0,'This franchise not found','');
        }
        else{
            Franchise::destroy($request->id);
            return $this->responseJson(1,'operation success','deleted successfuly');
        }
    }//end delete franchise

    public function LastFranchise(){
        $franchis=Franchise::orderby('id','desc')->limit(8)->get();
        return $this->responseJson(1,'operation success',$franchis);

    }//end of LastFranchise

    public function Search(Request $request){
//        $validation = validator()->make($request->all(), [
//            'category_id' => 'required',
//            'franchise_id' => 'required',
//        ]);
//        if ($validation->fails()) {
//            $data = $validation->errors();
//            return $this->responseJson(0,$validation->errors()->first(),$data);
//        }
//        $franchise=Franchise::
//            where('category_id',$request->category_id)->get();
//        return $this->responseJson(1,'operation success',$franchise);
    }//end Search


}