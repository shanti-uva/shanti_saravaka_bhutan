# Starter Kit for a Sub-Theme of the Shanti Sarvaka Theme

This folder should be used to create a sub-theme for the Shanti Sarvaka theme. 
The folder should be copied into the sites .../sites/all/themes/ folder and renamed from STARTERKIT to the name of the sub-theme
Within this folder there are several files that have STARTERKIT as part of the name.
Each instance of "STARTERKIT" should be replaced with your sub-theme's name.

The following items should replace "STARTERKIT" with the sub-theme's name:

* Name of the STARTERKIT folder
* STARTERKIT.info (as well as settings in this file for the following files and the file names themselves):
* shanti-main-STARTERKIT.css
* shanti-search-STARTERKIT.css
* shanti-main-STARTERKIT.js
* shanti-search-STARTERKIT.js
* Name of form alter function (STARTERKIT_form_system_theme_settings_alter) in theme-settings.php


# Custom Theme Colors
Drupal Sub themes of Sarvaka Theme should add the following CSS to the top of their custom CSS (shanti-main-xxx.css) file as below. 
Change the Mediabase's color shown here to the subtheme's custom color:

/* BEGIN subtheme colors */
.titlearea,
.carousel-control,
.breadcrumb .icon,
.nav-justified>li.active a,
.nav-justified>li.active a:hover,
.nav-justified>li.active a:focus{ background:#32ccca;}
.nav-justified>li.active:before{ color:#32ccca;}
/* END subtheme colors */
