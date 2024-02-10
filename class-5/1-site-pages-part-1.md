# Site Pages, Part 1

Last week we started using the Full Site Editor to modify our site's front page. This week, we are going to learn how to create and modify additional pages, so we'll start looking at how pages are configured and built using _WordPresss blocks_ and the _WordPress block editor_, which is sometimes called the _WordPress editor_ or the _Gutenberg editor_ because Gutenberg was the code name for the editor during development. Then next week we will spend a lot more time in the _WordPress block editor_ adding content to all of the pages.

Pages are an essential component of any website. They allow you to organize and present your content in a structured manner.

We'll be starting from the WordPress admin area dashboard, so if you haven't yet logged in, please do so now. Also, you might find it helpful to have the tutorial site storyboard handy as we will be using that as a guide to create our pages.

1. Now, let's navigate to the 'Pages' section. Click on 'Pages' in the admin menu, then 'Add New Page.'
2. Here, you can give your page a title, add content using the block editor, and even insert media. Let's start by supplying the page title, _Geeky Activities_.
3. To begin entering the page content, there are a few things that you can do: you can press Enter from the page title to move into the block editor, you can click where it says _Type / to choose a block_, or you can click the plus sign that appears below the page title. Let's press Enter and then press the slash key to bring up the block navigator.
4. Search for _Heading_ and use the arrow keys and Enter key to select that.
5. Type _Coding Workshops_ and press Enter.

At this point, you could continue to add page content, but that's something we'll spend more time on next week.

Take a look at the _Page_ block in the _Settings_ pane. There are four sections: Summary, Featured Image, Discussion, and Page Attributes.

Within the _Summary_ section, we can change the visibility in case we want to only make the page visible to admins and editors or want to set a password for viewing the page. We can also determine the publication date and time in case we want to publish it in the future (or make it appear as if it were published in the past). Depending on the page templates provided by the theme, we can also specify a page template, which controls the layout of the page - we can even add our own custom template, if we want. We can also see the URL of the page and change the slug if we want. Remember that the slug is the last part of the permalink/URL of a page. Checking _Pending Review_ can be used to indicate that a page is ready to be reviewed by someone who can publish it. Such pages are highlighted in the _Pages_ list. You can also change the author.

The _Featured Image_ section allows you to provide an image that will be used differently in different themes. In this theme, the featured image appears at the top of the page. We'll be adding featured images to our pages next week. 

The _Discussion_ section simply allows you to turn comments on or off for the page. Remember that WordPress started its life as a blogging platform? Well, comments are important for blogs. Since blog posts and pages in WordPress are stored the same in the database table, comments are automatically supported for pages under the hood; however, most people don't want comments on pages, so they are turned off by default.

_Page Attributes_ include the parent page, allowing you to create a page hierarchy, and the order that this page will appear in that hierarchy. The order is especially useful if you depend on WordPress to build navigation automatically from the page hierarchy, but we will be specifying our own navigation manually, so this won't have any impact on us.

If you look at the top bar near the _Publish_ button, you can see options to view the editor at different responsive breakpoints or preview the page in a new tab. Check the _Pending review_ checkbox and then click _Save as pending_. Then click the _WordPress_ icon to return to the _Pages_ list. Notice that the pending page appears highlighted. Also notice that there are filters to view only published, draft, or pending pages. Hover over the new page and click _Edit_.

Click _Publish_, double-check the settings, and click _Publish_ again. Then view the page.

Notice that when you are viewing a page and are signed in, you have a handy _Edit Page_ button on the _Admin Bar_. Click that.

In the _Settings_ pane, in the _Page_ tab, you will now see some new items. You can switch this back to a draft if you've decided to unpublish it. You can also see revisions that have been made. Click the Revisions button. Here you can compare each revision to the previous state and even restore past revisions. You can also see the user and date and time of each revision.

In our next video, we'll proceed to add the additional site pages, include a slight adjustment to the structure of the site.
