<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="denyLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="denyLabel">Actions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center> <div class="modal-body">
        <p id="message">loading!</p>
      </div></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <form action="includes/logic/loan_update.php" method="post">

      <input type="hidden" name="lid" value="weait">
        <button type="submit" name="deny" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>