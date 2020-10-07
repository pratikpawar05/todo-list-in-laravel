<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function uploadAvatar($image)
    {
        # code...
        $filename=$image->getClientOriginalName();
            # code..
        //Request::file('image')->store('images','public');
        (new self())->deleteOldImage();
        $image->storeAS('images',$filename,'public');
        //User::find(1)->update(['avatar'=>'asdfsd']);
        auth()->user()->update(['avatar'=>$filename]);
   }
    protected function deleteOldImage()
    {
        # code...
        if ($this->avatar) {
                # code...
                Storage::delete('/public/images/'.$this->avatar);
            }
    }
    //Mutator 
    // public function setpasswordAttribute($password)
    // {
        # code...
    //     $this->attributes['password']=bcrypt($password);
    // }
    // //Accessor
    // public function getNameAttribute($name)
    // {
    //     # code..
    //      return 'MY Name is:'.ucfirst($name);
    // }
}
