# X-UA-Compatible Header #

- Version: 1.1
- Author: Nick Baker
- Build Date: 5th June 2012
- Requirements: Symphony 2.3


## Description

Simple output extension to add an HTTP header to discourage Internet Explorer from using compatibility mode and encourage the use of Chrome Frame if present.

The idea for this came from the [html5boilerplate project](http://h5bp.com), where index.html includes a meta element, but their recommendation is to send an HTTP header, using .htaccess to prevent edge case issues.

This extension provides a useful alternative in those situations where mod_header is not enabled or Apache is not being used.


## Installation

1. Place the `xuacompatible` folder in your Symphony `extensions` directory.
2. Go to _System > Extensions_, select _X-UA-Compatible Header_, choose _Enable/Install_ from the with-selected menu, then click _Apply_.


## Usage

Once installed and enabled, there is nothing left to do - I considered adding preferences, but felt this was overkill.


## Changelog

**Version 1.1**

- Updated for Symphony 2.3

**Version 1.0**

- Initial Release
