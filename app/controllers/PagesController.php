<?php

class PagesController extends BaseController {

 public function changePasswordForm()
 {
  return View::make('others.passwordForm');
 }
 public function changePasswordDo(){
  $oldpassword=Input::get('oldPassword');
  if(Input::get('password')==Input::get('password_confirmation')){
   $newPassword=Input::get('password');
    if (Auth::attempt(array('email' => Auth::user()->email, 'password' => $oldpassword))){

    }
  }
 }
}