<?php 

class authantication extends Eloquent {


   protected $table = "user";


   public static function InsertUser($username, $email, $password) {

   		DB::table('user')->insert(array(

   			'username' => $username,

   			'email' => $email,

   			'password' => sha1($password)
   			

   			 ));

   }

   public static function LoginUser($username,$password) {

   		return DB::table('user')->where('username',$username)->where('password',sha1($password))->get();
   }

   public static function CheckEmail($email) {

   		return DB::table('user')->where('email',$email)->get();
   }
}

 ?>