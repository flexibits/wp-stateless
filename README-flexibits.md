# About

This is a fork of https://github.com/udx/wp-stateless to address an out-of-date dependency of a dependency. The version number of the original plugin remains the same in `wp-stateless-media.php` so that the WordPress admin panel will alert us when there is an update to the original, allowing us to either switch back to the original or update the fork again. Our own version number is simply included in the "Plugin Name".

# To Release

Commit and push any changes. Run `$ RELEASE_VERSION=<TAG_VERSION> sh build.sh`. This will build the proper package and push the versioned tag to GitHub. From there, download the tagged build and copy into the WordPress installation.

# v1.0.0

Updated the embedded Google API library's dependencies.

`cd lib/Google && composer update --no-dev`

# v1.0.1 (3.2.2a)

Removed UDX libraries from composer files.

# v1.0.2 (3.2.5a)

Updated the embedded Google API library's dependencies.

`cd lib/Google && composer update --no-dev`
