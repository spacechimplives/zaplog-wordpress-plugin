#Zaplog Collaborative Journalism

Crowdfunding and rewarding can be followed by clicking the button:

<a href="https://mobbr.com/#/task/aHR0cHM6Ly9naXRodWIuY29tL3BhdHJpY2tzYXZhbGxlL3phcGxvZy13b3JkcHJlc3MtcGx1Z2luL21pbGVzdG9uZXMvTWluaW11bSUyMHZpYWJsZSUyMHByb2R1Y3Q="><img src="https://api.mobbr.com/button/eb342f159522ccde16500ce9abc34391/medium"/></a>

The bitcoin address for funding this project is <b>1ASgxwsQAaJm2aP3rprAq8CuUVcJGWqkah</b>

To pay EUR into this bitcoin address, goto http://bitonic.nl  

##Overview

> The zaplog plugin delivers functionality based on the succesful <a href="http://zaplog.nl">zaplog social news site</a>. The site was built in 2007. Its expressionengine 1.6 technology and design are outdated and need to be ported, upgraded to wordpress 4.1

> Members can contribute by posting, editing, tagging, voting, linking and commenting articles. 

> All contributors automatically share in the earnings (ad income, donations, sponsoring), proportionally to their contributions. This is done using the HTTPS://MOBBR.COM payment system. 

> Articles are selected for frontpage display by an algorithm that adaptively weighs votes, comments, commenters, views, referers etc.

## Installation

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

See https://tommcfarlin.com/wordpress-plugin-boilerplate/ for more options. 

##Development

Everyone is invited to contribute. The crowdfunded amount will be divided among all contributors proportional to their contributions using HTTPS://MOBBR.COM (as soon as the milestones and issues are closed).

Please announce your activities and progress in the comments of the issues.

###Milestones

- The first milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Minimum%20viable%20product">Minimum Viable Product</a>. 
- The second milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Event%20timelines">collaborative event timeline or newsstream</a>
- The third milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/RSS%20aggregator">collaborative RSS/content aggregator</a>.

###Re-use

Where possible use and integrate existing open-source code, if this is done using GITHUB repos, the original contributors will share in the rewards.

###Recommended Tools

The plugin uses a variable to store the text domain used when internationalizing strings. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which files may go:

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
2. `trunk`

When committing code to the repository, all of the banner, icon, and screenshot should be placed in the `assets` directory of the repository, and the core code should be placed in the `trunk` directory.

### License

The plugin is licensed under the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/blob/master/zaplog/trunk/LICENSE.txt">GPL v2 or later</a>.

## Credits

Based on the WordPress Plugin Boilerplate https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate.