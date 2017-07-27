# Codelation Default Wordpress Theme

A base theme for the [Wordpress](http://wordpress.org) platform developed by [Codelation](https://codelation.com).

## Install Server

1. Download [Local By Flywheel](https://local.getflywheel.com) and follow install instructions.

## Install Compass Related Assets

Assuming that you already have our development environment setup we just need to install a couple of gems.

Install Compass CSS Authoring Framework

`gem install compass`

Install Sass-Globbing to be able to import all scss files in a directory

`gem install sass-globbing`

### Codelation Mixins

We also natively include all of the [Codelation Mixins](https://github.com/codelation/codelation_assets/) from the Codelation Assets project. This is manually setup, so any updates to the Codelation Assets project will need to be manually added to `assets/vendor/codelation`

## Install Theme

1. Clone this project into the wordpress directory you just created under `wp-content/themes/`
- Log into the Wordpress Admin and switch the theme to the `Codelation Default Theme`
- Navigate to the `codelation-default/assets` directory and type `compass watch`

### Stylesheets

- `codelation-default/style.css` imports from `codelation-default/css/style.css` to keep everything in the Wordpress world happy.
- `codelation-default/css/style.css` imports all of the generated styles `codelation-default/assets/stylesheets/style.scss`:
  - `codelation-default/stylesheets/components/*`
  - `codelation-default/stylesheets/views/*`
- `codelation-default/assets/stylesheets/_base.scss` includes all of the codelation-assets mixins and must be included in every scss file in which to use a codelation-assets mixin
- `codelation-default/assets/stylesheets/_variables.scss` is used to declare all local variables and is included in `_base.scss`
