---
layout: default
title: "4.1 Themes"
---

# 4.1 Themes

In WordPress, the theme provides the look and feel of your site. Since all of your content is stored in the database, you can change the theme at any time and the way the content is displayed will instantly change.

To see this in action, let's do a small test:

1. Go to the URL of your tutorial site following by _wp-login.php_. For example, <https://cisstudent.uma.edu/~studentX/cis338/tutorial/wp-login.php>, where _studentX_ is your CIS Student Server username.
2. Log in using the username and password you created in the _Install WordPress_ tutorial.
3. You will be taken to the _Dashboard_, part of the WordPress _Admin Area_. Click the _Home_ button to go to the home page.
4. Take note of the way the site currently looks. This is the _Twenty Twenty-Four_ theme, which is the current default theme.
5. Return to the _Admin Area_.
6. Click the _Appearance_ tab to be taken to the _Themes_ page.
7. Find the _Twenty Twenty-Three_ theme, hover over it, and click the _Activate_ button.
8. Click the _Home_ button again to see how the site has changed.
9. Note that the same pages and blog posts exist, but they are formatted based on the new theme.
10. Return to the _Admin Area_ and select _Appearance_ > _Editor_.
11. Select _Styles_ and notice the various theme styles that are available.
12. Click a few styles and notice how the preview changes. These [_Style Variations_](https://developer.wordpress.org/themes/global-settings-and-styles/style-variations/) are all provided by the theme, allowing the theme developer to provide multiple sets of fonts, colors, and some other styles.
13. Click the _Style Book_ icon to see how the style variation will impact various site features.
14. Click the _Edit Styles_ button and notice that you can further tweak the styles. It's worth noting that when you choose a style variation, WordPress treats the variation's settings as if you had specified all of those details here. Why is that important? Well, first of all, it means that if you install a theme update that provides new settings in the style variation that you selected, those changes won't be reflected on your site unless you change to a different variation and then change back to the original one. The second reason that this is important is that if you make any changes here, those changes completely overwrite the theme variation. And, if you then choose a different theme variation, the changes that you made get overwritten. So, if you heavily customize the settings here, be careful not to choose a different style variation as you will lose your customizations.

One of WordPress's powers is its huge theme ecosystem. If you return to _Appearance_ > _Themes_ you will find a button labeled _Add New Theme_. This button gives you easy access to the [_WordPress Themes directory_](https://wordpress.org/themes/), a large repository of freely-available open source themes for WordPress, including two-click installation and activation of any theme that you find.

Additionally, there are many WordPress themes available for download all over the Web, some free and some paid. Themes that you find outside of the WordPress Themes directory are provided as a .zip archive and can be installed by clicking the _Upload Theme_ button at the top of the _Add Themes_ page.

Let's select a new theme for our tutorial site:

1. Click in the _Search Themes_ box and enter _Kaaryam_ and press Enter.
2. You should see one result. Click it to get more information.
3. Check the ratings and read the information.
4. Once you're comfortable, click _Install_.
5. Once the _Install_ button changes to _Activate_, click that.
6. Now click the _Home_ button to see the updated site.

This theme is designed for conferences, but it supports WordPress's full site editing functionality, so we'll be able to change it to look the way we need.

In the next video, we'll pick up right here from the home page and make some customizations.
