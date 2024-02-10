# Menus and Navigation

We now have our pages set up, so let's look at how to configure our navigation.

1. In the _Admin Area_, go to Appearance > Editor.
2. Click _Navigation_.
3. Right now, we see the published pages on our site in the navigation and the navigation bar will stay synced with your page list as you add and remove pages. If you click one of the pages, WordPress will prompt you to detach your navigation from the published pages so that you can make changes. That's what we want because eventually there will be pages that won't appear on the main navigation bar, such as policies that need to be published but don't need to be quite so obvious. Click _Detach_.
4. Click the _Edit_ button to be taken to the block editor for the _Navigation_ block.
5. Currently, we don't have a link to the Home page. To be fair, this is not an uncommon practice. On our site, like most, the site title is a link to the home page, so many sites don't bother to add a Home link to the navigation bar for that reason. We may run out of space, but for now let's try adding a Home link. Click the _Add block_ button at the bottom of the _Block_ tab in the settings pane and search for "link."
6. _Home link_ should appear as one of the options. Click that and then drag the resulting item on the menu to the top.
7. Look over the menu and make any necessary adjustments so that the order follows what is in the storyboard.
8. Click the _Add block_ button again and take a look at the other blocks that we can add to the menu, including buttons, spacers, social icons, a search box, as well as several types of links and other blocks. We're good for now, but it's something to keep in mind for the future.

Navigation changed a lot between classic themes and themes that support Full Site Editing. In case you chose a classic theme for your portfolio site, I'd like to take a moment to show how navigation menus work on those themes. I'm not putting this in an optional tutorial because I think it will be beneficial for everyone to see since it's likely you'll run into it in a future project. There's nothing to follow along with here, so just sit back and watch for a few minutes.

So, I'm on a different copy of WordPress and have activated a classic theme. Under _Appearance_ on the _Admin menu_ you will see _Menus_. With classic themes, the theme defines one or more Menu Locations and you define your menus and then connect each menu to a location. You can even change which menu is in which location at will.

I'll start here by just defining a new menu called _Main Menu_. I won't worry about the structure for the moment and will click _Create Menu_.

I have some new options now that this menu has been created. Notice that I can choose to automatically add new top-level pages to this menu. If I don't check this then as I add new pages, I have to remember to add them to the menu. If I do check this, I need to remember to come here to move pages around after adding them. Consequently, I generally prefer to leave this unchecked so that if I forget to check the menu after adding a page, the page gets left off the menu, which is preferable to accidentally adding a page to the menu that shouldn't be there or leaving the menu in an odd order.

There's also an option here to identify which menu location this menu will appear in. This theme has a single menu location and it is called _Main Menu_, so I'll check this box and click _Save Menu_.

There's also a _Manage Locations_ tab. This shows you all menu locations defined by the theme and allows you to change the menu that is associated with the location, edit the menu that is associated with the location, or create a new menu to associate with the location.

Going back to the _Edit Menus_ tab, you can see the types of items that we can add to the menu. Pages, posts, custom links, and categories are it. No buttons, no search bars, nothing fancy. You can add a link to a social profile as a custom link, but it doesn't appear as an icon. Let's add a link to a Facebook page. We don't have one to use, but we'll just link to the Facebook home page. Click _Custom Links_ and add the URL and link text and click _Add to Menu_. Then save the menu. Now if we go to the home page, you can see the menu in the site. 

Just for a moment, let's go back and go to _Manage Locations_ and disassociate our new menu from the location so that we can see what happens if we don't associate a menu with a particular location. When we go back to the home page, we can see that the menu is gone. Note that this isn't always the case. Many themes will show a default main menu based on the pages on the site.

One final comment about classic themes and menus: many themes also provide a menu location in the footer, which you might use for links such as policies that need to be available but aren't highlighted at the top of the pages on the site. Other themes might provide special menu locations that appear in specific places on specific page templates. Some themes provide very descriptive descriptions for the various menu locations but others are less descriptive, so you might find yourself trying different locations to figure out where they appear on the site.
