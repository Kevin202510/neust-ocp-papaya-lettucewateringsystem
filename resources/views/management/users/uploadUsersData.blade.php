<div class="modal fade" id="uploadUsersDataModal" tabindex="-1" role="dialog" aria-labelledby="uploadUsersDataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadUsersDataModalLabel">Upload Users Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formdatas" method="post" enctype="multipart/form-data">
              @csrf
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="far fa-file-csv"></i>   Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="upload_usersdata" name="upload_usersdata">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
          </form>
      </div>
        <div class="modal-footer">
          <button type="submit" id="uploadUsersData" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>