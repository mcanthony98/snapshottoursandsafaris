<?php
$pg = 8;
include "includes/header.php";
include "../includes/connect.php";
include "includes/sessions.php";

if(isset($_GET['album'])){
$album_slug = $_GET['album'];
}else{
header ("Location: index.php");
}
$alqry = "SELECT * FROM album WHERE album_slug = '$album_slug'";
$alres = $conn->query($alqry);
$alrow = $alres->fetch_assoc();
$album_id = $alrow['album_id'];


$catqry = "SELECT * FROM album_category WHERE album_id = '$album_id'";
$catres = $conn->query($catqry);

$imgqry = "SELECT * FROM gallery_image WHERE album_id = '$album_id'";
$imgres = $conn->query($imgqry);

?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

<?php
include "includes/navbar.php";
?>

  <!-- Main Sidebar Container -->
  <?php
include "includes/sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $alrow['album'];?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
                    <div class="container-fluid">
                        <!-- Default box -->
                        <div class="card card-solid">
                        <div class="card-header">
                                <div class="card-tools">
                                    <button class="btn btn-sm  bg-gradient-warning" data-toggle="modal" data-target="#modal-upload-image"><i class="fa fa-plus"></i> Add New</button>
                                </div>
                            </div>
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <?php if($catres->num_rows > 0){?>
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <?php while($catrow = $catres->fetch_assoc()){?>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="<?php echo $catrow['category_id'];?>"> <?php echo $catrow['category_name'];?> </a>
                    <?php } } ?>
                  </div>
                  
                </div>
                <div>
                  <div class="filter-container p-0 row">
                    <?php while($imgrow = $imgres->fetch_assoc()){?>
                    <div class="filtr-item col-sm-2" data-category="<?php echo $imgrow['category_id'];?>" data-sort="white sample">
                      <a href="../gallery/images/<?php echo $imgrow['image_big'];?>" data-toggle="lightbox" data-title="<?php echo $imgrow['image_big'];?>">
                        <img src="../gallery/images/<?php echo $imgrow['image_small'];?>" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <?php } ?>
                    
                  </div>
                </div>

              </div>
            </div>


                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
include "includes/footer.php";
?>

 
</div>
<!-- ./wrapper -->


<!--MODALS-->
<?php
$catqry = "SELECT * FROM album_category WHERE album_id = '$album_id'";
$catres = $conn->query($catqry);
?>

<div class="modal fade" id="modal-upload-image">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Image(s)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="processes/processes.php" enctype="multipart/form-data">
      <?php if($catres->num_rows > 0){?>
        <label class="" for="">Category</label>
        <select class="form-control" name="category" required>
          <?php while($catrow = $catres->fetch_assoc()){?> 
          <option value="<?php echo $catrow['category_id'];?>"><?php echo $catrow['category_name'];?></option>  
          <?php }?>
      </select>
      <?php }?>
      <div class="input-group mt-3">
          <div class="custom-file">
          <input type="file" name="images[]" class="custom-file-input" multiple accept="image/*" required>
          <label class="custom-file-label" for="">Choose Image(s)</label>
          </div>
          <div class="input-group-append">
          <input type="hidden" name="upload-images" value="<?php echo $album_id;?>">
          <input type="hidden" name="alslug" value="<?php echo $album_slug;?>">
          </div>
      </div>
      
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type=submit name="" class="btn btn-info">Upload</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<div class="modal fade" id="modal-view">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Corporate Training Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            
            <div class="modal-body">
            <dl class="row">
                  <dt class="col-sm-4">Name</dt>
                  <dd class="col-sm-8" id="tname">username</dd>
                  <dt class="col-sm-4">Email</dt>
                  <dd class="col-sm-8" id="temail">address</dd>
                  <dt class="col-sm-4">Phone</dt>
                  <dd class="col-sm-8" id="tphone">address</dd>
                  <dt class="col-sm-4">Type</dt>
                  <dd class="col-sm-8" id="ttype">gender</dd>
                  <dt class="col-sm-4">No. of People</dt>
                  <dd class="col-sm-8" id="tpeople"></dd>
                  <dt class="col-sm-4">Date of Event</dt>
                  <dd class="col-sm-8" id="tdot">loc</dd>
                  <dt class="col-sm-12">Additional information</dt>
                  <dd class="col-sm-12" id="tcom"></dd>
                </dl>
            </div>
            <div class="modal-footer ">
              
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Employee Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form method="post" action="processes/processes.php">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Firstname</label>
                    <input class="form-control" placeholder="Firstname" name="fname" id="fname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lastname</label>
                    <input class="form-control" placeholder="Lastname" name="lname" id="lname" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Email" name="email" id="email" required>
                  </div>
                </div>

<input type="hidden" id="empid" name="empid">

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type=""  name="phone" id="phone" required>
                  </div>
                </div>


              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="edit-emp" class="btn btn-warning">Submit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



<?php
include "includes/scripts.php";
?>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
<script >  
 $(document).ready(function(){  
      $('.viewbk').click(function(){  
          var id = $(this).attr("id");
          $.ajax({  
                  url:"processes/processes.php",  
                  method:"POST",  
                  data:{fetch_travel_coopbooking:id}, 
                  dataType: 'json',
                  success:function(data){

                    if(data.type == 0){
                        type = "Not Specified";
                    }else if(data.type == 1){
                        type = "Team Building";
                    }else if(data.type == 2){
                        type = "Employee Training";
                    }
                    $('#tcom').html(data.comment);
                    $('#tpeople').html(data.people);
                    $('#tdot').html(data.date_of_event);
                    $('#ttype').html(type);
                    $('#tphone').html(data.phone);
                    $('#temail').html(data.email);
                    $('#tname').html(data.name);

                  }  
          }); 
		  
      });  
 });  
 </script>

</body>
</html>
