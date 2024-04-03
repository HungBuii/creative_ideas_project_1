@extends('student.Website.layout.app')

@section('title', 'List Faculity')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Faculity</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">List Faculity</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>List Faculties</h5>
                </div>
                <div class="card-body table-border-style d-flex justify-content-between align-items-center">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Faculty</th>
                          <th>Description</th>
                          <th>Time Start</th>
                          <th>Time End</th>
                          <th>Coordinator</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><a href="#!">hehe</a></td>
                          <td>Description</td>
                          <td>Start</td>
                          <td>End</td>
                          <td>Clear</td>
                          <td id="actionCell1"> <button type="button" class="btn btn-success" onclick="joinFaculty(this)">
                              <i class="feather mr-2 icon-plus-circle"></i>Join
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<script>
    function joinFaculty(button) {
  const leaveButton = document.createElement("button");
  leaveButton.type = "button";
  leaveButton.classList.add("btn", "btn-danger");
  leaveButton.onclick = function() { removeFaculty(this); };
  leaveButton.innerHTML = '<i class="feather mr-2 icon-trash"></i>Leave';

  const actionCell = button.parentElement;
  actionCell.replaceChild(leaveButton, button);
}

function removeFaculty(button) {

  const joinButton = document.createElement("button");
  joinButton.type = "button";
  joinButton.classList.add("btn", "btn-success");
  joinButton.onclick = function() { joinFaculty(this); };
  joinButton.innerHTML = '<i class="feather mr-2 icon-plus-circle"></i>Join';

  button.parentElement.replaceChild(joinButton, button);
}
</script>
@endsection