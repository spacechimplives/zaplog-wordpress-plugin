#Overview

The zaplog plugin delivers functionality based on the succesful <a href="http://zaplog.nl">zaplog social news site</a>. The site was built in 2007. Its expressionengine 1.6 technology and design are outdated and need to be ported, upgraded to wordpress 4.1

Any member can post or link dump articles. Posts are eligable for frontpage display based on an algorithm that adaptively weighs votes, comments, commenters, views, etc. 

Members can earn participation points based on wich rewards (payback from ad income, donations) are distributed. This is done using the MOBBR.COM payment system.

All functionality will be contained in a single plugin.

The first milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Minimum%20viable%20product">Minimum Viable Product</a>. The second milestone will be building a social RSS aggregator.

##Development and rewarding

Anyone is invited to contribute.

This GITHUB will be funded using Mobbr. As soon as the milestones and issues are closed, are pledges are divided among all contributors based on their participation.

Where possible we will use and integrate existing open-source plugins, if this is done using GITHUB repos, the original contributors will share in the rewards. 

Funding and rewards can be followed here:

<a href="https://mobbr.com/#/task/aHR0cHM6Ly9naXRodWIuY29tL3BhdHJpY2tzYXZhbGxlL3phcGxvZy13b3JkcHJlc3MtcGx1Z2luL21pbGVzdG9uZXMvTWluaW11bSUyMHZpYWJsZSUyMHByb2R1Y3Q="><img src="https://api.mobbr.com/button/eb342f159522ccde16500ce9abc34391/medium"/></a>

##Basic wordpress setup

We are going to setup a multi-site wordpress installation in which each user automatically gets his own blog on his own subdomain. The posts and discussion across all blogs are aggregated onto main pages. The blogs can be multi-author. Members are shared across al subsites.

## Installation

This plugin is based on the <a href="https://tommcfarlin.com/wordpress-plugin-boilerplate/">Tom McFarlin boilerplate</a>. The Boilerplate can be installed in one of two ways both of which are documented below. Note that because of its directory structure, the Boilerplate cannot be installed “as-is.”

Instead, the options are:

### Copying a Directory

1. Copy the `trunk` directory into your `wp-content/plugins` directory. You may wish to rename this to something else.
2. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The WordPress Plugin Boilerplate.”
3. Click on *Activate.*

### Creating a Symbolic Link

#### On Linux or OS X

1. Copy the `WordPress-Plugin-Boilerplate` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `ln -s plugin-name/trunk /path/to/wordpress/wp-content/plugins/plugin-name`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The WordPress Plugin Boilerplate.”
4. Click on *Activate.*

#### On Windows

1. Copy the `WordPress-Plugin-Boilerplate` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `mklink /J path\to\wp-content\plugins \path\to\WordPress-Plugin-Boilerplate\trunk\plugin-name`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The WordPress Plugin Boilerplate.”
4. Click on *Activate.*

Note that this will activate the source code of the Boilerplate, but because the Boilerplate has no real functionality so no menu  items, meta boxes, or custom post types will be added.

Examples are slated to be added to the [Boilerplate’s website](http://wppb.io) as the site continues to grow.

## Recommended Tools

### i18n Tools

The WordPress Plugin Boilerplate uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

## License

The zaplog plugin is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

The WordPress Plugin Boilerplate is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

* `zaplog/includes` is where functionality shared between the dashboard and the public-facing parts of the side reside
* `zaplog/admin` is for all dashboard-specific functionality
* `zaplog/public` is for all public-facing functionality

### Assets

The `assets` directory contains three files.

1. `banner-772x250.png` is used to represent the plugin’s header image.
2. `icon-256x256.png` is a used to represent the plugin’s icon image (which is new as of WordPress 4.0).
3. `screenshot-1.png` is used to represent a single screenshot of the plugin that corresponds to the “Screenshots” heading in your plugin `README.txt`.

The WordPress Plugin Repository directory structure contains three directories:

1. `assets`
2. `branches`
3. `trunk`

The Boilerplate offers support for `assets` and `trunk` as `branches` is something that isn’t often used and, when it is, is done so under advanced circumstances.

When committing code to the WordPress Plugin Repository, all of the banner, icon, and screenshot should be placed in the `assets` directory of the Repository, and the core code should be placed in the `trunk` directory.

# Credits

The WordPress Plugin Boilerplate was started in 2011 by [Tom McFarlin](http://twitter.com/tommcfarlin/) and has since included a number of great contributions.

The current version of the Boilerplate was developed in conjunction with [Josh Eaton](https://twitter.com/jjeaton), [Ulrich Pogson](https://twitter.com/grapplerulrich), and [Brad Vincent](https://twitter.com/themergency).

The homepage is based on a design as provided by [HTML5Up](http://html5up.net), the Boilerplate logo was designed by  Rob McCaskill of [BungaWeb](http://bungaweb.com), and the site `favicon` was created by [Mickey Kay](https://twitter.com/McGuive7).
