<div class="modal fade" id="generateReport" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadUsersDataModalLabel">Generate Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="generateReports">
            <div class="form-group">
              <label class="d-block">Date Range</label>
              <!-- <input type="text" id="daterange" name="daterange" class="form-control"> -->
              <input type="date" id="datePickerId" class="form-control">
              <input type="date" id="datePickerId2" class="form-control">
            </div>
        </form>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="generateReportss">Generate</button>
        </div>
    </div>
  </div>
</div>