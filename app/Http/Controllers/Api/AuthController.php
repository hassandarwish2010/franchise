<?php

namespace App\Http\Controllers\Api;

use App\Token;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Governorate;
use App\City;
use App\User;
use Hash;
use Mail;


class AuthController extends Controller
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




    public function register(Request $request)
    {
        $validator = validator()->make($request->all(),[

            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',//confirmed
            'phone' => 'required|unique:users',
            'country' => 'required',
            'city' => 'required',



        ]);
        if ($validator->fails()) {

            return $this->responseJson(0 , $validator->errors()->first() , $validator->errors());
        }
        $code = rand(11111, 99999);
        $request->merge(['password'=> bcrypt($request->password)]);
        $user = User::create($request->all());
        $user->api_token = str_random(60);
        $user->code=$code;
        $user->save();
        Mail::send('emails.code', ['code' => $code], function ($mail) use($user)
        {

            $mail->to($user->email, $user->name)->subject('Verification code ');



        });
        return $this->responseJson(1, 'تم الاضافه بنجاح' , [

            'api_token' =>$user->api_token,
            'user' => $user,

        ]);








    }



    public function login(Request $request){
//dd($request);
        $validator = validator()->make($request->all(),[

            'password' => 'required',
            'username' => 'required',

        ]);
        if ($validator->fails()) {

            return $this->responseJson(0 , $validator->errors()->first() , $validator->errors());
        }

        $user = User::where('username', $request->username)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {


                return $this->responseJson(1 , 'تم تسجيل الدخول' , [

                    'api_token' =>$user->api_token,

                    'user' => $user

                ]);

            }else {

                return $this->responseJson(0 , 'البيانات غير صحيحة' );

            }

        }else {
            return $this->responseJson(0 , 'البيانات غير صحيحة' );

        }
        //return auth()->guard('api')->validate($request->all()); ( With session Not Api)
    }///end login
    ///
    public function Verfiy(Request $request){
        $validation = validator()->make($request->all(), [
            'code' => 'required',
            'email'=>'required|email'
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }
        $user = User::where('email', $request->email)->first();
        if ($user->code==$request->code) {
             $user->activecode=1;
             $user->save();
//dd($user->activecode);

            if ($user->activecode) {
                return $this->responseJson(1,' تم تنشيط الحساب','');
            }else{
                return $this->responseJson(0,'حدث خطأ ، حاول مرة أخرى');
            }
        }else{
            return $this->responseJson(0,'عفوا ... هذا الكود غير صحيح');
        }
    }// end verify

    public function registerToken(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'token' => 'required',
            'platform' => 'required|in:android,ios'

        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0,$validation->errors()->first(),$data);
        }
        Token::where('token',$request->token)->delete();
        Token::create($request->all());
        return responseJson(1,'تم التسجيل بنجاح');
    }//end function registerToken

    public function removeToken(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'token' => 'required',
        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0,$validation->errors()->first(),$data);
        }

        Token::where('token',$request->token)->delete();

        return responseJson(1,'تم  الحذف بنجاح بنجاح');
    }//end of removeToken

/////////////////////
    public function  reset(Request $request)
    {

        $validation = validator()->make($request->all(), [
            'phone' => 'required'
        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }

        $user = Client::where('phone', $request->phone)->first();

        if ($user) {

            $code = rand(1111, 9999);
            $update = $user->update(['pin_code' =>$code]);

            if ($update) {

                // send email
//                Mail::send('emails.reset', ['code' => $code], function ($mail) use($user) {
//                    $mail->from('app.mailing.test@gmail.com', 'تطبيق باب رزق');
//
//                    $mail->to($user->email, $user->name)->subject('إعادة تعيين كلمة المرور');
//                });



                return $this->responseJson(1,'برجاء فحص هاتفك',['pin_code_for_test' => $code]);
            }else{
                return $this->responseJson(0,'حدث خطأ ، حاول مرة أخرى');
            }
        }else{
            return $this->responseJson(0,'لا يوجد أي حساب مرتبط بهذا الهاتف');
        }
    }




    public function password(Request $request){

        $validation = validator()->make($request->all(), [
            'pin_code' => 'required',
            'password' => 'confirmed'
        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return $this->responseJson(0,$validation->errors()->first(),$data);
        }

        $user = Client::where('pin_code',$request->pin_code)->where('pin_code','!=',0)->first();

        if ($user)
        {
            $user->password = bcrypt($request->password);
            $user->pin_code = null;

            if ($user->save())
            {
                return $this->responseJson(1,'تم تغيير كلمة المرور بنجاح');
            }else{
                return $this->responseJson(0,'حدث خطأ ، حاول مرة أخرى');
            }
        }else{
            return $this->responseJson(0,'هذا الكود غير صالح');
        }
    }



}


