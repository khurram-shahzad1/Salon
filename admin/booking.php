<?php 
     if(!isset($_COOKIE['admin_id'])){
        header("Location: index.php");
         }else{

         }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Admin Panel</title>
  <link rel="icon" type="image/png" href="../images/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   

</head>

<body>
<?php
include 'navbar.php'; ?>
   
  <?php
include '../core/connection.php';
$sql = "SELECT * FROM booking ";
$query = mysqli_query($con, $sql);
$s = 1 ;
?>
  <div class="row mt-5">

    <div class="col-md-10 ">
      <table class="table ml-3">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Service</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?php echo $s++ ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['phone'] ?></td>
            <td><?php echo $data['service'] ?></td>
            <td>
              <button bid=<?php echo $data['id'] ?> class="btn btn-md btn-danger delBooking">Delete</button>
            </td>
          </tr>
          <?php } ;?>
        </tbody>
      </table>

    </div>
    <div class="col-md-2">

      <div class="container">
        <h2>Add New Appointment</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-success btn-lg mt-3 ml-5" data-toggle="modal" data-target="#myModal">Add</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <h1 class="text-center">Add Appointment</h1>
                <div style="height:500px; width:100%; padding:50px;  ">
                  <form id="enterbooking" method="post">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Name</label>
                      <input class="form-control" type="text" name = "name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name = "email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="tel" name = "phone" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Service</label>
                      <input type="text" name = "service" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="enterbooking" value="1">
                      <button type="submit" class="btn btn-success" id="submit">Add Appointment</button>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>



    </div>

    <script>
    $(function () {
        $(function () {
            $('#enterbooking').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '../core/actions.php',
                    data: $('#enterbooking').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Error occur!");
                        } else {
                            setTimeout(function () {
                                alert("Appointment booked!");
                                location.reload();
                            }, 500);
                        }
                    }
                });

            });
        })
      $(document).ready(function () {
        $('.delBooking').on('click', function (e) {
          e.preventDefault();
          var bid = $(this).attr('bid').trim();
          $.ajax({
            type: 'post',
            url: '../core/actions.php',
            data: {
              delBooking: bid
            },
            success: function (val) {
              console.log(val);
              if (val == 1) {
                //$('').reset();
                alert('Booking Deleted!');
                location.reload();
              } else {
                alert('Fail Something Went Wrong. Try Again!');
              }
            }
          });
        });
      });
    });
    
  
    </script>


</body>

</html>