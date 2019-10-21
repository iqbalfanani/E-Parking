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
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap-sweetalert/sweetalert.js"></script>

  <script>
   $(document).ready(function(){

    //================ DATATABLE USER ====================//
    var table_url_user = $('#table-data-user').data('url');
    $('#table-data-user').DataTable({
      "ajax":{
        'url' : table_url_user,
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

    //================ DATATABLE MAHASISWA ====================//
    var table_url_mhs = $('#table-data-mhs').data('url');
    $('#table-data-mhs').DataTable({
      "ajax":{
        'url' : table_url_mhs,
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


    //================ DATATABLE MONITORING ====================//
    var table_url_monitoring = $('#table-data-monitoring').data('url');
    $('#table-data-monitoring').DataTable({
      "ajax":{
        'url' : table_url_monitoring,
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
        "data" : "card_number"
      },
      {
        "title" : "NIM",
        "width" : "200px",
        "data" : "nim"
      },{
        "title" : "Nama Mahasiswa",
        "width" : "200px",
        "data" : "nama_mahasiswa"
      },{
        "title" : "Date",
        "width" : "200px",
        "data" : "date_log"
      },{
        "title" : "Parkir Masuk",
        "width" : "200px",
        "data" : "parkir_masuk"
      },{
        "title" : "Parkir Keluar",
        "width" : "200px",
        "data" : "parkir_keluar"
      }]
    });

    //================ DATATABLE LAPORAN ====================//
    var table_url_laporan = $('#table-data-laporan').data('url');
    $('#table-data-laporan').DataTable({
      "ajax":{
        'url' : table_url_laporan,
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
        "data" : "card_number"
      },
      {
        "title" : "NIM",
        "width" : "200px",
        "data" : "nim"
      },{
        "title" : "Nama Mahasiswa",
        "width" : "200px",
        "data" : "nama_mahasiswa"
      },{
        "title" : "Date",
        "width" : "200px",
        "data" : "date_log"
      },{
        "title" : "Parkir Masuk",
        "width" : "200px",
        "data" : "parkir_masuk"
      },{
        "title" : "Parkir Keluar",
        "width" : "200px",
        "data" : "parkir_keluar"
      }]
    });

  });
</script>




<!--//////////////////////////////////////////////////////
  CRUD AJAX
  ////////////////////////////////////////////////////////
-->
<!--================ INSERT USER ====================-->
<script>
  $(document).ready(function(){
    //Insert
    $('#insertDataForm').on('submit',function(){
      var username = $('#username').val();
      var password = $('#password').val();
      var nama = $('#nama').val();
      var alamat = $('#alamat').val();
      var telp = $('#telp').val();
      var email = $('#email').val();

      $.ajax({
        type: "post",
        url:"<?php echo base_url('Configuration/User/user_insert') ?>",
        beforeSend:function(){
          swal({
            title:'Waiting',
            html:'Processing Data',
            onOpen: ()=>{
              swal.showLoading()
            }
          })
        },
        data: {username:username, password:password,nama:nama,alamat:alamat, telp:telp,email:email},
        dataType: "JSON",
        success: function(data){
          $('#table-data-user').DataTable().ajax.reload(null,false);
          swal({
            type: 'success',
            title:'Data Added',
            text:'Succesfully added item',
          })
          $('#insertModal').modal('hide');
          $('#username').val('');
          $('#password').val('');
          $('#nama').val('');
          $('#alamat').val('');
          $('#telp').val('');
          $('#email').val('');
        }
      })
      return false;
    });

  //======================== DELETE USER===============
    $('#table-data-user').on('click','.delete-class', function(){
      var id = $(this).data('id');
      swal({
        title: 'Confirmation',
        text: "Do you want to delete? ",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Cancel',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:"<?php echo base_url('Configuration/User/user_delete')?>",  
            method:"post",
            beforeSend :function () {
            swal({
                title: 'Waiting',
                html: 'Processing Data',
                onOpen: () => {
                  swal.showLoading()
                }
              })      
            },    
            data:{id:id},
            success:function(data){
              swal(
                'Delete',
                'Success Delete',
                'success'
              )
              $('#table-data-user').DataTable().ajax.reload(null, false)
            }
          })
      } else if (result.dismiss === swal.DismissReason.cancel) {
          swal(
            'Cancel',
            'You Canceled Delete',
            'error'
          )
        }
      })
    });

  //===============UPDATE USER==========================
  $('#table-data-user').on('click','.update-class', function () {
  // ambil element id pada saat klik ubah
  var id =  $(this).data('id');
          
     $.ajax({
      type: "post",
      url: "<?php echo base_url('Configuration/user/form_update_user')?>",
      beforeSend :function () {
        swal({
          title: 'Processing',
          html: 'Processing data',
          onOpen: () => {
            swal.showLoading()
          }
        })      
      },
      data: {id:id},
      success: function (data) {
        swal.close();
        $('#updateModal').modal('show');
        $('#formUpdate').html(data);
        
        // proses untuk mengubah data
        $('#formUpdate').on('submit', function () {
            var edit_username = $('#edit_username').val(); // diambil dari id nama yang ada diform modal
            var edit_password = $('#edit_password').val(); // diambil dari id alamat yanag ada di form modal 
            var edit_nama = $('#edit_nama').val(); //diambil dari id yang ada di form modal
            var edit_telp = $('#edit_telp').val();
            var edit_email = $('#edit_email').val();
            var edit_alamat = $('#edit_alamat').val();
            $.ajax({
              type: "POST",
              url: "<?php echo base_url('Configuration/User/user_update')?>",
              beforeSend :function () {
                swal({
                  title: 'Waiting',
                  html: 'Processing data',
                  onOpen: () => {
                    swal.showLoading()
                  }
                })      
              },
              data: {edit_username:edit_username, edit_password:edit_password, edit_nama:edit_nama, edit_telp:edit_telp, edit_email:edit_email, edit_alamat:edit_alamat,id:id}, // ambil datanya dari form yang ada di variabel
              
              success: function (data) {
                $('#table-data-user').DataTable().ajax.reload(null,false);
                swal({
                  type: 'success',
                  title: 'Data Updated',
                  text: 'Succesfully updated data'
                })
                  // bersihkan form pada modal
                  $('#updateModal').modal('hide');
                }
            })
          return false;
        });
      }
    });
  });

});
</script>