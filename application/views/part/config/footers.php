 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
   $(document).ready(function(){
    var table_url = $('#table-data-user').data('url');
    $('#table-data-user').DataTable({
      "ajax":{
        'url' : table_url,
      },
      "columns":[{
        "title" : "#",
        "width": "5%",
        "data": null,
        "visible": true,
        "class": "text-center",
        render:(data,type,row, meta)=>{
          return meta.row + meta.settings._iDisplayStart+1;
        }
      },{
        "title" : "Username",
        "width" : "200px",
        "data" : "username"
      },{
        "title" : "Nama",
        "width" : "200px",
        "data" : "nama"
      },{
        "title" : "No Telp",
        "width" : "200px",
        "data" : "telp"
      },{
        "title" : "Email",
        "width" : "200px",
        "data" : "email"
      },
      {
        "title" : "Alamat",
        "width": "100px",
        "data": "alamat"
      }
      ,{
        "title" : "Password",
        "width": "100px",
        "data": "password"
      },{
        'title' : "Level",
        'class' : "text-center",
        data : (data, type, row, meta) => {
          ret = "";
          if(data.level == '1'){
            ret += '<span class="badge badge-warning text-white">Admin</span>';
          }else if(data.level == '2'){
            ret += '<span class="badge badge-secondary">User</span>';
          }
          return ret;
        }
      },{
        "title" : "Actions",
        "width" : "15%",
        "class" : "text-center",
        "data": (data, type, row) => {
          let _return = "";

          _return += '<a href="javascript:void(0)" class="btn btn-icon btn-success waves-effect waves-classic update-class"data-id="'+data.user_id+'"> <i class="fa fa-pen"></i></a> &nbsp;'+''+'<a href="javascript:void(0)" data-id="'+data.user_id+'"" class="btn btn-icon btn-danger waves-effect waves-classic delete-class"> <i class="fa fa-trash"></i></a>';

          return _return;
        }
      }]
    });

  });
</script>

<script>
   $(document).ready(function(){
    var table_url = $('#table-data-mhs').data('url');
    $('#table-data-mhs').DataTable({
      "ajax":{
        'url' : table_url,
      },
      "columns":[{
        "title" : "#",
        "width": "5%",
        "data": null,
        "visible": true,
        "class": "text-center",
        render:(data,type,row, meta)=>{
          return meta.row + meta.settings._iDisplayStart+1;
        }
      },{
        "title" : "Card ID",
        "width" : "200px",
        "data" : "id_card"
      },
      {
        "title" : "NIM",
        "width" : "200px",
        "data" : "nim"
      },{
        "title" : "Nama Mahasiswa",
        "width" : "200px",
        "data" : "nama_mhs"
      },{
        "title" : "Jurusan",
        "width" : "200px",
        "data" : "jurusan"
      },{
        "title" : "Actions",
        "width" : "15%",
        "class" : "text-center",
        "data": (data, type, row) => {
          let _return = "";

          _return += '<a href="javascript:void(0)" class="btn btn-icon btn-success waves-effect waves-classic update-class"data-id="'+data.id+'"> <i class="fa fa-pen"></i></a> &nbsp;'+''+'<a href="javascript:void(0)" data-id="'+data.id+'"" class="btn btn-icon btn-danger waves-effect waves-classic delete-class"> <i class="fa fa-trash"></i></a>';

          return _return;
        }
      }]
    });

  });
</script>

  <!-- Page level custom scripts -->
  