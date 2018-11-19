
  <!-- Logout Modal   view_requestSeniro-->
  <div class="modal fade" id="viewRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="m_name">Request Detail </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Request Type: <span id="m_type"></span></label>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Note:  <b><span id="m_note"></span></b></label>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Requested Date:   <b><span id="m_date"></span></b></label>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Location :   <b><span id="m_location"></span></b></label>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">When to Complete :  <b><span id="m_time"></span></b></label>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Status :   <b><span id="m_status"></span></b></label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
        </div>
      </div>
    </div>
  </div>

