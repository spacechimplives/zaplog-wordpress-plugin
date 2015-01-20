#Overview

The zaplog plugin delivers functionality based on the succesful zaplog social news site. The site was built in 2007. It's expressionengine 1.6 technology and design are outdated and needs to be ported, upgraded to wordpress 4.1

Any member can post or link dump articles which are eligable for frontpage display based on an algorithm that adaptively weights votes, comments, commenters, views, etc.

Members can earn participation points based on wich rewards (payback from ad income, donations) are distributed. This is done using the MOBBR.COM payment system.

##Basic wordpress layout

We are going to setup a multi-site wordpress installation in which each user automatically gets his own blog on his own subdomain. The posts across all blogs are aggregated into the main site, intro's only, where voting and commenting etc. takes place. The blogs can be multi-author. No commenting or voting can be done on these individual blogs.
