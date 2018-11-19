<!-- Logout Modal   view_requestSeniro-->
<div class="modal fade" id="mReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m_name">User being Reviewed: <strong><span id="review_user"> </span></strong> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{action('HomeController@submitReview')}}">
          @csrf
          <input type="hidden" value="" name="review_id" id="review_id" />
          <input type="hidden" value="" name="review_by" id="review_by" />
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Select a Rating :</label>
            <div class="wrapper">
              <input type="checkbox" name="rating" id="st1" value="1" />
              <label for="st1"></label>
              <input type="checkbox" name="rating" id="st2" value="2" />
              <label for="st2"></label>
              <input type="checkbox" name="rating" id="st3" value="3" />
              <label for="st3"></label>
              <input type="checkbox" name="rating" id="st4" value="4" />
              <label for="st4"></label>
              <input type="checkbox" name="rating" id="st5" value="5" />
              <label for="st5"></label>
            </div>
          </div>
          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">
              Submit Review
          </button>
      </div>
      </form>
    </div>
  </div>
</div>