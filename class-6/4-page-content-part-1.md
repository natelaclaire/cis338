# Page Content, Part 1

Last week we created our top-level pages. This week we are going to explore more about how to use the _WordPress block editor_ to add content to our site.

Today, we'll cover everything from creating a basic page to advanced features. We'll be starting from the WordPress admin area dashboard, so if you haven't yet logged in, please do so now. Also, take a moment to download the initial draft page content from Brightspace as we will need it shortly.

1. Now, let's navigate to the 'Pages' section. Click on 'Pages' in the admin menu.
2. Hover over _Geeky Activities_ and click _Edit_.

You can see the _Heading_ block that we created last week that reads _Coding Workshops_. We're going to format this page similar to how we had it formatted in the storyboard. To do that, we will create a _Block Pattern_ that we will be able to reuse throughout our site, although initially we'll just be using it on the activities pages. A _Block Pattern_ is simply that - a set of blocks packaged into a single reusable element that can be added anywhere that blocks are used.

1. Click where it says _Type / to choose a block_ and type / and then columns.
2. Press Enter once the _Columns_ block is selected and then choose the _50/50_ option. Note that you can use the arrow keys and/or mouse to select from the block list.
3. Click the _Add Block_ button on the left and choose _Columns_ again followed by _50/50_ again.
4. You now have two columns that are 25% of the page width and one that is 50%. Click _Add Block_ and find the _Cover_ block and click it.
5. The _Cover_ block provides text over an image or solid color background. The image can also have a color overlay. Click _Media Library_.
6. Notice that you have access to _Instant Images_ here. Click _Instant Images_ and search for _Python_, then choose an image that you like that represents the Python programming language.
7. Once the photo has downloaded you will be taken back to the _Media Library_ tab in the modal. Click _Select_ to populate the _Cover_ block's background with the photo selected.
8. While the _Cover_ is still selected, take a look at the other settings available to you. Notice that under _Advanced_ a _Cover_ block defaults to a <div> tag, but you could use a different tag if it is more appropriate.
9. Now type the title of _Python Programming_.
10. In the _Settings_ pane, in the _Block_ tab, change the font size (under _Typography_) to _Normal_.
11. The text that appears in the _Cover_ block is inside a _Paragraph_ block. Choose _Select Cover_ to select the entire _Cover_ block rather than just the _Paragraph_ block.
12. We want to adjust the height to 140px. One way to do this is to use the resize handle at the bottom of the cover to resize it. The other is to click the _Styles_ tab, find _Dimensions_, and enter 140 in the _Minimum Height of Cover_ box. Yes, minimum height. You are essentially overriding the default minimum. If you enter too much text here, the cover will still expand to show everything.
13. With the _Cover_ still selected, click _Options > Add After_ or press Ctrl-Alt-Y to add another block inside the column but below the cover. Add a new cover here and select our mobile app photo as the background and type _Mobile App Development_ in the cover text. Remember to adjust the font size and minimum cover height to match _Python Programming_ cover.
14. Repeat the process for the next column, adding _Web Development_ and _Artificial Intelligence_, with appropriate photos.
15. We now have four covers inside a set of 50/50 columns. That is inside a second set of 50/50 columns. Let's select the entire inner set of columns. To do that, click inside any one of the covers and use the _Select [parent block]_ button repeatedly to select the _Columns_ block (plural - not the _Column_ block) that contains all four covers.
16. Click _Options > Create Pattern_.
17. Name the pattern _Four Activities_ and turn off the _Synced_ toggle. Synced patterns are super useful when you have something that you want to reuse across your site and be able to change once and have that change reflected everywhere. We're going to create one of those in a bit. For this pattern, though, we want to use this basic structure in various places, but will be customizing each use of the pattern, so we don't want them all to change when we change any of them. You can leave the category blank. Then click _Create_.
18. There you go - you've created your first _Pattern_! Now add a _Paragraph_ to the empty column and paste in the appropriate text from the _Geekaway Starter Content_ document.

We're not going to fill in all of the content for this page from the storyboard, but let's see how to use the _Pattern_.

1. Add a new _Heading_ below the columns. Type _Tech-Themed Escape Rooms_.
2. Below that, add another set of _Columns_ and choose 50/50.
3. In the left column, add the appropriate text from the starter content document in a _Paragraph_ block.
4. In the right column, click _Add Block_ and then search for _Four Activities_.
5. Click the pattern when it appears and you should get a copy of the original four cover blocks from above.
6. Replace the text in the four covers with the bullet point text from the starter content document and choose appropriate images. To replace the photo in a _Cover_ block, you can either click _Clear Media_ in the _Settings_ pane and then _Add Media_ in the _Block Popover_, or click _Replace_ in the _Block Popover_.
7. Notice in the _Media Settings_ in the _Settings_ pane for the _Cover_ block, there is a _Focal Point Picker_. This can be used to adjust how the image fits the frame of the _Cover_ block and is especially useful if the aspect ratio of your image and the _Cover_ block differ.
8. Take another look at the _Styles_ tab for the _Cover_ block. In addition to the height and text size, you can adjust the text color, add an overlay color and adjust the opacity of the overlay, add a filter, as well as change the padding, margin, spacing, border, and border radius.

The second _Heading_ block seems a bit close to the four covers above it. Let's add some padding to the block.

1. Click on _Tech-Themed Escape Rooms_.
2. In the _Settings_ pane for the block, find the _Dimensions_ and click the _Dimension Options_ button (the plus sign) to show _Padding_.
3. Click the _Padding Options_ button and show just the _Top_ padding.
4. Use the slider to adjust the padding to where it looks good to you.

That's where we'll stop for this page. Click _Update_ and then take a look at the page on the site!
