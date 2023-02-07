<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensorsconfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','configuration_name','configuration_value','isActive',
    ];

    protected $casts = [
        'configuration_value' => 'object'
    ];

    protected $dates = ['deleted_at'];

    protected $appends = [
        'temperatureSensorMinVal',
        'temperatureSensorMaxVal',
        'temperaturestatusval',
        'humiditylimitval',
        'humiditymaxval',
        'humiditystatusval',
        'lightlimitval',
        'lightmaxval',
        'lightstatusval',
        'co2limitval',
        'co2maxval',
        'co2statusval',
        'statusName',
        'datetimeval',
    ];

    public function getDatetimeValAttribute()
    {
        if($this->deleted_at!=NULL){
            return $this->deleted_at->format('M-d-Y'). ' '. $this->deleted_at->format('g:i:s A');
        }
    }

    public function getTemperatureSensorMinValAttribute(){return $this->configuration_value->temperatureSensorMinVal;}
    public function getTemperatureSensorMaxValAttribute(){return $this->configuration_value->temperatureSensorMaxVal;}
    public function getTemperaturestatusValAttribute(){return $this->configuration_value->temperaturestatusval;}

    public function getHumiditylimitValAttribute(){return $this->configuration_value->humiditylimitval;}
    public function getHumiditymaxValAttribute(){return $this->configuration_value->humiditymaxval;}
    public function getHumiditystatusValAttribute(){return $this->configuration_value->humiditystatusval;}

    public function getLightlimitValAttribute(){return $this->configuration_value->lightlimitval;}
    public function getLightmaxValAttribute(){return $this->configuration_value->lightmaxval;}
    public function getLightstatusValAttribute(){return $this->configuration_value->lightstatusval;}

    public function getCo2limitValAttribute(){return $this->configuration_value->co2limitval;}
    public function getCo2maxValAttribute(){return $this->configuration_value->co2maxval;}
    public function getCo2statusValAttribute(){return $this->configuration_value->co2statusval;}

    

    public function getStatusNameAttribute()
    { 
        $status="Active";
            
            if($this->isActive==0){
                $status = "Not Active";
            }
            return $status;
    }
}
