<div class="wrap-all">
   <span class="sr-only"><a href=".main-content">Skip to main content</a> <a href="#kmaps-search">Skip to search</a></span>
	
	<?php print render($page['header']); ?>
	
  <!-- include shanti-explore-menu if it exists -->
  <?php if(module_exists('explore_menu')) { print render($variables['explore_menu']); } ?>
  
    <!-- Begin Content Region -->
    <main class="main-wrapper container-fluid">
      <article class="main-content" role="main">
      	
        <!-- Banner Region -->
        <div class="row">

          <header class="col-xs-12 titlearea banner<?php print $variables['banner_class']; ?>">
           <div role="banner">
            <h1 class="page-title"><span class="icon shanticon-<?php print $variables['icon_class']; ?>"></span><span class="page-title-text">
            <?php
            	if(!empty($variables['default_title']) && !empty($variables['prefix_default_title'])) {
            		print ($title == '')? $variables['default_title'] : $variables['default_title'] . ': ' . $title;
            	} else {
            		print ($title == '')? $variables['default_title']:$title;
            	}
              ?></span></h1>
              <nav class="breadwrap" role="navigation" style="display:none;">
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
          </header>

        </div> <!-- End of Banner Row -->


        <!-- Begin Content Row -->
        <div class="row row-offcanvas row-offcanvas-left">

          <!-- Sidebar First Region -->
          <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first" class="region sidebar<?php print " $bsclass_sb1"; ?>">
              <?php print render($page['sidebar_first']); ?>
            </div>
          <?php endif; ?>

          <!-- Begin Page Content -->
          <section class="content-section <?php if (!empty($bsclass_main)) { print " $bsclass_main"; } ?> equal-height">
	        
	        <button type="button" class="btn btn-default visible-sm view-resources" data-toggle="offcanvas">
            <span class="icon"></span>
          </button>
          
          <!-- Message Area -->
          <?php if (!empty($messages)) { print "<div class=\"messages\">$messages</div>"; } ?>
            <div class="tab-content">
              <article class="tab-pane main-col active" id="tab-overview">
              	 <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                 <?php print render($page['content']); ?>
              </article>
            </div>
          </section>
          <!-- END Content -->

          <!-- Sidebar Second Region -->
          <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-second" class="region sidebar pull-right sidebar-offcanvas<?php print " $bsclass_sb2"; ?>">
              <?php print render($page['sidebar_second']); ?>
            </div>
          <?php endif; ?>
        </div>

        <a href="#" class="back-to-top"><span class="icon fa"></span></a>
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
    <nav id="menu-drill" role="navigation">
     <?php print $variables['user_menu_links']; ?>
    </nav>
  </section><!-- END menu -->
  
</div> <!-- End wrap-all -->

<?php print render($page['footer']); ?>

<!-- Admin Footer -->
<div id="admin-footer">
  <?php print render($page['admin_footer']); ?>
</div>




