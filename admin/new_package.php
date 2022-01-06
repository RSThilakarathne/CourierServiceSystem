<?php
include('header.php');
?>  
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add New Package</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <form name="parcels" method="post">
                                        <div class="row">
                                            <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="reference_number" placeholder="Reference Number">
                                             </div>
                                             
                                             <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="status" placeholder="Status">
                                             </div><br>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <h4 style="color: #fff;">Sender Information</h4><br>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="sender_name" placeholder="Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="sender_address" placeholder="Address">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="sender_contact" placeholder="Contact No">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <h4 style="color: #fff;">Reciever Information</h4><br>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="recipient_name" placeholder="Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="recipient_address" placeholder="Address">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="recipient_contact" placeholder="Contact No">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="submit">Save
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light"><a href="index.php">Cancel</a>
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>

<?php
error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'cms');


if (isset($_POST['submit'])) {

  $reference_number = mysqli_real_escape_string($db, $_POST['reference_number']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $sender_name = mysqli_real_escape_string($db, $_POST['sender_name']);
  $sender_address = mysqli_real_escape_string($db, $_POST['sender_address']);
  $sender_contact = mysqli_real_escape_string($db, $_POST['sender_contact']);;
  $recipient_name = mysqli_real_escape_string($db, $_POST['recipient_name']);
  $recipient_address = mysqli_real_escape_string($db, $_POST['recipient_address']);
  $recipient_contact = mysqli_real_escape_string($db, $_POST['recipient_contact']);;

  $user_check_query = "SELECT * FROM parcels";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if (count($errors) == 0) {
   
    $query = "INSERT INTO parcels(reference_number, status, sender_name, sender_address, sender_contact, recipient_name, recipient_address, recipient_contact) VALUES('$reference_number', '$status', '$sender_name', '$sender_address', '$sender_contact', '$recipient_name', '$recipient_address', '$recipient_contact')";
    if(mysqli_query($db, $query)){
    echo "Submitted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
    
  }

}
?>