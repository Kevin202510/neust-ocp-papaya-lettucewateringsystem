<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carbondioxides extends Model
{
    use HasFactory;

    protected $fillable = [
        'carbondioxideAmount',
    ];
    
    protected $appends = [
        'date',
        'time',
        'statusName'
    ];

    public function getDateAttribute()
    {
        return $this->created_at? $this->created_at->format('M-d-Y'): null;
    }

    public function getTimeAttribute()
    {
        return $this->created_at? $this->created_at->format('g:i:s A'): null;
    }

    public function getstatusNameAttribute()
    {
        $stat="";
        if($this->status==0){
            $stat = "High Co2 Concentration";
        }else if($this->status==1){
            $stat = "Good  Co2 Concentration";
        }else if($this->status==2){
            $stat = "Fair  Co2 Concentration";
        }
        return $stat;
    }
}
