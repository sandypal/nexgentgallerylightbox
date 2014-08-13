nexgentgallerylightbox
======================
First add the nggGetGallery() function to functions.php file from ngggetgallery.php

Next created a new template inside plugins/nextgen-gallery/products/photocrati_nextgen/modules/ngglegacy/view named album-lightbox.php:
(Download the album-lightbox.php)

This was based off of the album-compact.php template. The format for adding galleries is now:

[album id=7 template=lightbox]

Then install preetyphoto media plugin

http://wordpress.org/extend/plugins/prettyphoto-media/

Then I go Gallery -> Options -> Effects, changed the dropdown to Custom, and added this code:

rel="prettyPhoto[%GALLERY_NAME%]"



