<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserForm::query ()->paginate ();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        try {
            $email_request = explode ('@', $request->email);
            $nick_name = $email_request[0];
            if ($this->validateEmail ($request->email)) {
                return \response ()->json (
                    ['error'=>'El correo electronico ya existe en nuestras base de datos.'],
                    '201');
            }
            if ($this->validateNickName ($nick_name)) {
                return \response ()->json (
                    ['error'=>'El nick name ya existe en nuestras base de datos.'],
                    '201');
            }
            $request->request->add (['nickname' => $nick_name]);
            UserForm::create($request->all ());
            return response ()->json ($request->all (), 201);

        }catch (\Exception $e) {
            return response()->json($e->getMessage (), 500);
        }

    }

    /**
     * @param $nick_name
     * @return bool
     */
    private function validateNickName($nick_name)
    {
        $nick_name_valid = UserForm::query ()->where ('nickname','=',$nick_name)->count ();
        if($nick_name_valid > 0){
            return true;
        }
        return false;
    }

    /**
     * @param $email
     * @return bool
     */
    private function validateEmail($email)
    {
        $email_valid= UserForm::query ()->where ('email','=',$email)->count ();
        if($email_valid > 0){
            return true;
        }
        return false;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return UserForm::query ()->where ('id_user','=',$id)->paginate ();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
