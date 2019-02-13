=== Steply ===
Contributors: vivex
Donate link: http://vivex.me/
Tags: steps, howoto, tutorial
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds wikihow style step by step UI, good for tutorial websites.

== Description ==

This is a shortcode plugin, with help of that you can create step sections in your post/page.
This helps if you are writing any tutorial and want to separate content each step.
We will be adding few more features soon

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/steply` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Setply Settings Option to change color of steps heading background
1. Use following short code:

```
[steply_wrapper]
            [steply_step step-number='1' title='Step Title']
                  Step Content
            [/steply_step]
[/steply_wrapper]
```

== Frequently Asked Questions ==

= Any live demo =

Please check this post: http://w3.cafe/blogs/tutorials/tutorial-hosting-your-js-html-project-on-firebase

== Screenshots ==

1. Example.
2. Admin settings

== Changelog ==

= 1.0 =
* Initial release

=== Test Plugin ===
Contributors: user, user, user
Tags: tag, tag, tag
Donate link: http://example.com/
Requires at least: 4.0
Tested up to: 4.8
Requires PHP: 5.6
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Short description of this great plugin. No more than 150 characters, no markup.

== Description ==
Long description of this great plugin. No characters limit, and you can use markdown.

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
markdown parsed.

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].

Titles are optional, naturally.

Asterisks for *emphasis*.

Double it up  for **strong**.

== Installation ==
1. Upload "test-plugin.php" to the "/wp-content/plugins/" directory.
1. Activate the plugin through the "Plugins" menu in WordPress.
1. Place "do_action( 'plugin_name_hook' );" in your templates.

== Frequently Asked Questions ==
= A question that someone might have =
An answer to that question.

= What about foo bar? =
Answer to foo bar dilemma.

== Screenshots ==
1. The screenshot description corresponds to screenshot-1.(png|jpg|jpeg|gif).
2. The screenshot description corresponds to screenshot-2.(png|jpg|jpeg|gif).
3. The screenshot description corresponds to screenshot-3.(png|jpg|jpeg|gif).

== Changelog ==
= 0.2 =
* A change since the previous version.
* Another change.

= 0.1 =
* Initial release.

== Upgrade Notice ==
= 0.1 =
Initial release
