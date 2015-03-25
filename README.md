#Wordpress plugin for collaborative journalism

<a href="https://mobbr.com/#/task/aHR0cHM6Ly9naXRodWIuY29tL3BhdHJpY2tzYXZhbGxlL3phcGxvZy13b3JkcHJlc3MtcGx1Z2luL21pbGVzdG9uZXMvTWluaW11bSUyMHZpYWJsZSUyMHByb2R1Y3Q="><img src="https://api.mobbr.com/button/eb342f159522ccde16500ce9abc34391/medium"/></a>

The bitcoin address for funding this project is <b>1ASgxwsQAaJm2aP3rprAq8CuUVcJGWqkah</b>. To pay EUR into this bitcoin address, goto http://bitonic.nl  

Funding and rewarding can be followed by clicking the button. See the campaign page here (Dutch): http://patricksavalle.github.io/zaplog-wordpress-plugin/

##Overview

> The Zaplog plugin delivers functionality based on the succesful <a href="http://zaplog.nl">zaplog social news site</a>. The site was built in 2007. Its expressionengine 1.6 technology and design are outdated and need to be ported, upgraded to wordpress 4.1

> All members can contribute by posting, editing, tagging, voting, linking and commenting articles. 

> All contributors automatically share in the earnings (ad income, donations, sponsoring), proportionally to their contributions. This is done using the HTTPS://MOBBR.COM payment system. 

> Articles are selected for frontpage display by an algorithm that adaptively weighs votes, comments, commenters, views, referers etc.

> **Modern news reporting doesn't fit a standard blog format, Zaplog introduces the revolutionary news stream or event timeline for this.**

###Milestones

- The first milestone will be the MVP or <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Minimum%20viable%20product">minimum viable product</a>. 
- The second milestone will be the revolutionary <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/Content%20streams%20and%20version%20control">event timeline</a> or newsstream.
- The third milestone will be the <a href="https://github.com/patricksavalle/zaplog-wordpress-plugin/milestones/RSS%20aggregation">collaborative content aggregator</a>.

##Development and contributions

Everyone is invited to contribute. The crowdfunded amount will be divided among all contributors proportional to their contributions using HTTPS://MOBBR.COM (as soon as the milestones and issues are closed).

<b>By contributing you accept that rewards are divided by an algorithm that might or might not be completely 'fair'.</b>

Please announce your activities and progress in the comments of the issues.

###Re-use

Where possible use and integrate existing open-source code (check license!), if this is done using GITHUB repos, the original contributors will share in the rewards.

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

## Installation

### On Linux or OS X

1. Copy the `zaplog-wordpress-plugin` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `ln -s zaplog-wordpress-plugin/trunk /path/to/wordpress/wp-content/plugins/zaplog-wordpress-plugin`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The Zaplog Collective Journalism plugin”
4. Click on *Activate.*

### On Windows

1. Copy the `zaplog-wordpress-plugin` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `mklink /J path\to\wp-content\plugins \path\to\plugin\trunk\zaplog-wordpress-plugin`
3. In the WordPress dashboard, navigation to the *Plugins* page
Locate the menu item that reads “The Zaplog Collective Journalism plugin”
4. Click on *Activate.*

See https://tommcfarlin.com/wordpress-plugin-boilerplate/ for more options. 

## Credits

Based on the WordPress Plugin Boilerplate https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate.

#Basic functionality and concepts

We will build a ‘standalone’ Wordpress plugin for open-source journalism. It will be user-generated content based and rely on voting / algorithmic ratings for frontpage article selection. A lot of the necessary functionality can be obtained by combining existing Wordpress plugins, but as these differ in quality, level of maintenance etc. we choose to make our plugin the one-stop shop for crowdsourced journalism. Comparable to Buddypress, which is a social networking plugin.

It will be based on a Wordpress MU-installation allowing for sub sites on sub domains.

The plugin will maintain a rating/karma system (like the stackexchange sites) for users and content, based on participation, votes and usage.

The root-site will be a linkdump with an algorithmic frontpage. The frontpage shows a selection of the highest ranking, most recent linkdumps order by popularity (WPEDDIT-like). Its posts are linkdumps (summaries) of external articles. These can be posted by users by entering an URL (upon which the system will retrieve the summary) or by the plugin whenever an article is posted in a sub site. All new linkdumps will appear in chronological order on the ‘staging area’ where registered users can place votes. The staging area is constructed as an activity stream that shows all content-centric activity such as active posts (posts that received new revisions, additional content, votes, comment, etc.), new postings, etc.

Users can start their own sub sites and link them to their own domains.

To enable any user to publish articles without having to open his/her own blog a special sub site is created (e.g. community.zaplog.nl). This is a normal multi-author blog where every registered user can post.  

A special sub site (e.g. rss.zaplog.nl) will be constructed as a social RSS reader to which every user can add URl’s of ‘sites of interest’. The plugin will auto detect the RSS-feeds of such a site every time it loads the site’s new content. Articles of these feeds can be ‘pinned’ by users upon which they will be copied to the main site as a linkdump. Non-pinned articles are automatically removed after a few days. Only the RSS-feeds with the most pinned articles are retained, the others are automatically deactivated after a certain period. To avoid users being able to bookmark of share URL’s of these temporary articles, there will be only an overview page, showing ALL (current) articles in a feed.

Every post will be the start of a content/activity stream that contains comments, votes, links, embedded media, events, pictures etc. All of these items can receive votes. New posts can be placed in this stream too. These new posts can be either revisions of the original posts or new posts, made by any user. These posts can be merged into the original post by the original author or users with enough karma / points. This allows for simple collaboration and / or live blog functionality. All versions are visible in the content stream below the article, like any other content stream item. 

A post has a content-date (the date at which is was posted) and an event-date (the date of the event it relates to). 

A post will have multiple authors, depending on revision history.

A post will have a geolocation.

A post will have a category (e.g. opinion, background, news) and tags.

There will be multiple taxonomies (e.g. region, era, original author)
