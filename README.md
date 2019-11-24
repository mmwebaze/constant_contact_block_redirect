# constant_contact_block_redirect
##About Constant Contact Block Redirect
This Drupal 8 module makes it possible to redirect Constant Contact Block submissions or registration to a preconfigured 
Drupal page. Only internal drupal pages are currently supported. By default, Constant Contact
Block will return to the same page.
## Installation and setup
* To install the module, simply git clone this repository into your modules/custom folder and enable it through the UI or 
drush i.e <i>drush en constant_contact_block_redirect -y</i>.
 
* From Constant Contact Block configuration (/admin/config/constant_contact_block/constantcontantconfig), set the redirect
 URL or simply enable redirect and use the default page provided by this module. 
* To customize the message, locate the 
 constant-contact-block-redirect.html.twig file and simply edit it as an HTML document.

## Support & Licensing
* Any bugs or required support must be made in the issue page of the module's git repository.
* Going forward, this module will eventually be merged with Constant Contact Block code base.
* This software is licensed under GNU General Public License, version 2 or later. That means you are free to download, 
reuse, modify, and distribute any files in the module's git repository. More information on GNU General Public 
License, version 2 or later can be found <a href='http://www.gnu.org/licenses/old-licenses/gpl-2.0.html'> here</a>
