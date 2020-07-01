<!-- Small modal -->

<!-- Modal Add Announce -->
<div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Announcement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/announcements" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Title" style="border-color: black;" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description" style="border-color: black;" required>
                </div>
                <div class="form-group">
                    <label for="date">Date: When</label>
                    <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Description" style="border-color: black;" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Date: When</label>
                    <input type="text" name="message" class="form-control" id="formGroupExampleInput2" placeholder="Description" style="border-color: black;" required>
                  </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-grd-warning" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-grd-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- end announce --}}
  <!-- Edit Announce-->

  <div class="modal fade" id="edit-announce" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Announcement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="edit-announceform">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Title" style="border-color: black;" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" class="form-control" id="description" placeholder="Description" style="border-color: black;" required>
                </div>
                <div class="form-group">
                    <label for="date">Date: When</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Description" style="border-color: black;" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <input type="text" name="message" class="form-control" id="message" placeholder="Description" style="border-color: black;" required>
                  </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-grd-warning" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-grd-primary text-center waves-effect waves-light">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Edit Announce-->
