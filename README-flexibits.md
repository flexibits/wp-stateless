# About

This is a fork of https://github.com/udx/wp-stateless to address an out-of-date dependency of a dependency. The version number of the original plugin remains the same in `wp-stateless-media.php` so that the WordPress admin panel will alert us when there is an update to the original, allowing us to either switch back to the original or update the fork again. Our own version number is simpmly included in the "Plugin Name".

# To Release

Run `$ RELEASE_VERSION=<TAG_VERSION> sh build.sh`. This will build the proper package and push the versioned tag to GitHub. From there, download the tagged build and copy into the WordPress installation.

# v1.0.0

Updated the embeded Google API library's dependencies.

`cd lib/Google && composer update --no-dev`