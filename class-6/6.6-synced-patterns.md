---
layout: default
title: "6.6 Synced Patterns"
---

# 6.6 Synced Patterns

As mentioned before, _Synced Patterns_ allow us to make a change one place and have it reflected everywhere that we have used that particular pattern. One excellent use of this technology is to create a pattern that discusses a current promotion so that it can be changed when a new promotion comes along.

1. Go to the home page and click _Edit site_.
2. Click _Edit_ and scroll to the first white space, which contains four images. We're going to replace this, but first, take a look at how it is constructed. The white bar is a _Group_. Inside that are four _Columns_, each containing a _Group_ that contains two _Rows_. The top row contains another _Group_. Here's where it gets really interesting: the droplet shape is actually not an image but rather is built using the border-radius style. If you go to the _Style_ tab and scroll down to _Border_, it appears that there is a 100px radius, but that's not the whole story. Click the _Unlink radii_ button and notice that one corner doesn't have a radius set, so it defaults to 0, while the others have the 100px radius. Creative! By the way, this is provided by the theme as a _Pattern_ called _Features_ in the _Kaaryam_ category, so if you want to use it to build something else in the future, you can easily get it and play with it.
3. Okay, go ahead and select everything inside the outermost _Group_ and delete it.
4. Add a _Group_ block with the default layout.
5. Click _Styles_ and choose a background color.
6. Add a 3px border in the color of your choice with a 20px radius.
7. Inside, add a _Heading_ that says _Geek Family Fun Day, Wednesday, June 26!_.
8. Align the heading center and use the _Custom_ padding option to adjust the top and bottom padding.
9. Add 50/50 columns.
10. In the left column, add a _Paragraph_ block that reads _We're swinging the doors wide open for one day only! Bring your whole family, get a tour, and see what we have to offer!_. Center the text, color it black, and increase the font size.
11. Add another _Paragraph_ block below the first that reads _It's completely FREE and every family that attends will get a coupon for a discount on a future stay!_.
12. In the right column, add an _Image_ block with a photo of a family, carnival, something like that. Give the photo a 20px border radius and remove the caption.
13. At the bottom, add a _Button_ that says, _Register Today!_.
14. Adjust the bottom margin of the button so that it doesn't touch the bottom border. We'll add a link to the button later.
15. Select the group that has the rounded border.
16. Click _Options_ and _Create Pattern_.
17. Name it _Promo_, add it to the _Featured_ category, leave the _Synced_ option turned on, and click _Create_.
18. Save the page and then view it.
19. We need to adjust some spacing, but first let's add this somewhere else.
20. Go to the _Normie Activities_ page and click _Edit Page_.
21. Scroll to the bottom of the page and add our _Promo_ pattern.
22. Save the page using the _Update_ button and then view it.
23. Now let's fix our text and photo being too close to the borders. Click _Edit Page_.
24. Scroll down to the Promo and select the _Columns_ block.
25. Adjuct the left/right padding to around a 3.
26. Save the page again and you will see a message about saving the change to the pattern. Save it and then view the page.
27. To confirm that the pattern synced, go to the home page.
