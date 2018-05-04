@include("dashboard.layouts.sidepanel")
<link href = '//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css' rel ='stylesheet'/>
<link href = 'https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' rel = 'stylesheet'/>
<link href ='https://cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css' rel = 'stylesheet'/>
<style>
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
  border:none;
}
table.dataTable.no-footer{
  border-bottom:1px solid #b5b5b5;
}
.glyphicon{
  margin-right: 5px;
}
.ui.table td{
  text-align: center;
}
</style>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">User Accounts</h4>
          </div>
          <div class="content table-responsive">
            @if(session('success')!==null)
            <div class="alert alert-success alert-dismissible" style ='width:70%;margin:auto;'>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> - {!!session('success')!!}
            </div>
            @endif
            <div class="modal" id="deleteModal" tabindex="1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content" id="deleteModal">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm Delete</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure?
                  </div>
                  <div class="modal-footer">
                    <form method = 'POST' action ='accounts_admin/delete'>
                      @csrf
                      <input type ='hidden' name ='id' value =''/>
                      <input type = 'submit' name = 'submit' value ='Yes' class="btn btn-danger"/>
                      <a href="#" data-dismiss="modal" class="btn btn-info" >No</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <a href='accounts_admin/add' class='btn btn-info btn-fill pull-right'>Add Account</a>
            <table id="table1" class="table-hover table-striped ui celled table" align ="center">
              <thead>
                <th>ID</th>
                <th >Role</th>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
              </thead>
            </tbody>
            @foreach ($results as $result)
            <tr>
              <td> {{$result->id}}</td>
              <td ><p class ='btn btn-primary btn-fill btn-md' style ='cursor:default'>
                @if($result->admin)
                Admin
                @else
                User
                @endif  
              </p></td>
              <td> {{$result->username}} </td>
              <td> {{$result->fname}} </td>
              <td> {{$result->lname}} </td>
              <td style ='padding:0px'>
                <a class ='btn btn-primary btn-fill' href ='accounts_admin/edit/{{$result->id}}'>
                  <span class ='glyphicon glyphicon-wrench'></span>
                  Edit
                </a>&nbsp;
                <a href="#" class ='btn btn-danger btn-fill' role="button" class="btn-show-modal" onclick ="$('#deleteModal').modal('show'); $('input[name=id]').val({{$result->id}})"title="Delete?">
                  <span class ='glyphicon glyphicon-remove'></span>Delete</a>
                  &nbsp;
                  <button  class ='btn btn-primary btn-fill'  style ='background-color: #009700; border-color: #009700' ><span class ='glyphicon glyphicon-file'></span>Report
                  </button></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include("dashboard.layouts.footer")
  <script>
                $('.sidebar').attr('data-color','blue')
</script>
<style>
.row
{
  margin: 0 14px 0 14px;
}
</style>