# Image Sources

People source images from a variety of locations. Sometimes you may find yourself using custom images created for a particular site, such as photos taken by your client, and other times you may be asked to use and/or acquire stock photography. While there are a number of stock image Web sites, there are a handful of stock image Web sites that offer quality images for free with very generous licenses. Note that royalty-free and free are different things. You may need to pay for a royalty-free photo, you just won't have to pay royalties. These sites offer free images, no charge and no royalties, but in some cases attribution might be required or there may be limitations to how you can use the images.

There are multiple plugins that provide easy access to some of these free image Web sites from within WordPress. We are going to install one called _Instant Images_.

1. From the _Admin area_ of your tutorial site, go to _Plugins > Add New Plugin_.
2. Search for _Instant Images_.
3. Click _Install Now_.
4. Click _Activate_.

Now _Instant Images_ is installed. Go to _Media > Instant Images_ to explore what the plugin does for you. _Instant Images_ provides searching and 1-click importing of photos from [Unsplash](https://unsplash.com/), [Openverse](https://openverse.org/), [Pixabay](https://pixabay.com/), and [Pexels](https://www.pexels.com/). Take a look at each of those sites to better understand the licenses offered. Note that there are tabs for searching each of the sites and _Unsplash_ is currently selected. If you hover over a photo, you will see some details about the photo. Click the cog icon on one of the photos to see the options available. It shows the file dimensions at the top. Below that there are a number of fields that you can edit if you want to import this photo into WordPress, including the filename, title (which appears in the Media Library), alt text (for screen readers), and caption (to display below the photo). By default, image attribution is automatically included in the caption. We'll see shortly that this can be turned off, so this link is provided to add attribution if it isn't already here.

These photos are huge! We don't need anything nearly that large on our site. If WordPress's image handling features were working 100%, uploading photos this large wouldn't be the end of the world as WordPress would provide us with optimized versions, but there's a good change you wouldn't want to store those large images on your site anyway. Fortunately, _Instant Images_ allows you to import scaled-down versions of photos. Click the _Settings_ button.

Here we can control the maximum dimensions that we want to import. 1600 pixels wide and 1200 pixels high are good maximums for us for now. We can also choose a default provider, which we'll leave as _Unsplash_. We can also turn off automatic image attribution, but let's not for now. By default, _Instant Images_ appears in the _Media Modal_, which is used to select an image within a page or post. If you want to only use _Instant Images_ from the _Admin Menu_, you can turn this switch on to disable that feature, but let's leave it as-is.

Let's return to _Instant Images_ and search for _virtual reality_. Find an image that you like and click it to add it to your _Media Library_. It's that simple!

Now go to your _Media Library_ and take a look at the photo that was imported. You can see the scaled-down dimensions as well as the title, alt text, and caption with attribution.

In another of this week's tutorials, we'll take a look at how to use _Instant Images_ from within the _WordPress editor_.
