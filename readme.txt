=== Edit Image Thumbnails Separately ===
Contributors: wordpressdotorg, costdev, azaozz
Requires at least: 6.3
Tested up to: 6.3
Stable tag: 1.0.0
Requires PHP: 7.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Re-enables editing of the thumbnail size of images separately.

== Description ==
Separate editing of image thumbnails is deprecated and disabled since WordPress 6.3. This plugin re-enables it in order to maintain specific user requirements and workflows.

WordPress has been using responsive images since version 4.4. Because of that having custom, non-proportional image sub-sizes is not considered a good practice. It reduces the number of images that can be used for responsive loading, and at the same time produces an image that cannot be loaded responsively as there are no other matching sizes for it.

To re-enable editing and saving of image thumbnails separately, install and activate this plugin. To disable it again, deactivate and delete the plugin.
