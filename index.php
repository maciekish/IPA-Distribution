<?php
require_once("ipaDistrubution.php");
$folder = "";
if( isset( $_REQUEST['f'] ) )
	$folder = $_REQUEST['f'] . "/";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OTA Distribution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">IPA Distribution</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <!--<li class="active"><a href="#">Install</a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

    <?php
    $plists = glob( 'files/' . $folder . "*.ipa");
	if( is_array( $plists ) && count( $plists ) > 0 ) {
		foreach( $plists as $plist_path ) {
		$ipa = new ipaDistrubution( $plist_path, $folder );

		$link = $ipa->applink;
		$provision_profile = $ipa->mobileprovision;
		$icon = $ipa->appicon;
		$app_name = $ipa->appname;
		$bundle_version = $ipa->bundleversion;

		?>
		<h1><?=$app_name?></h1>
		<ul class="nav nav-pills">
			<li class="active">
				<a href="#">Version <?=$bundle_version?></a>
			</li>
		</ul>
		<div class="btn-group">
			<a href="<?=$link?>" class="btn btn-primary btn-large" onclick="javascript:this.innerHTML = 'Installing...';">Install</a>
			<button class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<a href="<?=$provision_profile?>" style="margin: 10px;">Mobileprovision</a>
			</ul>
		</div>
		<?php
		}
	} else {
		?>
		<div class="alert alert-error alert-block">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error!</strong> There are no apps available for installation.
		</div>
		<?php
	}
    ?>

    </div>
	
    <script src="https:////ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>