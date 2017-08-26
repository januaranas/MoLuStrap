@extends('layouts.index') @section('title') MoLuStrap (MongoDB-Lumen-Bootstrap) @endsection @section('content')
<div class="row">
    </br>
    <p data-placement="top" data-toggle="tooltip" title="insert">
        <button class="btn btn-default" data-title="Insert" data-toggle="modal" data-target="#insert"><span class="glyphicon glyphicon-plus"></span> Insert Data</button>
    </p>
    
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->nama_awal }}</td>
                        <td>{{ $data->nama_akhir }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->kontak }}</td>
                        <td>
                          <p data-placement="top" data-toggle="tooltip" title="JSON View on new Tab"> 
                          <a href="{{ url('read',$data->id) }}" target="_blank" class="btn btn-info btn-xs" ><span class="glyphicon glyphicon-eye-open"></span></a>
                            </p>
                        </td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                              <button class="btn btn-primary btn-xs open-edit" 
                              data-title="Edit" 
                              data-toggle="modal" 
                              data-id_update="{{ $data->id }}"
                              data-nama_awal="{{ $data->nama_awal }}"
                              data-nama_akhir="{{ $data->nama_akhir }}"
                              data-alamat="{{ $data->alamat }}"
                              data-email="{{ $data->email }}"
                              data-kontak="{{ $data->kontak }}">
                              <span class="glyphicon glyphicon-pencil"></span>
                              </button>
                            </p>
                        </td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Delete"> 
                            <button class="btn btn-danger btn-xs open-delete" 
                             data-title="delete"
                             data-toggle="modal" 
                             data-id_delete="{{ $data->id }}">
                             <span class="glyphicon glyphicon-trash"></span>
                             </button>
                            </p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pull-right">
                {{ $datas->links() }}
            </ul>
        </div>
    </div>
</div>

<!-- MODAL AREA -->
<script>
$(function(){
  $(".open-edit").click(function(){
     $('#id_update').val($(this).data('id_update'));
     $('#nama_awal').val($(this).data('nama_awal'));
     $('#nama_akhir').val($(this).data('nama_akhir'));
     $('#alamat').val($(this).data('alamat'));
     $('#email').val($(this).data('email'));
     $('#kontak').val($(this).data('kontak'));
    $("#edit").modal("show");
  });

  $(".open-delete").click(function(){
    $('#id_delete').val($(this).data('id_delete'));
    $("#delete").modal("show");
  });
});
</script>

<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="insert" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ url('create') }}" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Insert New Data</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="nama_awal" class="form-control" type="text" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input name="nama_akhir" class="form-control" type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <textarea name="alamat" rows="2" class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="kontak" class="form-control" type="text" placeholder="Contact">
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button name="submit" type="submit" class="btn btn-primary btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Insert</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<div id="edit" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{ url('update') }}" method="POST">
        <input type="hidden" name="id_update" id="id_update" value="">
        <input type="hidden" name="_method" value="PUT">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input name="nama_awal" id="nama_awal" class="form-control" type="text" value="" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input name="nama_akhir" id="nama_akhir" class="form-control" type="text" value="" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <textarea name="alamat" id="alamat" rows="2" class="form-control" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                    <input name="email" id="email" class="form-control" type="text" value="" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="kontak" id="kontak" class="form-control" type="text" value="" placeholder="Contact">
                </div>
            </div>
            <div class="modal-footer ">
                <button name="submit" type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body delete-content">                 
                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record ?</div>
            </div>
            <div class="modal-footer ">
                <form method="POST" action="{{ url('delete') }}">
                    <input type="hidden" name="id_delete" id="id_delete" value="" />
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" name="delete" value="hapus" class="btn btn-success">  
                    <span class="glyphicon glyphicon-ok-sign"></span> Yes </button> 
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                 </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<!-- endforeach  -->
@endsection