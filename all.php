<?php
  include("includes/header.php");
?>
          <div class="row">
            <div class="col-md-6">
              <div class="uploadnow">
                <h2 id="createnote" class="text-center">create a note</h2>
                <p>
                  <div class="card py-3 my-5" style="min-height:375px;">
                    <form class="col-md-12">
                      <input class="form-control" type="text" name="title" placeholder="Title of note (required)" required />
                      <textarea class="form-control" id="notebody" name="body" placeholder="Enter the content of your note!" required></textarea>
                      <button class="btn btn-outline-info">Create note!</button>
                    </form>
                  </div>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="recentnotes">
                <h2 id="recentnotes" class="text-center">recent notes</h2>
                <p>
                  <div class="card py-4 px-3 my-5" style="min-height:375px;">
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                      <hr style="margin:0;" />
                    </p>
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                      <hr style="margin:0;" />
                    </p>
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                      <hr style="margin:0;" />
                    </p>
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                      <hr style="margin:0" />
                    </p>
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                      <hr style="margin:0" />
                    </p>
                    <p class="recentnote" style="color:#444;">
                      <a href='#'>My note name</a> - <small>by <a href='#'>Kyle</a> on <a href='#'>02/12/18</a></small>
                    </p>
                  </div>
                </p>
              </div>
            </div>
          </div>
        </div>
<?php
  include("includes/footer.php");
?>
