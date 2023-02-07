<div class="modal fade" id="modal-main" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="modal-title">Add Users</h4>
                <div class="pull-left"><button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></button></div>
            </div>
            <div class="modal-body">
                <form id="set-Model" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-md-4 text-center"> 
                                <img class="brand-image img-circle" src="{{ asset('img/userlogo.png') }}" width="200" height="180" />
                                <input type="hidden" id="ItemPixStr" name="ItemPixStr" value="prod.png">
                            </div>

                            <div class="col-md-8">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">First Name</span>
                                    <input type="text" aria-label="Item Code" id="fname" name="fname" class="form-control">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Last Name</span>
                                    <input type="text" aria-label="Description" id="lname" name="lname" class="form-control">
                                </div>
                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Role</span>
                                    <select name="role_id" id="user-id" class="form-control user-id" required></select>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Address</span>
                                    <input type="text" aria-label="Description" id="address" name="address" class="form-control">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contact</span>
                                    <input type="text" aria-label="Description" id="contact" name="contact" class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Username</span>
                                    <input type="email" aria-label="Description" id="username" name="username" class="form-control">
                                </div>
                            </div>

                            <!-- <div class="col-md-12">
                                    <div class="input-group ">
                                        <span class="input-group-text">Email</span>
                                        <input type="text" class="form-control"  id="email" name="email" >
                                    </div>
                            </div> -->
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