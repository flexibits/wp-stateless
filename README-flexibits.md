# About

This is a fork of https://github.com/udx/wp-stateless/releases/tag/3.2.5 to address an out-of-date dependency of a dependency. The version number of the original plugin remains the same in `wp-stateless-media.php` so that the WordPress admin panel will alert us when there is an update to the original, allowing us to either switch back to the original or update the fork again. Our own version number is simply included in the "Plugin Name".

## To Build Locally

Commit changes. Run `$ RELEASE_VERSION=local ./build.sh`. This will build the proper package and drop it into `temp-build-local`. From there, copy into the WordPress installation.

## To Release (you don't need this if building locally)

Commit and push any changes. Run `$ RELEASE_VERSION=<TAG_VERSION> build.sh`. This will build the proper package and push the versioned tag to GitHub. From there, download the tagged build and copy into the WordPress installation.

## v1.0.0

Updated the embedded Google API library's dependencies.

`$ cd lib/Google && composer update --no-dev`

## v1.0.1 (3.2.2a)

Removed UDX libraries from composer files.

## v1.0.2 (3.2.5a)

Updated the embedded Google API library's dependencies.

`$ cd lib/Google && composer update --no-dev`

## v1.0.3 (3.2.5b)

Updated the embedded Google API library's dependencies.

`$ pushd lib/Google && composer update --no-dev && popd`

## v1.0.4 (3.2.5c)

Updated the embedded Google API library's dependencies.

`$ pushd lib/Google && composer update --no-dev && popd`

## v1.0.5 (based on 3.2.5, built locally)

Bumped firebase/php-jwt and wpmetabox/meta-box.

Updated main deps.

`$ composer update --no-dev`
`$ pnpm install`

Updated the baked-in Google API library's dependencies (with composer tweaks)

`$ pushd lib/Google && composer update --no-dev && popd`

## v1.0.6 (based on 3.2.5, built locally)

Updated the baked-in Google API library's dependencies (with composer tweaks)

`$ pushd lib/Google && composer update --no-dev && popd`

## v1.0.8 (based on 3.2.5, built locally)

Updated the baked-in Google API library's dependencies (with composer tweaks)

`$ pushd lib/Google && composer update --no-dev && popd`

Switched to Yarn.

Bumped some npm deps.
