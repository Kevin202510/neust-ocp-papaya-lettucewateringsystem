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
        'profile','role_id','fname','lname','address','contact','email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $appends = [
        'fullName',
        'roleName',
        'statusName',
        'passwordName',
    ];

    
    public function getPasswordNameAttribute()
    {
        $password=md5($this->password);
        return $password;
    }
        public function getFullNameAttribute()
        {
            $fn=$this->fname.' '.$this->lname;
            return  strtoupper($fn);
        }

        public function getRoleNameAttribute()
        { 
            if($this->role){
                return $this->role->display_name;
            }
        }

        public function getstatusNameAttribute()
        { 
            $status="Approved";
            
            if($this->isApproved==0){
                $status = "Not Approved";
            }
            return $status;
        }

        public function role(){return $this->belongsTo(Roles::class);}
}
