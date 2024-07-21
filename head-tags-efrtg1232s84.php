<?php
session_start();
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="theme-color" content="#121212" />
<!--<base href="<?php echo "https://".$_SERVER['SERVER_NAME']; ?>" />-->
<base href="<?php echo $_SERVER['SERVER_NAME']; ?>" />
<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content" />
<meta name="author" content="Cloudy Silver" />
<meta property="og:image" content="#" />
<meta property="og:site_name" content="Cloudy Silver" />
<meta property="og:url" content="<?php echo "https://".$_SERVER['SERVER_NAME']; ?>" />
<style>
.login-box {
/* margin-left: 10px!important;
margin-right: 10px!important; */
}
#iframenone {
    display: none;
}
.iframeus {
    border: none;
}
.loader-icon { 	
    position: fixed;
    left: 0px;
    top: 0px; 
    width: 100%;
    height: 100%;
    z-index: 99999;
    background: url(/images/pageloader.gif) center no-repeat #121212; 
    background-size: 40px 40px;
}
.iframeback {
    background: url(/images/loading.gif) center no-repeat;
    background-size: 75px 75px;
}
#uploadForm {background:#FAF8F8;}
#progress-bar {background-color: #12CC1A;height:20px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
#progress-div {border:#0FA015 1px solid;padding: 5px 0px;margin-left:30px;margin-right:30px;margin-bottom:30px;border-radius:4px;text-align:center;}
#targetLayer{width:100%;text-align:center;}
</style>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>--> 
<!--<script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js"></script>-->
<script src="/files/modernizr.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->
<script src="/files/jquery.min.js"></script>
<!--<script src="//code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>-->
<script src="/files/jquery-2.1.1.min.js" type="text/javascript"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>-->
<script src="/files/upload-form.js"></script>
<script>
$(window).load(function() { $(".loader-icon").fadeOut("slow"); });
</script>
<link rel="shortcut icon" href="/images/cs_favicon.png" />
<div class="loader-icon"></div>
<link rel="stylesheet" href="/files/designed_169.css" />
<link rel="stylesheet" href="/files/lumx.css" />
<link href="/files/bootstrap.css" rel="stylesheet" />
<link href="/files/bootstrap-theme.min2.css" rel="stylesheet" />
<link href="/files/csilver_stylesheet_017.css" rel="stylesheet" />
<!--<link type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />-->
<link type="text/css" href="/files/fonts-awesome.min.css" rel="stylesheet" />
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->
<link href="/files/open-sans.css" rel="stylesheet" />
<link rel="manifest" href="/files/manifest.json" />
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<script src="/files/2.2.4-jquery.min.js"></script>
<script src="/files/full_numscroller-1.0.js"></script>
<script src="/files/full_bootstrap_js.js"></script>
<script src="/files/full_easing_js.js"></script>
<?php include 'LumX-6178aahskskql682-819.php';
?>