<?php

class RemindersController extends Controller {

    /**
     * Display the password reminder view.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('password.remind');
    }

    public function  changePassword()
    {
        $validator = Validator::make(Input::all(), User::$change_password_rules);
        if ($validator->passes())
        {
            $user = User::findOrFail(Auth::user()->id);

            $user->password = Hash::make(Input::get('new_password'));
            $user->save();

            //return 'changed';
            Auth::logout();
            return Redirect::to('login');
        } else
        {
            return Redirect::to('password')->withErrors($validator);
        }


    }

}
