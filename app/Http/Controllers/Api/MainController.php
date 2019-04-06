<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Country;
use App\Franchise;
use App\Image;
use App\Market;
use App\Port;
use App\Webview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Governorate;
use App\City;
use App\User;
use Hash;
use Mail;
use function PHPSTORM_META\type;


class MainController extends Controller
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

    public function docmention(){

        return view('json_doc');
    }//end doc


    public function Banner($lang)
    {
        $images=Image::where('type','banner')->where('lang',$lang)->orderBy('id','desc')->get();

        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$images );
    }//end banner

    public function GetCats(){
        $cats=Category::all();
        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$cats );
    }//end cats

    public function GetCat(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $cat=Category::where('id',$request->id)->first();

        if(!$cat){
            return $this->responseJson(0,'this category not found','');
        }
        $cat=Category::with('images')->where('id',$request->id)->get();
        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$cat );
    }///end getcat

    public function GetCatFranchise(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $cat=Category::where('id',$request->id)->first();

        if(!$cat){
            return $this->responseJson(0,'this category not found','');
        }
        $cat=Category::with(['images','franchises'])->where('id',$request->id)->get();
        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$cat );
    }///end get cat




    public function Countries(){

        $countries=Country::all();
        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$countries );
    }//end of Countries


    public function Markets(){

        $markets=Market::all();
        return $this->responseJson(1, 'تمت العمليه بنجاح' ,$markets );
    }//end of Countries

    public function CheckComplete(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',

        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $user=User::where('id',$request->id)->first();

        if(!$user){
            return $this->responseJson(0,'this user not found','');
        }
        else{
            $check=$user->company_name;
            if(!$check){
                return $this->responseJson(0,"this user's data not complete",'');
            }
            else{
                return $this->responseJson(1,"this user's data completed",'');

            }
        }



    }//end checkcomplete

    public function CompleteProfile(Request $request){
        $validation = validator()->make($request->all(), [
            'id' => 'required',
            'company_name' => 'required',
            'company_type' => 'required',
            'company_phone' => 'required',
            'fax' => 'required',
            'cat_id' => 'required',
            'admin_phone' => 'required',
            'admin_conversion' => 'required',
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $user=User::where('id',$request->id)->first();

        if(!$user){
            return $this->responseJson(0,'this user not found','');
        }
        $cat=Category::where('id',$request->cat_id)->first();
        if(!$cat){
            return $this->responseJson(0,'this category not found','');
        }
        $user->company_name=$request->company_name;
        $user->company_type=$request->company_type;
        $user->company_phone=$request->company_phone;
        $user->fax=$request->fax;
        $user->cat_id=$request->cat_id;
        $user->admin_phone=$request->admin_phone;
        $user->admin_conversion=$request->admin_conversion;
        $user->save();
        return $this->responseJson(1,'user data completed sucessfuly','');

    }//end complete-profile

    public function Money(){
        $money=Port::all();
        //dd($money);
        return $this->responseJson(1,'sucess',$money);

    }



     public function GetPage($lang,$type){
        $page=Webview::where('lang',$lang)->where('type',$type)->first();
         if(!$page){
             return $this->responseJson(0,"this page not found",'');
         }
        // dd($page);
         return view('webviews.onecontent',compact('page','lang'));

     }
    public function Services($lang){
        $services=Webview::where('lang',$lang)->where('type','service')->get();
//dd($services);
        // dd($page);
        return view('webviews.services',compact('services','lang'));

    }//end services
    public function Courses($lang){
        $courses=Webview::where('lang',$lang)->where('type','course')->get();
        foreach ($courses as $course) {
            $course->image = asset('public/uploads/thumbs/' . $course->image);
        }
        //dd($courses);
        return view('webviews.courses',compact('courses','lang'));

    }// end courses

    public function Conferances($lang){
        $conferances=Webview::where('lang',$lang)->where('type','conferance')->get();
        foreach ($conferances as $conv) {
            $conv->image = asset('public/uploads/thumbs/' . $conv->image);
        }
        //dd($courses);
        return view('webviews.conferances',compact('conferances','lang'));

    }// end courses

    public function Suggestion(Request $request){

        $validation = validator()->make($request->all(), [
            'type' => 'required',
            'from' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'message' => 'required',
        ]);
        $mailh='tddesign74@gmail.com';

        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        Mail::send('emails.suggestion', ['name' =>$request->from,'type'=>$request->type,
            'email'=>$request->email,'msg'=>$request->message,
            'country'=>$request->country], function ($mail) use ($mailh)
        {

            $mail->to($mailh,'hassan')->subject(' inbox ');



        });
        return $this->responseJson(1,'sucess','message sent successfuly');


    }//end of suggesstion

    public function SendConsultant(Request $request){

        $validation = validator()->make($request->all(), [

            'from' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'message' => 'required',
        ]);
        $mailh='tddesign74@gmail.com';

        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        Mail::send('emails.consultant', ['name' =>$request->from,'type'=>$request->type,
            'email'=>$request->email,'msg'=>$request->message,
            'country'=>$request->country], function ($mail) use ($mailh)
        {

            $mail->to($mailh,'hassan')->subject(' inbox ');



        });
        return $this->responseJson(1,'sucess','message sent successfuly');

    }//end of SendConsultant

    public function SendOwner(Request $request){

        $validation = validator()->make($request->all(), [
            'id' => 'required',
            'from' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'message' => 'required',

        ]);
        $franshice=Franchise::where('id',$request->id)->first();

        if(!$franshice){
            return $this->responseJson(0,'this franchise not found','');
        }
        $user_email=User::where('id',$franshice->user_id)->first()->email;
       // return $user_email;
        $mailh=$user_email;

        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        Mail::send('emails.consultant', ['name' =>$request->from,'type'=>$request->type,
            'email'=>$request->email,'msg'=>$request->message,
            'country'=>$request->country], function ($mail) use ($mailh)
        {

            $mail->to($mailh,'hassan')->subject(' inbox ');



        });
        return $this->responseJson(1,'sucess','message sent successfuly');

    }//end of SendConsultant


}//end of class


