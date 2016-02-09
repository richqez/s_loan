<!DOCTYPE HTML>
<html>

<head>
  <title>
    <?php if (isset($title_page)): ?>
      <?php echo $title_page ?>
        <?php else: ?>
          <?php echo "not set title page" ?>
            <?php endif; ?>

  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <link href="<?php echo base_url() . 'assert/css/' ?>bootstrap.min.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url() . 'assert/css/' ?>datatables.css" rel="stylesheet">
  <!-- Custom Theme files -->

  <link href="<?php echo base_url() . 'assert/css/' ?>style.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url() . 'assert/css/' ?>font-awesome.css" rel="stylesheet">





<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.js">

</script>
<script src="<?php echo base_url() . 'assert/js/' ?>datatables.js"></script>

  </script>
  <script src="<?php echo base_url() . 'assert/js/' ?>bootstrap.min.js">
  </script>

  <!-- Mainly scripts -->
  <script src="<?php echo base_url() . 'assert/js/' ?>jquery.metisMenu.js"></script>
  <script src="<?php echo base_url() . 'assert/js/' ?>jquery.slimscroll.min.js"></script>
  <!-- Custom and plugin javascript -->
  <link href="<?php echo base_url() . 'assert/css/' ?>custom.css" rel="stylesheet">
  <script src="<?php echo base_url() . 'assert/js/' ?>custom.js"></script>
  <script src="<?php echo base_url() . 'assert/js/' ?>screenfull.js"></script>

  <script>
  		$(function () {
  			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

  			if (!screenfull.enabled) {
  				return false;
  			}



  			$('#toggle').click(function () {
  				screenfull.toggle($('#container')[0]);
  			});



  		});
  </script>



</head>

<body>
  <div id="wrapper">
    <!----->
    <?php include 'sidebar.php'; ?>
    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="content-main">
