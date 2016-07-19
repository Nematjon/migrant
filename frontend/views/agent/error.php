<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$data = array('status'=>$exception->getName(),'code'=>$exception->statusCode,'message'=>$exception->getMessage() );
$this->title = $data["status"];
?>
 <?php
$error404=<<<error404
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center error-box">
					<h1 class="error-text-2 bounceInDown animated"> Error 404 <span class="particle particle--c"></span><span class="particle particle--a"></span><span class="particle particle--b"></span></h1>
					<h2 class="font-xl"><strong><i class="fa fa-fw fa-warning fa-lg text-warning"></i> Page <u>Not</u> Found</strong></h2>
					<br />
					<p class="lead">
						The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from
					</p>
					<p class="font-md">
						<b>... That didn't work on you? Dang. May we suggest a search, then?</b>
					</p>
					<br>
					<div class="error-search well well-lg padding-10">
						<div class="input-group">
							<input class="form-control input-lg" type="text" placeholder="let's try this again" id="search-error">
							<span class="input-group-addon"><i class="fa fa-fw fa-lg fa-search"></i></span>
						</div>
					</div>

					<div class="row">

						<div class="col-sm-12">
							<ul class="list-inline">
								<li>
									&nbsp;<a href="javascript:void(0);">Dashbaord</a>&nbsp;
								</li>
								<li>
									.
								</li>
								<li>
									&nbsp;<a href="javascript:void(0);">Inbox (14)</a>&nbsp;
								</li>
								<li>
									.
								</li>
								<li>
									&nbsp;<a href="javascript:void(0);">Calendar</a>&nbsp;
								</li>
								<li>
									.
								</li>
								<li>
									&nbsp;<a href="javascript:void(0);">Gallery</a>&nbsp;
								</li>
								<li>
									.
								</li>
								<li>
									&nbsp;<a href="javascript:void(0);">My Profile</a>&nbsp;
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
error404;

$error500=<<<error500
<div class="row">
	<div class="col-sm-12">
		<div class="text-center error-box">
			<h1 class="error-text tada animated"><i class="fa fa-times-circle text-danger error-icon-shadow"></i> Error 500</h1>
			<h2 class="font-xl"><strong>Oooops, Something went wrong!</strong></h2>
			<br />
			<p class="lead semi-bold">
				<strong>You have experienced a technical error. We apologize.</strong><br><br>
				<small>
					We are working hard to correct this issue. Please wait a few moments and try your search again. <br> In the meantime, check out whats new on SmartAdmin:
				</small>
			</p>
			<ul class="error-search text-left font-md">
				<li><a href="javascript:void(0);"><small>Go to My Dashboard <i class="fa fa-arrow-right"></i></small></a></li>
				<li><a href="javascript:void(0);"><small>Contact SmartAdmin IT Staff <i class="fa fa-mail-forward"></i></small></a></li>
				<li><a href="javascript:void(0);"><small>Report error!</small></a></li>
				<li><a href="javascript:void(0);"><small>Go back</small></a></li>
			</ul>
		</div>
	</div>
</div>
error500;

switch( $data["code"] ){
	case 404:
		echo $error404;
	break;
	case 500:
		echo $error500;
	break;
}