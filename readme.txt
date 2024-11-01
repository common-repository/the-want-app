=== The Want App ===
Contributors: TheWantApp
Tags: wishlist, facebook, wish, list, social, sales, want, button, conversion, widget, plugin
Requires at least: 2.5
Tested up to: 3.3.2
Stable tag: 1.1.1

Create a 'Want' button that drives traffic and sales by automagically linking to a social wishlist on the Facebook Timeline.

== Description ==

Create a 'Want' button that drives traffic and sales by automagically linking to a social wishlist on the Facebook Timeline.

You already know that when a customer doesn’t buy something now, there’s a good chance they’ll never come back. By installing the button on your site, you help your customer to remember the item they were looking at, their Facebook friends see the item they wanted and we drive them all back to your site. Can’t say fairer than that!

By inserting just one line of code into a page, post, or template you can integrate The Want App on your site to allow your visitors to automagically add items to their Want list on Facebook.

For more information visit https://thewantapp.com/

== Installation ==

Setting up The Want App on your site is super simple.

1. Upload the `thewantapp.php` file to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Wherever you want the button to appear, place the following shortcode structure into the post or page content, or into your template code: **[thewantapp url="`<item url>`" image="`<image url>`" title="`<item title>`"]**
4. Add an optional theme parameter (**theme="`<theme>`"**) to change the look of the button.
4. Replace the `<...>` parts with your specific data, following these guidelines:


+ The **`url`** parameter refers to the full, public internet location (starting with http://) for the **page** of whatever the user will 'Want.' It can be the same page or an external page.

+ The **`image`** parameter refers to the full, public internet location (starting with http://) for the **image** of whatever the user will 'Want.' Recommended minimum dimensions for the image are 100x100.

+ The **`title`** parameter refers to the **name** of whatever the user will 'Want.'

+ The **`theme`** parameter changes how the button looks. This field can be left out and default to 'light'. Possible values are light, dark, light-box, and dark-box. Dimensions of the light and dark themes are 90x20, while light-box and dark-box are 51x62.


Note: you do **not** need to url-encode any of the parameters. The plugin handles that for you.

== Frequently Asked Questions ==

= Do I need to register a new account somewhere to integrate this button? =

No! Just insert the shortcode with the proper values and you're done!

= What about my visitors? Will they need to register somewhere? =

If they have a Facebook account (and it's more than likely that they will) then all that they will need to do is authorise the app the first time the click on the button. That's all!

= Do I absolutely need an image url in the shortcode parameters? =

Yes, for now the image url is required. This is the image that the visitor will see in The Want App's overlay.

== Screenshots ==

1. The Want button can be used in a variety of sites and for a whole range of products, services, and events!
2. In-Timeline snapshot of a user's Want list, right in the profile for all friends to see and click through!

== Changelog ==

= 1.1.1 =
* Changed API location to a separate subdomain.

= 1.1 =
* Added button themes. Possible values for the theme parameter in the shortcode are light, dark, light-box, and dark-box. See the Installation section for more information.

= 1.0 =
* Plugin Released

== Upgrade Notice ==

= 1.1.1 =
* API location (URL that the button calls to load itself) has changed. The old location is deprecated and will be removed early Summer 2012. Please upgrade to plugin version 1.1.1 to ensure the button continues showing and working properly on your site.

= 1.1 =
* Version 1.1 introduces new button themes. Upgrade to be able to change the look of the button, including box (vertical) layouts.

= 1.0 =
* Plugin Released

== Suggestions or Issues? ==

If you have ideas for how the plugin can be improved or are having issues with integrating it on your site, let us know directly on the plugin page on wordpress.org or my emailing us at contact@thewantapp.com