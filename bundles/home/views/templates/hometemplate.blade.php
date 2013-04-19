<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>My Space Cal</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="">
        <meta name="author" content="Themelize.me">
        {{ Asset::container('home')->styles();}}
        {{ Asset::container('home')->scripts();}}

        <link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    </head>

    <body class="has-navbar-fixed-top page-index">  
        <div id="navigation" class="wrapper">
            <div class="navbar navbar-fixed-top" id="top">
                <div class="navbar-inner">
                    <div class="inner">
                        <div class="container">
                            <a class="brand" href="{{URL::to('/home/home')}}" title="Home">
                                <h1>mySpaceCal<br></h1><br>
                                <span>Welcome to the Satellite Calendar</span>
                            </a>         
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right" id="main-menu">
                                    <li><a href="{{URL::to('/home/home/schedule')}}">Schedule</a></li>
                                    
                                    <li class="dropdown">
                                        <a href="{{URL::to('/home/home/about')}}" id="about-drop">About</a>
                                        <!-- Dropdown Menu -->
                     
                                    </li>

                                    <li><a href="{{URL::to('/home/home/blog')}}">Blog</a></li>
                                    <li><a href="{{URL::to('/home/home/contact')}}">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="more.htm" class="dropdown-toggle" id="more-drop" data-toggle="dropdown">More +</a>
                                        <!-- Dropdown Menu -->
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="more-drop">
                                            <li role="menuitem"><a href="{{URL::to('/home/home/privacy')}}" tabindex="-1">Privacy & Security</a></li>
                                            <li role="menuitem"><a href="{{URL::to('/home/home/faq')}}" tabindex="-1">FAQ</a></li>
                                            <li role="menuitem"><a href="starter.htm" tabindex="-1">Testimonials</a></li>
                                            <li role="menuitem"><a href="{{URL::to('/home/home/instructions')}}" tabindex="-1">Unlocking Instructions</a></li>
                                            <li role="menuitem"><a href="{{URL::to('/home/home/terms')}}" tabindex="-1">Terms and Conditions</a></li>
                                        </ul>
                                    </li>

                                </ul>               
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </div>     
        </div>  

@yield('content')

        <!-- FOOTER -->
        <footer id="footer">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="span6 col blog-list blog-list-short">
                            <h3><strong>Subscribe to our Newsletter:</strong></h3>
                           <!-- Short blog post -->
                            <div class="media row">             
                                <div class="media-body span6">  
                                    <!-- Meta details 
                                    <ul class="inline meta">
                                        <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Fri 30th Nov 2012</li>
                                        <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="team-member.htm">Joe</a></li>
                                    </ul>
                                    <h5 class="title media-heading"><a href="blog-post.htm">Turpis odio dictumst tempor ac et!</a></h5>
                                -->
                               <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">
                                   
<font style="font-weight: bold; font-family:Arial; font-size:16px;">E-mail *</font>
<input type="text" name="ea" size="20" value="" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10px; border:1px solid #999999;">
<input type="submit" name="go" value="GO" class="btn "  style="font-family:Verdana,Arial,Helvetica,sans-serif; font-size:10px;">
<input type="hidden" name="llr" value="bgba49lab">
<input type="hidden" name="m" value="1112227710145">
<input type="hidden" name="p" value="oi">
</form>
                                
                                <!-- BEGIN: SafeSubscribe -->
<div align="left">
    <span>
                                       <img src="https://imgssl.constantcontact.com/ui/images1/visitor/email1_trans.gif" alt="Email Newsletter icon" border="0"></span>
<img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/>
</div>
<!-- END: SafeSubscribe -->

<!-- BEGIN: Email Marketing you can trust -->
<div align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;">
For <a href="http://www.constantcontact.com/jmml/email-marketing.jsp" style="text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;" target="_blank">Email Marketing</a> you can trust
</div>
<!-- END: Email Marketing you can trust -->
                                
                                
                                </div>
                            </div>

                        </div>      
                        <div class="span4 col contact-block">
                            <!--@todo: replace with company contact details-->
                            <h3><strong>Company:</strong></h3>
                            <address>
                                <p><a href ="http://www.es-wireless.com" target ="_blank"> ES-Wireless</a></p>
                                <p><a href ="http://www.eswireless.re-fill.me" target ="_blank"> Prepaid Online Payments</a></p>
                                <p><a href ="#"> Genius Unlock</a></p>
                                <p><a href ="http://www.es-wirelessphones.com" target ="_blank"> Phones</a></p>
                                <p><a href ="http://www.mycellparts.com" target ="_blank"> My Cell Parts</a></p>
                            </address>
                        </div>
                        <div class="span2 col social-media">
                            <!--@todo: replace with company social media details-->        
                            <h3><strong>Follow us on:</strong></h3>
                            <a href='http://facebook.com/ESWireless' target='_blank'><i class="icon-facebook"></i> Facebook</a>
                            <a href=href='http://twitter.com/es_wireless' target='_blank'><i class="icon-twitter"></i> Twitter</a>
                            <a href='http://lnkd.in/eAxt5Z' target='_blank'><i class="icon-linkedin"></i> LinkedIn</a>
                            <a href="#"><i class="icon-google-plus"></i> Google +</a>
                        </div>          
                    </div>
                    <div class="row">
                        <!--@todo: replace with company copyright details-->
                        <div class="subfooter">
                            <div class="span12"><p>Site built by <a href="http://www.codegladiators.com">CodeGladiators</a> | Copyright 2013 </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Scripts -->

    </body>
</html>

