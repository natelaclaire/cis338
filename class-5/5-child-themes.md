---
layout: default
title: "5.5 Child Themes"
---

# 5.5 Child Themes

By now, we have talked a lot about themes. Child themes are extensions of a parent theme, allowing you to make modifications to the parent theme without changing that existing theme's code. Among other benefits, this allows the parent theme to be updated without losing the changes that you made in the child theme. Before the introduction of child themes, many people would modify existing themes directly, which meant that if the theme was updated they had to either reapply the modifications or go without updating, neither of which is ideal.

Many years ago, child themes were much more common than they are today. Improvements such as the _Customizer_ tool and now _Full Site Editing_ have removed the need for child themes for many situations. Still, there are sometimes situations where they are still needed. If you have a theme that you like but want to make modifications or extensions to that theme that cannot be done through plugins, full site editing, the _Customizer_, or another means, then a child theme might be the solution. Changes to Javascript or PHP code are good examples of changes that would require a child theme.

Child themes are also a good way to get into theme development, since you don't need to build an entire theme from scratch.

Unfortunately, a child theme does not bring with it the customizations made to a parent theme using the _Full Site Editor_, so if we switch to using a child theme now, we will lose the changes that we have made to the home page and navigation. If you are thinking that is poor planning on my part...well...you are right. Fortunately, we also don't need a child theme to do anything that we want to do in the tutorial site, so we're going to go through the process of building a child theme as an introduction to the topic, but won't be using the child theme to build our tutorial site.

To get started, create a new folder on your computer called "geekaway."

Inside the new folder, create a file named style.css. WordPress uses the style.css file to store certain information about the theme in what is referred to as the file header, a block comment that appears at the top of the file. Inside the style.css file, type the following:

```css
/**
 * Theme Name:        Geekaway
 * Template:          kaaryam
 */
```

There are numerous other fields, but those two are the only ones required for a child theme that will not be submitted to the WordPress theme directory. The theme name is what you are calling the theme and will appear in the list of themes. The template is the folder name of the parent theme. Since we are building this off of the Kaaryam theme and the Kaaryam theme is in the /wp-content/themes/kaaryam/ folder, we must place kaaryam in the template field.

Technically, that's all that you need to create a child theme. You can actually upload that file into a new folder under /wp-content/themes/ and activate the theme.

Let's do that. Log into your student server account via SFTP and navigate to your tutorial site's folder and then to /wp-content/themes/. Create a new folder called "geekaway" and place the style.css file inside. Then go to your tutorial site's _Admin area_ and go to Appearance and you should see the Geekaway theme is installed and ready to activate. Notice that it doesn't include a screenshot because we didn't provide one. Activate it and then go to your home page. It works! Except, of course, that all of your hard work is gone! Don't worry - we'll bring it back.

But first, let's play around with styles a bit. Go back to your style.css file and add a CSS rule to modify the _Admin bar_ by coloring the background red:

```css
#wpadminbar {
    background-color: red;
}
```

Save the file and re-upload it. Then perform a hard refresh in your browser. Hmm... Nothing happened...

It turns out that WordPress doesn't automatically load your style.css file. You have to tell it to do that, which you do in a file called functions.php. Now, creating a child theme requires knowing some things about how the parent theme works. The Kaaryam theme could have been set up to automatically load a child theme's style.css file if its developers wanted, but they didn't do that. Instead, we'll have to do that ourselves.

Create a new file and save it as functions.php in the geekaway folder. Inside that file, type:

```php
<?php
add_action( 'wp_enqueue_scripts', 'geekaway_enqueue_styles' );

function geekaway_enqueue_styles() {
	wp_enqueue_style( 
		'geekaway-style', 
		get_stylesheet_uri()
	);
}
```

WordPress uses actions to perform tasks at certain times in WordPress's runtime. This code creates a new function that will add our style sheet to the style queue when scripts and styles are being enqueued. We prefix our function name with the folder name of our theme to ensure that no other functions loaded by WordPress have the same name. "geekaway-style" is a name that we came up with to describe our stylesheet and get_stylesheet_uri() is a function that returns the URL for our theme's style.css file.

Save the file and upload it to the same folder as the style.css file. Then refresh your browser. Horray! You should now see red text for the site title.

This is just barely scratching the surface of creating child themes. I've provided some resource links for more information about creating child themes, so I encourage you to take a look and learn more. If you chose a classic theme for your portfolio site, you may find yourself needing to create a child theme to do things like adding a logo to your navigation bar or creating a custom home page (hint: a custom home page would be created using a template called front-page, which means that for a classic theme it would be called front-page.php and placed in the same folder as your style.css file).

## Resources

- <https://developer.wordpress.org/themes/advanced-topics/child-themes/>
- <https://developer.wordpress.org/themes/core-concepts/main-stylesheet/>
- <https://developer.wordpress.org/themes/templates/>
- <https://developer.wordpress.org/themes/functionality/custom-front-page-templates/>
- <https://fullsiteediting.com/lessons/child-themes/>
