#Zaplog Collaborative Journalism

Crowdfunding and rewarding can be followed by clicking the button:

<a href="https://mobbr.com/#/task/aHR0cHM6Ly9naXRodWIuY29tL3BhdHJpY2tzYXZhbGxlL3phcGxvZy13b3JkcHJlc3MtcGx1Z2luL21pbGVzdG9uZXMvTWluaW11bSUyMHZpYWJsZSUyMHByb2R1Y3Q="><img src="https://api.mobbr.com/button/eb342f159522ccde16500ce9abc34391/medium"/></a>

The bitcoin address for funding this project is <b>1ASgxwsQAaJm2aP3rprAq8CuUVcJGWqkah</b>

Goto http://bitonic.nl to pay EURO directly into this bitcoin address (iDeal, mrCash).

##Overview

The zaplog plugin delivers functionality based on the succesful <a href="http://zaplog.nl">zaplog social news site</a>. The site was built in 2007. Its expressionengine 1.6 technology and design are outdated and need to be ported, upgraded to wordpress 4.1

Any members can contribute by posting, editing, tagging, voting, linking and commenting articles. 

Articles are selected for frontpage display by an algorithm that adaptively weighs votes, comments, commenters, views, referers etc. 

All contributors automatically share in the earnings (payback from ad income, donations), proportionally to their contributions. This is done using the HTTPS://MOBBR.COM payment system. 

## Installation

This plugin is based on the <a href="https://tommcfarlin.com/wordpress-plugin-boilerplate/">Tom McFarlin boilerplate</a>. 

#### On Linux or OS X

1. Copy the `zaplog-wordpress-plugin` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `ln -s zaplog-wordpress-plugin/trunk /path/to/wordpress/wp-content/plugins/zaplog-wordpress-plugin`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The Zaplog Collective Journalism plugin”
4. Click on *Activate.*

#### On Windows

1. Copy the `zaplog-wordpress-plugin` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `mklink /J path\to\wp-content\plugins \path\to\plugin\trunk\zaplog-wordpress-plugin`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The Zaplog Collective Journalism plugin”
4. Click on *Activate.*

##Development

###Milestones
- The first milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Minimum%20viable%20product">Minimum Viable Product</a>. 
- The second milestone will be the collaborative event timeline or newsstream
- The third milestone will be the collaborative RSS/content aggregator.

###Contributing and rewarding
Everyone is invited to contribute. Everybody will be rewarded.

This GITHUB will be funded using Mobbr. As soon as the milestones and issues are closed, are pledges are divided among all contributors based on their participation.

Where possible we will use and integrate existing open-source plugins, if this is done using GITHUB repos, the original contributors will share in the rewards. 

###Recommended Tools

The plugin uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

* `zaplog-wordpress-plugin/includes` is where functionality shared between the dashboard and the public-facing parts of the side reside
* `zaplog-wordpress-plugin/admin` is for all dashboard-specific functionality
* `zaplog-wordpress-plugin/public` is for all public-facing functionality

### Assets

The `assets` directory contains three files.

1. `banner-772x250.png` is used to represent the plugin’s header image.
2. `icon-256x256.png` is a used to represent the plugin’s icon image (which is new as of WordPress 4.0).
3. `screenshot-1.png` is used to represent a single screenshot of the plugin that corresponds to the “Screenshots” heading in your plugin `README.txt`.

The directory structure contains three directories:

1. `assets`
2. `branches`
3. `trunk`

The plugin offers support for `assets` and `trunk` as `branches` is something that isn’t often used and, when it is, is done so under advanced circumstances.

When committing code to the repository, all of the banner, icon, and screenshot should be placed in the `assets` directory of the repository, and the core code should be placed in the `trunk` directory.

### License

The plugin is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

### Licensing

The Zaplog plugin is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

## Credits

Based on the WordPress Plugin Boilerplate https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate.