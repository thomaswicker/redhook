<!DOCTYPE html>

<!--[if IE 8]>
    <script type="text/javascript">
        window.location = "http://www.thomaswicker.com/browsers.html";
    </script>
<![endif]-->

<html <?php language_attributes(); ?>>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no; width=device-width; initial-scale=1; maximum-scale=1">
  <meta name="keywords" content="Thomas Wicker Portfolio, XIRI Media, UI/UX, Design Denver, Denver websites, websites in denver, creative, design, creative design studio, ui, ux, user interface, user experience, graphic design, website design, web designer, printing services, logo, Denver photography">

  <meta name="author" CONTENT="Thomas Wicker: Copyright - 2005-2013, All Rights Reserved"/>

  <meta charset="<?php bloginfo('charset'); ?>" />

  <?php if (is_search()) { ?>
  <meta name="robots" content="noindex, nofollow" /> 
  <?php } ?>

  <title>
   <?php
   if (function_exists('is_tag') && is_tag()) {
     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
     elseif (is_archive()) {
       wp_title(''); echo ' Archive - '; }
       elseif (is_search()) {
         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
         elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
           elseif (is_404()) {
             echo 'Not Found - '; }
             if (is_home()) {
               bloginfo('name'); echo ' - '; bloginfo('description'); }
               else {
                bloginfo('name'); }
                if ($paged>1) {
                 echo ' - page '. $paged; }
                 ?>
     </title>

     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 

     <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

     <!-- BEGIN FAVICONS & ICONS -->
     <link rel="shortcut icon" href="images/favicon.ico">
     <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
     <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
     <!-- END FAVICONS & ICONS -->

     <!-- BEGIN GOOGLE ANALYTICS -->
     <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-49327942-1', 'thomaswicker.com');
        ga('send', 'pageview');

     </script>
     <!-- END GOOGLE ANALYTICS -->

     <script type="text/javascript">
        function MM_swapImgRestore() { //v3.0
        var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function MM_preloadImages() { //v3.0
          var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
            var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
          }

        function MM_findObj(n, d) { //v4.01
          var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
              if(!x && d.getElementById) x=d.getElementById(n); return x;
          }

        function MM_swapImage() { //v3.0
          var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
          if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
        </script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-fixed-top navbar-background" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle navbarToggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div id="navbarMainContainer" class="collapse navbar-collapse navbar-ex1-collapse nav navbar-nav">
        
        <div id="navBarLarge" class="visible-lg visible-md visible-sm ">

              <ul>
            
                <li id="homeBTNActive">
                    <a href="#" title="Home">
                      <i class="fa fa-home"></i>
                    </a>
                </li>
                
                <li id="portfolioBTN">
                    <a href="http://www.behance.net/thomaswicker" target="blank" title="My Portfolio">
                      <i class="fa fa-behance"></i>
                    </a>
                </li>
                
                <li id="photographyBTN"> 
                    <a href="http://thomaswicker.com/photography" title="My Photography">
                       <i class="fa fa-camera"></i>
                    </a>
                </li>
                
                <li id="resumeBTN">
                     <a href="http://thomaswicker.com/resume" title="My Current Resume">
                       <i class="fa fa-file-code-o"></i>
                     </a>     
                </li>                       
                
                <li id="contactBTN" >
                    <a href="#" data-toggle="modal" data-target="#contactModal" title="Contact Me"/>
                      <i class="fa fa-mobile"></i>
                    </a>
                </li>
                
            </ul>

        </div><!--END navBarLarge-->

        <!--BEGIN #navBarSmall for MOBILE-->
        
        <ul id="navBarSmall" class="nav pull-right hidden-lg hidden-md hidden-sm visible-xs">
          
          <li class="col-sm-12 col-xs-12">
            <a href="http://www.thomaswicker.com" title="Home"><p class="navBarSmallActive">HOME</p></a>
          </li>
          
          <li class="col-sm-12 col-xs-12">
            <a href="http://www.behance.net/thomaswicker" target="blank" title="My Portfolio"><p>MY PORTFOLIO</p></a>
          </li>
          
          <li class="col-sm-12 col-xs-12"> 
            <a href="http://www.thomaswicker.com/photography" title="My Photography"><p>MY PHOTOGRAPHY</p></a>
          </li>
          
          <li class="col-sm-12 col-xs-12">
            <a href="http://www.thomaswicker.com/resume" title="My Resume"><p>CURRENT RESUME</p></a>     
          </li>                       
          
          <li class="col-sm-12 col-xs-12">
            <a href="#" title="Contact Me" data-toggle="modal" data-target="#contactModal"/><p>CONTACT ME</p></a>
          </li>
          
        </ul><!--END #navBarSmall for MOBILE-->

      </div><!-- #navbarMainContainer -->

     <div class="headerLogoContainer">
        <div class="logo"><a href="http://www.thomaswicker.com"></a></div>

     <div class="headerTagline">
        <p class="headerTaglineTop">THOMAS J WICKER</p>
        <p class="headerTaglineBottom">UI/UX & FRONT END DEVELOPER - DENVER, CO</p>
    </div>

  </div>

</div><!-- /.container -->

</nav>
