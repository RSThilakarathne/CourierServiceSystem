<?php include 'db_connect.php' ?>
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
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Tracking </a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" id="ref_no"  placeholder="Enter Tracking Number">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" id="track-btn" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Search
														</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="timeline" id="parcel_history">
                
            </div>
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

<script>
    function track_now(){
        start_load()
        var tracking_num = $('#ref_no').val()
        if(tracking_num == ''){
            $('#parcel_history').html('')
            end_load()
        }else{
            $.ajax({
                url:'ajax.php?action=get_parcel_heistory',
                method:'POST',
                data:{ref_no:tracking_num},
                error:err=>{
                    console.log(err)
                    alert_toast("An error occured",'error')
                    end_load()
                },
                success:function(resp){
                    if(typeof resp === 'object' || Array.isArray(resp) || typeof JSON.parse(resp) === 'object'){
                        resp = JSON.parse(resp)
                        if(Object.keys(resp).length > 0){
                            $('#parcel_history').html('')
                            Object.keys(resp).map(function(k){
                                var tl = $('#clone_timeline-item .iitem').clone()
                                tl.find('.dtime').text(resp[k].date_created)
                                tl.find('.timeline-body').text(resp[k].status)
                                $('#parcel_history').append(tl)
                            })
                        }
                    }else if(resp == 2){
                        alert_toast('Unkown Tracking Number.',"error")
                    }
                }
                ,complete:function(){
                    end_load()
                }
            })
        }
    }
    $('#track-btn').click(function(){
        track_now()
    })
    $('#ref_no').on('search',function(){
        track_now()
    })
</script>