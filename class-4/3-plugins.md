---
layout: default
title: "4.3 Plugins"
---

# 4.3 Plugins

While WordPress Themes are used to change how your site looks, WordPress Plugins enable us to add or modify the functionality of WordPress. We will be using many plugins over the remainder of this course. In this video, we'll take a look at the process of finding, installing, updating, and removing plugins.

1. Go to the URL of your tutorial site following by _wp-login.php_. For example, <https://cisstudent.uma.edu/~studentX/cis338/tutorial/wp-login.php>, where _studentX_ is your CIS Student Server username.
2. Log in using the username and password you created in the _Install WordPress_ tutorial.
3. You will be taken to the _Dashboard_, part of the WordPress _Admin Area_. Click _Plugins_ on the _Admin Menu_ to go to the _Installed Plugins_ page.
4. Listed here are all of the plugins that are currently installed. None of them are activated at the moment, meaning that although the files are available to WordPress, the functionality that they provide is not active. Activating a plugin is as simple as clicking the _Activate_ link below the name of one. Try clicking _Activate_ below _Hello Dolly_.
5. The page refreshes and a message appears saying that the plugin has been activated. Notice the different color of the active plugin. Also noticed that the _Activate_ and _Delete_ links have been replaced by a _Deactivate_ link - you cannot delete an active plugin and must deactivate it before you delete it. The _Hello Dolly_ plugin is primarily meant as a demo of how you might build a plugin. Now that it is installed, we see a random lyric from the song in the upper right of the all _Admin Area_ pages. Click the _Deactivate_ link under _Hello Dolly_ to deactivate it.
6. Now click _Delete_ under _Hello Dolly_ to delete it.
7. Click _OK_ to confirm.
8. WordPress indicates that the plugin has now been deleted. The other plugin that is installed by default is _Akismet Anti-spam_, which we are going to leave because we will be using it later in the semester.

Notice that the _Akismet_ plugin has an update available. There are a few ways to install plugin updates. One is to click the _update now_ link that appears in the plugin description. You can also click the _View version X details_ link to see the changelog and then click _Install Update Now_ to install the update. You can install all available updates for all installed plugins by clicking the _Update Available_ filter at the top, clicking the _Select All_ checkbox to select all plugins shown, choose _Update_ under _Bulk Actions_, and click _Apply_. Of course, you can also enable automatic updates using the _Enable auto-updates_ link next to a plugin. Although automatically installing updates improves security, there is a chance that an update will break something. Consequently, if you are going to enable automatic updates (which you should), make sure that you have frequent automatic backups as well. Also, the ideal situation is to have a workflow in place where you can take a snapshot of your WordPress site and move it into a _staging_ environment, install the update there, and then either replace your main site with the updated copy or install the plugin on your live site once you know it won't break anything. Of course, whatever you do, if you don't automatically install updates, you need to check for updates very often and install them soon after they are available. We are not going to install this update right now, because I'm going to show you another way to monitor for and install all types of WordPress updates in another of this week's tutorial videos.

Let's install a plugin that we'll need shortly:

1. Click _Add New Plugin_.
2. Like the WordPress Themes directory, WordPress also provides a WordPress Plugins directory and allows you to install plugins from that directory from within WordPress. Additionally, if you have acquired a plugin from another source, you have an _Upload Plugin_ button that can be used to install a plugin from a .zip file. Notice that within the directory, you can see ratings, last update dates, and numbers of installations. You can also see whether or not the plugin has been tested and shown to be compatible with your version of WordPress. Click on the _Jetpack_ plugin to learn more about it.
3. You can read a full description of what the plugin does, find installation instructions, see frequently asked questions, the changelog, screenshots, and reviews. You can also filter the reviews to certain ratings. There are also links to the plugin's detail page on WordPress.org and to the plugin's own Web site. The author of the plugin as well as a list of contributors are also shown along with compatibility information. We're not going to install Jetpack, at least for now, so click the X.
4. In the search box, type "bps" and press Enter.
5. Scroll through the results until you find _BulletProof Security_. Notice it has many active installations, many reviews, a 5-star rating based on many reviews, was last updated recently, and is compatible with our version of WordPress. We could click the button to _Install Now_ but let's take a look at the changelog. Although you can't see how often it is updated, you can see that they are fixing bugs and adding new features, which is a good sign. Click the button to _Install Now_.
6. The lightbox goes away and we can see the _Installing_ message briefly and then the _Activate_ button appears. At this point, the .zip file has been downloaded and unzipped. Let's activate it by clicking the _Activate_ button.
7. We are returned to the _Installed Plugins_ page where we can see that the plugin is installed and active.
8. Notice that _BPS Security_ now appears on the _Admin Menu_, there is a _BPS Setup Wizard_ notification at the top of the screen, and we see some new links within the _BulletProof Security_ row in the list of installed plugins. New menu items, notifications with the _Admin Area_, and links within the plugin list are just a few of the things that plugins can add.

Before we go, take a look at the options to filter the plugins list and the various bulk actions that are available. To use a bulk action, you can either use the _Select All_ checkbox or check individual boxes and then choose the bulk action from the drop-down and click _Apply_.

In the next video, we are going to talk more about securing WordPress and complete the setup wizard for _BulletProof Security_.
