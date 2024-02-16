# Images and the Media Library

Images are an important part of any Web site. WordPress allows uploading several types of images to the WordPress _Media Library_, along with other types of media such as audio and video and even various types of documents:

- Images: .jpg, .jpeg, .png, .gif, .ico, .webp
- Documents: .pdf, .doc, .docx, .ppt, .pptx, .pps, .ppsx, .odt, .xls, .xlsx, .PSD
- Audio: .mp3, .m4a, .ogg, .wav
- Video: .mp4, .m4v, .mov, .wmv, .avi, .mpg, .ogv, .3gp, .3g2

There are some file types that you might expect to be able to upload to WordPress but cannot due to security risks, including:

Images such as .svg, .bmp
Documents like .psd, .ai, .pages
Code files such as .css, .js, .json
Video like .flv, .f4l, .qt

I've included some links in the resources for this tutorial that explain methods to add support for various file types that are not allowed by default:

- <https://www.wpbeginner.com/wp-tutorials/how-to-add-svg-in-wordpress/>
- <https://www.wpbeginner.com/wp-tutorials/how-to-add-additional-file-types-to-be-uploaded-in-wordpress/>

Over the course of this week's tutorials, we will explore various ways to upload and select images. To start, though, let's use the _Media Library_ directly:

1. Download the images that I supplied in Brightspace.
2. In the _Admin area_, select _Media > Add New Media File_.
3. This is the _multi-file uploader_. Notice that you can drag and drop onto the uploader or click _Select Files_ and choose the files to upload.
4. There is also a _browser uploader_ that is still supported in case you have trouble with the multi-file uploader.
5. The maximum upload size supported by your PHP settings is shown here.
6. Go ahead and upload the images that were provided.
7. Once an image is uploaded, you can copy the URL to the clipboard and/or edit the uploaded file, or you can move on to another page. Click _Edit_ on one of the photos so that we can see the options available.
8. Notice the permalink. By default, each media file that you upload has an _attachment page_ that provides information about the media file. For SEO purposes, many people turn off this feature, but we'll talk more about that in a few weeks.
9. The _File URL_ is a direct link to the media file rather than the attachment page.
10. The _Template_ is what is used for the attachment page.
11. The alternative text should be entered and is used by screen readers whenever you insert the image on a page or post. Check the link out for some useful information about alt text.
12. The caption appears below the image when it is included on a page or post.
13. The description is an explanation of the media and is primarily used on the attachment page and for your reference.
14. Fill in the alternative text, caption, and description. When including this image on a page, these can all be overridden.
15. Click _Update_.
16. Under _Media_ on the _Admin menu_, click _Library_.
17. Notice that you can filter and search the media library and also view it in two different ways.
18. You can also see more information by clicking each image.
19. There is also an _Edit Image_ button that should allow you to crop, rotate, and resize images. Unfortunately, something is still broken on the student server and that is getting in the way of these functions. Additionally, WordPress by default produces several scaled-down versions of each image that you upload and this functionality is also disabled at the moment. I'm hoping to have the issue figured out soon, but for now we are stuck with only the original format and no image editing in WordPress.
