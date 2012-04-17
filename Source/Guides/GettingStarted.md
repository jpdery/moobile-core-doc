Getting Started
================================================================================

This guide will walk you through the steps needed to setup a Moobile development environment.

## Browser Requirements

You will need to use one of these browsers to run a Moobile app:

- Safari 5.1.5 or better.
- Google Chrome 18 or better.

Even though most of the development is done on a desktop browser, it's *highly* recommended to test on a mobile device very often. Do not wait until your app is completed to test it on a mobile device.

**Note:**

If you are using Google Chrome, make sure you start it using the `--allow-file-access-from-files` command line option [as explained here](http://code.google.com/p/chromium/issues/detail?id=40787) or it might not work properly.

## Download the Moobile Boiler Plate

This package contains everything you need to start working on a Moobile app such as:

- MooTools, minified and unminified.
- Moobile, minified and unminified.
- Moobile simulator.
- Stylesheets
- Documentation
- Build scripts
- YUI Compressor

[Download the boiler plate here](https://github.com/jpdery/moobile-boiler-plate/zipball/master)

### The boiler plate structure:

Once extracted this should look like this:

<img src="assets/guides/GettingStarted/moobile-boiler-plate.png" />

#### documentation folder
This folder contains the HTML documentation for the current version of Moobile.

#### moobile-core
This folder contains Moobile's source with all dependencies. If you need to rebuild the source, use the following command from root directory:

	moobile-core/build > www/js/libs/moobile-0.1.js

#### moobile-psd
This folder contains various psd files used for the current iOS style.

#### moobile-simulator
This folder contains the simulator. Open `index.html` in web browser to start the simulator.

#### tools
Contains tools such as the yui-compressor

#### www
This folder contains your app and all its assets.

#### www-src
This folder contains your app classes, one per file. It also contains MooTools packager and build scripts. You don't necesseraly need to use this folder. However, if you want to merge all your files into one `app.js` file, use this command:

	www-src/build > www/js/app.js
