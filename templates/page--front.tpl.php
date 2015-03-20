<div class="wrap-all">
   <span class="sr-only"><a href=".main-content">Skip to main content</a> <a href="#kmaps-search">Skip to search</a></span>
    <!-- Header Region -->
   <header class="header-banner">
    <div class="navbar navbar-default">

	      <nav class="navbar-buttons" role="navigation">
	        <span class="menu-icon shanti-searchtoggle"><a href="#"><span class="sr-only">Search</span><span class='icon shanticon-search'></span></a></span><!-- mobile < 400 : search -->
	        <span class="menu-icon menu-toggle"><a href="#"><span class="sr-only">Main Menu</span><span class="icon shanticon-menu"></span></a></span><!-- desktop > 768 drilldown menu : main-menu -->
	        <span class="menu-icon menu-maintoggle"><a href="#"><span class="sr-only">Main Menu</span><span class="icon shanticon-menu"></span></a></span><!-- mobile < 768 : main-menu -->
	        <span class="menu-explore menu-exploretoggle"><a href="#"><span>Explore</span><span class="icon shanticon-directions"></span></a></span><!-- mobile < 768 : collections -->
	      </nav>

	      <h1 class="navbar-header<?php if(!$variables['shanti_site']) { print " default"; } ?>">
	        <a href="<?php print $variables['home_url']; ?>" class="navbar-brand" title="<?php print $site_name; ?> Homepage">
	          <?php if($variables['shanti_site']): ?>
	            <span class="icon shanticon-logo"></span><span class="shanti">SHANTI</span><?php if($variables['use_admin_site_title']) {
		            	print "<span class=\"site-title\">{$site_name}</span>";
		            } ?>
	          <?php else: ?>
	            <img src="<?php print $logo; ?>" class="site-logo" /> <span class="site-title"><?php print $site_name; ?></span>
	          <?php endif; ?>
	          <?php if($site_slogan) { print '<span class="site-slogan">' . $site_slogan . '</span>' ;} ?>
	        </a>
	      </h1>

	      <!-- HEADER REGION -->
	      <nav id="sarvaka-header" class="region navbar-collapse collapse navtop" role="navigation"> <!-- desktop display > 768 -->
	         <form class="form">
	         <fieldset>
	          <ul class="nav navbar-nav navbar-right">
		            <!-- If admin puts blocks in  header, render here -->
		            <?php print render($page['header']);  ?>
	          </ul>
	         </fieldset>
	         </form>
	       </nav>
	       <!-- End of HEADER region -->
     </div>
     <!-- include shanti-explore-menu if it exists -->
     <?php if(module_exists('explore_menu')) { print render($variables['explore_menu']); } ?>
    </header>

  <section class="banner-grid">
		  <div class="grid-row">
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		  </div>
      <div class="grid-row">
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>      
      </div>
      <div class="grid-row">
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>      
      </div>
      <div class="grid-row greyscale">
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>
		    <a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#"></a>      
      </div>
      
      <div class="home-intro">	
	      <div class="container-fixed">      
	      <div class="row"> 
			       <div class="intro-summary col-xs-12 col-sm-8">
				       <p>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; not just based on gross domestic product.</p>
			       </div> 
			       <div class="intro-search col-xs-12 col-sm-4">
		           <p>Search stuff...</p>
			      </div>
	      </div> 
	      </div>      
      </div>  
	</section>      
  
  <div class="home-teaser-wrapper">  
	  <main class="container-fixed">
	    
	    <div class="teaser row">   
				<div class="tzr-summary col-xs-12 col-sm-9">   
					   <span class="icon shanticon-audio-video"></span>               
             <p><span class="teaser-title">Audio-Video</span>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; where development is measured using a holistic approach of well-being, not just based on gross domestic product.</p> 
	      </div>  
	      
	      <div class="tzr-related col-xs-12 col-sm-3">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div> 
	    </div>



	    <div class="teaser row odd">   	      
	      <div class="tzr-related col-xs-12 col-sm-3">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div>  

				<div class="tzr-summary col-xs-12 col-sm-9">   
					   <span class="icon shanticon-photos"></span>               
             <p><span class="teaser-title">Imagery</span>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; where development is measured using a holistic approach of well-being, not just based on gross domestic product.</p> 
	      </div> 
	    </div>
	    
	    
	    
	    
	    <div class="teaser row">   
				<div class="tzr-summary col-xs-12 col-sm-9">   
					   <span class="icon shanticon-texts"></span>               
             <p><span class="teaser-title">Texts</span>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; where development is measured using a holistic approach of well-being, not just based on gross domestic product.</p> 
	      </div>  
	      
	      <div class="tzr-related col-xs-12 col-sm-3">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div>
	    </div>
	    
	    
	    
	    
	    <div class="teaser row odd">   
	      <div class="tzr-related col-xs-12 col-sm-3">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div>  

				<div class="tzr-summary col-xs-12 col-sm-9">   
					   <span class="icon shanticon-places"></span>               
             <p><span class="teaser-title">Places</span>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; where development is measured using a holistic approach of well-being, not just based on gross domestic product.</p> 
	      </div>  
	    </div>
	    
	    
	    
	    
	    <div class="teaser row">   
				<div class="tzr-summary col-xs-12 col-sm-9">   
					   <span class="icon shanticon-subjects"></span>               
             <p><span class="teaser-title">Subjects</span>Bhutan is a unique country both culturally and environmentally. Perched high in the Himalayas, it is the world’s last remaining Buddhist Kingdom. It has developed the philosophy of Gross National Happiness; where development is measured using a holistic approach of well-being, not just based on gross domestic product.</p> 
	      </div>  
	      
	      <div class="tzr-related col-xs-12 col-sm-3">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div> 
	    </div>
	    
	    
	    
	    <div class="teaser-feature row">   
				<div class="tzr-feature col-xs-12 col-sm-4">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div> 
				<div class="tzr-feature col-xs-12 col-sm-4">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div> 
				<div class="tzr-feature col-xs-12 col-sm-4">                  
             <div>
	             <h5>Featured Resources</h5>
	             <ul>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
		             <li><a href="http://dukar.net/dev/pub/bhutan-mockup/mockup-bhutan.html#">This is useful link</a></li>
	             </ul>
             </div>
	      </div> 	      
	    </div>	    	    	   
	    	    	   
	    	    	   
	    	    	    	    
	  </main>
  </div>


  <!-- LOAD menus -->
  <section id="menu-main" class="menu-main-mobile { url:'<?php if(!empty($base_theme_path)) { print $base_theme_path; } else { print $theme_path; } ?>js/inc/menus/menu-ajax.php'} menu-accordion"> </section>
  <section id="menu-collections" class="menu-collections-mobile { url:'<?php if(!empty($base_theme_path)) { print $base_theme_path; } else { print $theme_path; } ?>js/inc/menus/menu-ajax.php'} menu-accordion"> </section>

  <section id="menu" class="menu-main-desk" style="display:none;">
    <nav id="menu-drill" role="navigation">
     <?php print $variables['user_menu_links']; ?>
    </nav>
  </section><!-- END menu -->
</div> <!-- End wrap-all -->

<!-- Footer -->
<footer class="footer">
  <div>
    <p>&copy; Copyright 2014</p>
    <?php print render($page['footer']); ?>
  </div>
</footer>

<!-- Admin Footer -->
<div id="admin-footer">
  <?php print render($page['admin_footer']); ?>
</div>




