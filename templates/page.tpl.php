<div class="wrap-all">
   <span class="sr-only"><a href=".main-content">Skip to main content</a> <a href="#kmaps-search">Skip to search</a></span>
	
	<?php print render($page['header']); ?>
	
  <!-- include shanti-explore-menu if it exists -->
  <?php if(module_exists('explore_menu')) { print render($variables['explore_menu']); } ?>
  
    <!-- Begin Content Region -->
    <main class="main-wrapper container-fluid">
      <article class="main-content" role="main">
      	
        <!-- Banner Region -->
        <section class="row" role="banner">

          <div class="titlearea banner<?php print $variables['banner_class']; ?>">
           <div>
            <header role="banner">
              <h1 class="page-title"><span class="icon shanticon-<?php print $variables['icon_class']; ?>"></span><span class="page-title-text">
                <?php
                	if(!empty($variables['default_title']) && !empty($variables['prefix_default_title'])) {
                		print ($title == '')? $variables['default_title'] : $variables['default_title'] . ': ' . $title;
                	} else {
                		print ($title == '')? $variables['default_title']:$title;
                	}
                ?></span>
              </h1>
            </header> 
              <nav class="breadwrap" style="display:none;">
                <?php print theme('breadcrumb', array('breadcrumb' => $breadcrumb)); ?>
              </nav>
              <div class="banner-content">
                <?php print render($page['banner']); ?>
              </div>
              <div class="banner-tabs">
                <?php
                  // For view/edit tabs
                  print render($tabs);
                ?>
              </div>
            </div>
          </div>

        </section> <!-- End of Banner Row -->


        <!-- Begin Content Row -->
        <section class="row row-offcanvas<?php print " $offcanvas_trigger_sb"; ?>" role="main">

          <!-- Sidebar First Region -->
          <?php if ($page['sidebar_first']): ?>
            <section id="sidebar-first" class="region sidebar sidebar-first sidebar-offcanvas<?php print " $bsclass_sb1"; ?> equal-height">
              <?php print render($page['sidebar_first']); ?>
            </section>
          <?php endif; ?>

          <!-- Begin Page Content -->
          <section class="content-section <?php if (!empty($bsclass_main)) { print " $bsclass_main"; } ?> equal-height">
	        
	        <button type="button" class="btn btn-default visible-sm view-offcanvas-sidebar" data-toggle="offcanvas">
            <span class="icon"></span>
          </button>
          
          <!-- Message Area -->
          <?php if (!empty($messages)) { print "<div class=\"messages\">$messages</div>"; } ?>
            <div class="tab-content container-fluid">
              <article class="tab-pane main-col active" id="tab-overview">
              	 <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                 <?php print render($page['content']); ?>
              </article>
            </div>
          </section>
          <!-- END Content -->

          <!-- Sidebar Second Region -->
          <?php if ($page['sidebar_second']): ?>
            <section id="sidebar-second" class="region sidebar sidebar-second sidebar-offcanvas<?php print " $bsclass_sb2"; ?> equal-height">
              <?php print render($page['sidebar_second']); ?>
            </section>
          <?php endif; ?>
        </section>

        <a href="#" class="back-to-top" role="button" aria-label="Back to Top of Page"><span class="icon fa"></span></a>
      </article>

		  <!-- Search Flyout -->
		  <?php if(!empty($page['search_flyout'])): ?>
		      <!--print render($page['search_flyout']); -->
				<div id="search-flyout" class="region extruder right" role="search" style="display: none;">
				   <?php print render($page['search_flyout']); ?>
				</div>
	    <?php endif; ?>

    </main> <!-- End Main Content -->

  <!-- LOAD menus -->
  <section id="menu" class="menu-main" style="display:none;">
    <nav id="menu-drill">
     <?php print $variables['user_menu_links']; ?>
    </nav>
  </section><!-- END menu -->
  
</div> <!-- End wrap-all -->

<?php print render($page['footer']); ?>

<!-- Admin Footer -->
<div id="admin-footer">
  <?php print render($page['admin_footer']); ?>
</div>




