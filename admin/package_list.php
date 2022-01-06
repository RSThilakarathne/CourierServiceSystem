<?php
include('header.php');
?>  
  
<?php
    $db = mysqli_connect('localhost', 'root', '', 'cms');
    $query = "SELECT * FROM parcels";
    $result = mysqli_query($db, $query);
 ?>          
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Package List</h4>
                            <div class="add-product">
                                <a href="new_package.php">Add Package</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Reference Number</th>
                                    <th>Sender</th>
                                    <th>Reciever</th>
                                    <th>Status</th>
                                </tr>
                             <?php

                                while($row=mysqli_fetch_assoc($result)) 
                                {
                                $reference_number = $row['reference_number'];
                                $sender_name = $row['sender_name'];
                                $recipient_name = $row['recipient_name'];
                                $status = $row['status'];
                            ?>

                            <tr>
                                <td><?php echo $reference_number ?></td>
                                <td><?php echo $sender_name ?></td>
                                <td><?php echo $recipient_name ?></td>
                                <td><?php echo $status ?></td>

                                    <td><a href="edit_2.php?ID=<?php echo $reference_number ?>">Edit</a></td>
                                        <td><a href="code_2.php?Del=<?php echo $reference_number ?>">Delete</a></td>

                                </tr>
                            <?php
                                }
                            ?>
                            
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
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
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>