<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
        
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->stateless()->user();
       
            $finduser = User::where('social_id', $user->id)->first();
 
            
       
            if($finduser){
       
                Auth::login($finduser);

                return redirect()->route('dashboard');
       
            }else{

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->route('dashboard');
            }
      
        } catch (Exception $e) {
            
            dd($e->getMessage());
        }
    }
}