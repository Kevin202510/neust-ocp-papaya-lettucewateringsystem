<div class="modal fade" id="modal-main" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="modal-title"></h4>
                <div class="pull-left"><button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></button></div>
            </div>
            <div class="modal-body">
                <form id="set-Model">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="configuration_name">Configuration Name</label>
                            <input type="text" class="form-control" id="configuration_name" name="configuration_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="statusName">Status</label><input type="hidden" name="isActive" id="isActive">
                            <input type="text" class="form-control" id="statusName" name="statusName" readonly style="background-color:#f39797; color:white;">
                        </div>
                    </div>

                    <label>Temperature Sensor</label>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="temperatureSensorMinVal">Limit Value</label>
                        <input type="number" class="form-control" id="temperatureSensorMinVal" name="temperatureSensorMinVal">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="temperatureSensorMaxVal">Maximum Value</label>
                        <input type="number" class="form-control" id="temperatureSensorMaxVal" name="temperatureSensorMaxVal">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="temperaturestatusval">Status</label>
                        <select class="form-control form-control-lg" id="temperaturestatusval" name="temperaturestatusval">
                            <option value="1">ON</option>
                            <option value="0">OFF</option>
                        </select>
                        </div>
                    </div>
                    
                    <label>Humidity Sensor</label>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="humiditylimitval">Limit Value</label>
                        <input type="number" class="form-control" id="humiditylimitval" name="humiditylimitval">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="humiditymaxval">Maximum Value</label>
                        <input type="number" class="form-control" id="humiditymaxval" name="humiditymaxval">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="temperaturestatusval">Status</label>
                        <select class="form-control form-control-lg" id="humiditystatusval" name="humiditystatusval">
                            <option value="1">ON</option>
                            <option value="0">OFF</option>
                        </select>
                        </div>
                    </div>

                    <label>Lights Sensor</label>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="lightlimitval">Limit Value</label>
                        <input type="number" class="form-control" id="lightlimitval" name="lightlimitval">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="lightmaxval">Maximum Value</label>
                        <input type="number" class="form-control" id="lightmaxval" name="lightmaxval">
                        </div>
                        <div class="form-group col-md-4">
                        <label>Status</label>
                        <select class="form-control form-control-lg" id="lightstatusval" name="lightstatusval">
                            <option value="1">ON</option>
                            <option value="0">OFF</option>
                        </select>
                        </div>
                    </div>

                    <label>CarbonDioxide Sensor</label>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="co2limitval">Limit Value</label>
                        <input type="number" class="form-control" id="co2limitval" name="co2limitval">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="co2maxval">Maximum Value</label>
                        <input type="number" class="form-control" id="co2maxval" name="co2maxval">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="temperaturestatusval">Status</label>
                        <select class="form-control form-control-lg" id="co2statusval" name="co2statusval">
                            <option value="1">ON</option>
                            <option value="0">OFF</option>
                        </select>
                        </div>
                    </div>

                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary form-control" id="engrave" value="create-new">Save</button>
            </div>
        </div>
    </div>
</div>