<?php
    include'header.php';
    include'koneksi/koneksi.php';
?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

<div id="test-box" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Linkweb website template!</p>
            </div><!-- end title -->

           


            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                    
                    <?php 
                        $tampilpuisi=mysqli_query($koneksi,"SELECT * FROM pekerjaan");

                        $no;
                        while($data=mysqli_fetch_assoc($tampilpuisi)){
                    ?>

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i><?php echo $data["nama_pekerjaan"];?></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>

                    <?php 
                    $no++;
                }?>
                        <!-- end testimonial -->
                        
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

     <!-- ALL JS FILES -->
     <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    