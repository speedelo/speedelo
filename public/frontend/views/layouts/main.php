<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="nl"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="nl"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="nl"><![endif]-->
<!--[if IE]><html class="no-js ie" lang="nl"><![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="nl"><!--<![endif]-->
	<head>

		<meta charset="utf-8">
		<title><?=h($this->pageTitle)?></title>
		<meta name="description" content="Page description here">
		<meta name="author" content="Speedelo">
		<meta name="viewport" content="width=device-width">
        
        <!-- FAV AND TOUCH ICONS -->
            <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>images/apple-touch-icon-144-precomposed.png" />
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>images/apple-touch-icon-114-precomposed.png" />
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>images/apple-touch-icon-72-precomposed.png" />
            <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>images/apple-touch-icon-57-precomposed.png" />
		
            	

	<meta name="csrf" content="<?php echo Yii::app()->request->getCsrfToken();?>"/>

            
        <!-- FONTS -->
       
            <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
            <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
           	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=McLaren">
            
            <!--[if lt IE 9]>
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
                <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
                <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
            <![endif]-->
  
   
   		<!-- PLUGIN CSS -->
       
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/bootstrap/css/bootstrap-responsive.min.css">
            <!-- <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />-->
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/jpages/jPages.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/prettify/prettify.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/inputlimiter/jquery.inputlimiter.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/ibutton/jquery.ibutton.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/color-picker/color-picker.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/select/select2.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/validate/validate.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/smartWizzard/smart_wizard.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/elfinder/elfinder.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" rel="stylesheet" />
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/tplugins/search/tipuesearch.css" type="text/css" rel="stylesheet" />
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/nivo-slider.css">
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/nivo-themes/bar/bar.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/nivo-themes/light/light.css" type="text/css" media="screen" />

   
            <!-- HTML5 SHIM, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
 
            <!-- FRONTEND STYLES -->
            <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/style.css">
            <!-- BACKEND STYLES -->
            <link href="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/css/backend.css" rel="stylesheet" type="text/css"  media="screen" /> 
		
		
		
        
            <!-- JAVASCRIPT LIBRARIES 
            ================================================== -->
            
            
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/config.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/modernizr-2.6.2.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/jquery-1.8.1.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/respond.min.js"></script>
                
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/touch-punch/jquery.ui.touch-punch.min.js"></script>
            
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/jquery.cookie.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/jquery.mousewheel.js"></script>
        
            <!-- Load plugins -->
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/qtip/jquery.qtip.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.grow.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.pie.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.resize.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.tooltip_0.4.4.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/flot/jquery.flot.orderBars.js"></script>
        
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/sparkline/jquery.sparkline.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/knob/jquery.knob.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/fullcalendar/fullcalendar.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/prettify/prettify.js"></script>
        
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/watermark/jquery.watermark.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/elastic/jquery.elastic.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/ibutton/jquery.ibutton.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/uniform/jquery.uniform.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/stepper/ui.stepper.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/color-picker/colorpicker.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/timeentry/jquery.timeentry.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/select/select2.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/dualselect/jquery.dualListBox-1.3.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/tiny_mce/jquery.tinymce.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/validate/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/search/tipuesearch_set.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/search/tipuesearch.js"></script>
        
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/animated-progress-bar/jquery.progressbar.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/pnotify/jquery.pnotify.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/lazy-load/jquery.lazyload.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/jpages/jPages.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/pretty-photo/jquery.prettyPhoto.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/smartWizzard/jquery.smartWizard-2.0.min.js"></script>
        
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/ios-fix/ios-orientationchange-fix.js"></script>
        
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/dataTables/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/elfinder/elfinder.min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/plupload/plupload.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/plupload/plupload.html4.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/plugins/totop/jquery.ui.totop.min.js"></script> 
        
            <!-- Init plugins -->
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/statistic.js"></script><!-- Control graphs ( chart, pies and etc) -->
        
            
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/main.js"></script>
                
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/js/script.js"></script>
                
                

	</head>

	<body>
    
		<!-- Facebook div for like button -->
		<div id="fb-root"></div>

		<!-- Div for shade line -->
		<div class="header-shadow"></div>

		<!--<div class="container-fluid">-->
        <div class="container">

			<div class="row-fluid print-show">
				<div class="span12">
					Alternate header for print version
				</div>
			</div>

			<div class="row-fluid print-hide">
				<div class="span4">
					<div class="header-action">
						<!--<span class="label label-info">Free shipping on all orders over € 20,-</span>-->
					</div>
				</div>
				<div class="span8">
					<div class="navbar pull-right header-nav">
						<ul class="nav">
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">account</a>
								<ul class="dropdown-menu">
									<li>
										<div class="dropdown-content">
											<br>
											<form>
												<input type="text" class="input-medium" placeholder="Username"><br>
												<input type="password" class="input-medium" placeholder="Password"><br>
												<button class="btn">reset</button>
												<button class="btn btn-primary">login</button>
											</form> 
											<br>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="#">orders</a></li>
							<li><a href="#">customer service</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row-fluid print-hide">
				<div class="span3">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/app/spdlo/img/logo.png" alt="Logo">
				</div>
				
                <div class="span5">
                
                </div>
                
				<div class="span4">
					
                  <div class="row-fluid print-hide header-toolbox">
                    
                        <div class="span12">
							<form class="form-search header-search">
								<div class="input-append">
									<input class="input-large search-query" type="text" placeholder="Search all products...">
									<button class="btn" type="submit">search</button>
								</div>
							</form>
						</div>
                    
                    </div>
                    
						
				 </div>
                    
                    
		    </div>
		
			<div class="row-fluid print-hide">
				<div class="span12">
					<div class="navbar main-nav">
						<div class="navbar-inner">
							<div class="container">
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">menu</a>
								<div class="nav-collapse">
										<?php $this->widget('zii.widgets.CMenu',array(
                                                                                            'htmlOptions' => array( 'class' => 'nav' ),
                                                                                            'activeCssClass'	=> 'active',
                                                                                            'items'=>array(
                                                                                                    array('label'=>'Home', 'url'=>array('/site/index')),
                                                                                                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                                                                                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                                                                                                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                                                                                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                                                                            ),
                                                                                    )); ?>

                                                                                    <?php if (!Yii::app()->user->isGuest) : ?>
                                                                                    <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
                                                                                    <?php endif; ?>
									<ul class="nav pull-right">
										<li class="divider-vertical"></li>
										<li class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-question-sign"></i></a>
											<ul class="dropdown-menu">
												<li>
													<div class="dropdown-content dropdown-content-wide">
														<form class="form-search">
															<div class="input-append">
																<input type="text" class="search-query" placeholder="Type your question...">
																<button class="btn">ok</button>
															</div>
														</form> 
													</div>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope"></i></a>
											<ul class="dropdown-menu">
												<li>
													<div class="dropdown-content">
														<address>
															<strong>CompanyName</strong><br>
															Address 123<br>
															Zipcode, State and City
														</address>
													</div>
												</li>
												<li class="divider"></li>
												<li>
													<div class="dropdown-content">
														<strong>Phone</strong>: 012-345 67 89<br>
													</div>
												</li>
												<li><a href="#"><strong>E-mail</strong>: info@example.com</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-shopping-cart"></i></a>
											<ul class="dropdown-menu">
												<li><a href="#"><span class="pull-left"><small>5x</small> Product A</span> &nbsp; <small class="pull-right label label-info">&euro; 123,-</small></a></li>
												<li><a href="#"><span class="pull-left"><small>1x</small> Product B</span> &nbsp; <small class="pull-right label label-info">&euro; 139,-</small></a></li>
												<li class="divider"></li>
												<li><a href="#">Show all items in shopping cart <i class="icon-chevron-right"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

					<?php //if (!Yii::app()->user->isGuest) : ?>
					<!--<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>-->
					<?php //endif; ?>
				
		<?php echo $content ?>
	
            
            
                                <div class="row-fluid print-show">
					<div class="span12">
						Speedelo
					</div>
				</div>

			</div>

		

	</body>

</html>
