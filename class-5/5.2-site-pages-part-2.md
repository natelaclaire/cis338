---
layout: default
title: "5.2 Site Pages, Part 2"
---

# 5.2 Site Pages, Part 2

When we were building the storyboard, I mentioned that we might want to make a change to the site structure. This is the kind of thing that you would want to avoid once a site is launched, but frequently takes place during development. Honestly, it's not uncommon to do after launch, either, but if you do it right after launch it takes a lot more work than it does during development.

Let's start by adding a new page called _Activities_. You'll do that from the _Admin menu_ by going to Pages > Add New Page.

For now, we'll just publish this with only a page title. If you click the _View Page_ button, you'll see a very empty page. What I'd like to focus on is the URL, though. You'll see _activities_ appear at the end of the site's URL. This slug was automatically created from the page title.

Next, let's open up our _Geeky Activities_ page. To do that, go back to the _Admin Area_, return to the _All Pages_ admin page, hover over Geeky Activities, and click _View_. Take a look at the URL. Like the _Activities_ page, the slug based on the page title appears directly after the site's URL. 

We're going to modify our site structure by placing the _Geeky Activities_ and _Less Geeky Activities_ pages under the _Activities_ page. To do that, click _Edit Page_ on the _Admin Bar_, turn on the _Settings_ pane if it isn't already appearing, and expand _Page Attributes_. Click in the _Parent_ box, and you should see _Activities_ appear. If not, start typing _Activities_ and it should appear. Click _Activities_. Then click _Update_. Take a look at the URL under _Summary_. The page has now been placed below the Activities page. If you click the URL, you can modify the slug, which is labeled Permalink for some reason. Notice that the URL currently contains /activities/geeky-activities/. Let's make it more succinct by changing the slug to just geeky. Click _Update_ again and now view the page.

Take a look at the URL and confirm that the URL is now your site's URL followed by /activities/geeky/. You may notice another change as well. If you look at the navigation bar, you'll see Activities with a down arrow. Hover over that and Geeky Activities appears. If you use the default navigation bar, new pages are automatically added based on the site's structure, including subpages. We'll be making some changes to the navigation in the next tutorial, but we'll keep this concept.

On the _Admin Bar_, there is a _New_ menu. Hover over that and you'll see all of the different types of objects and content that you can add. Click _Page_ to add a new page.

For the second category of activities, our client has decided to replace Less Geeky with Normie for a little fun. Type _Normie Activities_ as the title and then change the slug to just normie. Set the parent page to _Activities_ and then publish the page.

Add a new page called _Accommodations_. This will be a top-level page, so it won't have a parent.

Proceed to add the other top-level pages, _Events_, _Blog_, _Geek It Up!_, _Location_, and _Contact Us_.

Next, we'll look at setting up our site's navigation.
