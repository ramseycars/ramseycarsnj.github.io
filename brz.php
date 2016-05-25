<?php
  include("inc/heading.php");
 ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<h1>BRZ</h1>
                        <br><br>
                        <!-- Single button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Premium<span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="template.php?cat=premiumBrzCwp">Crystal White Pearl</a></li>
                            <li><a href="template.php?cat=premiumBrzPrr">Pure Red</a></li>
                            <li><a href="template.php?cat=premiumBrzDgm">Dark Grey Metallic</a></li>
                            <li><a href="template.php?cat=premiumBrzIsm">Ice Silver Metallic</a></li>
                            <li><a href="template.php?cat=premiumBrzWbp">WR Blue Pearl</a></li>
                            <li><a href="template.php?cat=premiumBrzCbs">Crystal Black Silica</a></li>
                          </ul>
                        </div>

                        <!-- Single button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Limited<span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="template.php?cat=limitedBrzCwp">Crystal White Pearl</a></li>
                            <li><a href="template.php?cat=limitedBrzPrr">Pure Red</a></li>
                            <li><a href="template.php?cat=limitedBrzDgm">Dark Grey Metallic</a></li>
                            <li><a href="template.php?cat=limitedBrzIsm">Ice Silver Metallic</a></li>
                            <li><a href="template.php?cat=limitedBrzWbp">WR Blue Pearl</a></li>
                            <li><a href="template.php?cat=limitedBrzCbs">Crystal Black Silica</a></li>
                          </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
