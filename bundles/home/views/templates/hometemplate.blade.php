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
                                        <a href="{{URL::to('/home/satellites/edit')}}" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">Satellites +</a>
                                        <!-- Dropdown Menu -->
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="more-drop">
                                            <li role="menuitem"><a href="{{URL::to('/home/satellites/add')}}" tabindex="-1">Add</a></li>
                                            <li role="menuitem"><a href="{{URL::to('/home/satellites/edit')}}" tabindex="-1">Edit</a></li>
                                           </ul>
                     
                                    </li>   
                                    <li><a href="{{URL::to('/home/faq')}}">FAQ</a></li>
                                    <li><a href="{{URL::to('/docs')}}">Api Docs</a></li>
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
                <!-- Meta details -->
                <ul class="inline meta">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Tue 11th Dec 2012</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Nomad</a></li>
                </ul>
                <h5 class="title media-heading"><a href="#">MySpaceCal up and running at Hackathon</a></h5>
              </div>
            </div>
                            <div class="media row">             
              <div class="media-body span6">  
                <!-- Meta details -->
                <ul class="inline meta">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Fri 30th Nov 2012</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="team-member.htm">Nightmare365</a></li>
                </ul>
                <h5 class="title media-heading"><a href="blog-post.htm">Spaceappschallenge is awesome!!!!</a></h5>
              </div>
            </div>

                        </div>      
                        <div class="span4 col contact-block">
                            <!--@todo: replace with company contact details-->
                            <h3><strong>Affiliates:</strong></h3>
                            <address>
                                <p><a href ="http://www.nasa.gov/" target ="_blank"> NASA</a></p>
                                <p><a href ="http://integral.esa.int/mySpaceCal/" target ="_blank"> mySpace Cal</a></p>
                              
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

