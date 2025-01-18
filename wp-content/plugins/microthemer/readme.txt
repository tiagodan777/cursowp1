﻿=== Microthemer Lite - Visual Editor to Customize CSS ===

Contributors: bastywebb, joseluiscruz, ahrale
Donate link: http://themeover.com/microthemer/
Tags: css, customize, visual editor, google fonts, responsive
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A visual editor to customize the CSS styling of anything on your site - from Google fonts to responsive layouts.

== Description ==

A light-weight yet powerful visual editor to customize the CSS styling of any aspect of your site, from Google fonts to responsive layouts. Microthemer caters for both coders and non-coders, and plays really well with page builders like Elementor, Beaver Builder, and Oxygen.


= Feature list =

1. Style anything
1. Use with any theme or plugin
1. Point & click visual styling
1. Code editor (CSS, Sass, JS)
1. Sync code editor with the UI
1. Customisable breakpoints
1. HTML and CSS inspection
1. 150+ CSS properties
1. Dark or light theme
1. Custom toolbar layouts
1. Work with any CSS unit
1. Color picker with palettes
1. Slider, mousewheel, keyboard adjustments
1. In-program CSS reference
1. History
1. Draft mode
1. Global or page-specific styling
1. Import & export
1. Light-weight
1. Minify CSS code
1. Keyboard shortcuts
1. Deep integration with Elementor, Beaver Builder, Oxygen
1. Multisite support
1. Uninstall MT, but keep your edits
1. **[Pro]** CSS grid (drag & drop)
1. **[Pro]** Flexbox
1. **[Pro]** Stock SVG mask images
1. **[Pro]** Transform
1. **[Pro]** Animation
1. **[Pro]** Transition


= Lite VS Pro =
This lite version limits you styling 15 things, and doesn't include the features marked [Pro] in the list above. To unlock the full program, you can <a href="https://themeover.com/">purchase a license</a> (monthly, annual, or lifetime).

= Useful links =

- <a href="https://themeover.com/">Website</a>
- <a href="https://themeover.com/introducing-microthemer-7/">Video docs</a>
- <a href="https://livedemo.themeover.com/setting-up-demo-site/?create_demo">Live demo</a>
- <a href="https://themeover.com/forum/">Support forum</a>
- <a href="https://www.facebook.com/groups/microthemer">Facebook group</a>

= Author note  =

Hello everyone, my name is Sebastian. I've designed Microthemer for developers as well as beginners. My aim is to level up beginners by exposing the CSS code Microthemer generates when using the visual controls. This is of course helpful for developers who may wish to make manual edits. Some developers use Microthemer as an in-browser CSS or Sass editor, and just lean on the interface for element selection or more advanced properties like filters, grid, and animation.

I've been happily developing Microthemer and supporting users of varying technical experience in my forum for many years now. I'm always ready to answer questions about the software and help out with CSS hurdles. Please don't hesitate to get in touch!


== Installation ==

1. Click the 'Plugins' menu option in WordPress.
2. Search for 'Microthemer'.
3. Install and activate the plugin.
4. Go to the 'Microthemer' menu option.
5. Start customizing the appearance of your site.

== Changelog ==

= 7.3.2.7 (Jan 17th, 2024) =

# Bugs fixed
* The previous update caused an error with "or" conditions in the folder logic, causing folders to not load.

= 7.3.2.6 (Jan 14th, 2024) =

# Bugs fixed
* Logical folder conditions could return the wrong result if the word "and" was in the page title text used for human reference.
* Fixed an issue with a legacy JSON decoder which could cause issues saving settings.
* Microthemer could create multiple folders for the same page if the page title changed.
* Selecting a different folder from the top toolbar during targeting was overwritten if the "Auto folder" checkbox was enabled.

= 7.3.2.6 (Jan 13th, 2024) =

# Bugs fixed
* Logical folder conditions could return the wrong result if the word "and" was in the page title text used for human reference.
* Fixed an issue with a legacy JSON decoder which could cause issues saving settings.

= 7.3.2.5 (Jan 9th, 2024) =

# Bugs fixed
* When point and click editing of the admin interface was enabled, a JS error could be triggered when saving a Post or Page.
* An error loading Microthemer folders could occur if making a typo and setting a number as a CSS property e.g. 3: red;

= 7.3.2.4 (Dec 9th, 2024) =

# Bugs fixed
* The order CSS styles are loaded on the page could be different when editing with Microthemer compared to the regular frontend. This meant selectors could have an effect in Microthemer but not the frontend.

# Enhancement
* Microthemer displays a "Drag here" box on empty folders to help drag selectors between folders.
* The font-size for the code editor can be customised via the preferences.

= 7.3.2.3 (Nov 25th, 2024) =

# Bugs fixed
* The preference option "Support admin area point and click editing" did not work on block editor admin pages.
* Fixed an issue with folders names having a _2 suffix even when the name didn't clash with an existing folder.
* A text translations warning could flash up briefly when loading the Microthemer interface.
* More Gutenberg integration fixes for WordPress 6.7.

= 7.3.2.2 (Nov 19th, 2024) =

# Bugs fixed
* Rolled back some previous code that was changed in the last update, as it caused styles to not load under certain circumstances.
* Gutenberg integration issues with WordPress 6.7. There may be more fixes to follow here.

= 7.3.2.0 (Nov 19th, 2024) =

# Bugs fixed
* Rolled back some previous code that was changed in the last update, as it caused styles to not load under certain circumstances.

= 7.3.1.9 (Nov 18th, 2024) =

# Bugs fixed
* The page navigation menu could occasionally do nothing when selecting a new page to visit.
* Compatibility issue with the legacy site Customizer whereby Customizer options were overly spaced apart.
* Fixed issue with MT targeting turning off when switching to Gutenberg block editor (even when "Support admin area style loading" is enabled).
* Element selection was still happening in the block editor even with "Support admin area style loading" disabled.
* Styles for the homepage did not always render in the Full Site Editor, if the home page was being displayed as a fallback screen.

= 7.3.1.8 (Oct 15th, 2024) =

# Bugs fixed
* Compatibility issue with swiper.js in Woo Essential plugin that made the mousewheel scroll very slow.

= 7.3.1.7 (Sept 9th, 2024) =

# Bugs fixed
* Compatibility issue with WowStore plugin, which changes the classes on all blocks when saving. Microthemer now ignores these "temporary" classes when generating CSS selectors.

= 7.3.1.6 (July 30th, 2024) =

# Bugs fixed
* SVG path elements with children could throw off Microthemer's HTML inspection pane DOM indexing, making it difficult to select elements via the HTML pane.
* Possible PHP error: "Uncaught TypeError: fwrite(): Argument #1 ($stream) must be of type resource, bool given" in Common.php:382.

= 7.3.1.5 (July 24th, 2024) =

# Enhancement
* Microthemer adds an empty selector ".wp-block {}" at the top of a stylesheet to ensure that Microthemer files can be loaded in the Gutenberg editor iframe. It's a quirk of the block editor that certain selectors must be present for them to be allowable. However, this extra style rule is not necessary for users not making use of the recent Gutenberg integration, and so will not be added if you turn off the "Support admin area style loading" preference via Settings > General > Preferences > WORDPRESS ADMIN.

= 7.3.1.4 (July 17th, 2024) =

# Bugs fixed
* Issues with the Gutenberg integration and the latest version of WordPress (6.6).

= 7.3.1.3 (July 16th, 2024) =

# Enhancement
* Auto-save is now configurable via Settings > General > Auto-save. It is still enabled by default.

# Bugs fixed
* CSS grid highlighting could be incorrect when using subgrid with multiple levels of nesting if different gap values were defined on subgrids.

= 7.3.1.2 (June 18th, 2024) =

# Enhancement
* "Create new" Post/Page option has been added to the "Search site" menu.

# Bugs fixed
* The Google Fonts browser, Manage design packs, and in-program CSS reference didn't work in Firefox.
* When customizing a Brizy preview page with Microthemer, which uses a special URL that is only valid for a short time, this could generate a "403 forbidden" warning when returning to Microthemer at a later date. To fix this, Microthemer no longer tries to load the last viewed page if it has a "preview_nonce" URL parameter.
* Issues with "Auto-folder" assignment when styling a new Gutenberg Post/Page before it has been saved or published.

= 7.3.1.1 (June 18th, 2024) =

# Change
* Global CSS does not load on block editor pages if the blocks are not embedded inside an iframe. Otherwise, the CSS can bleed into the top level WordPress toolbars and panels. Global CSS will still load in the Full Site Editor (FSE) however, which always uses an iframe.

# Bugs fixed
* Microthemer's global stylesheet could render in the footer if a value for "Stylesheet loading order" was set in the Preferences.
* Another issue "Stylesheet loading order" being set was that conditional folders always loaded when using the MT interface (when they should have been disabled on certain pages). This is because JavaScript variables were being set before the CSS asset loading had been determined.
* Microthemer could generate invalid folder logic when styling certain pages inside the Full Site Editor. This resulted in the style appearing for a split second and then disappearing.

= 7.3.1.0 (June 17th, 2024) =

# Bugs fixed
* Global CSS was loading on Edit Post / Page admin screens even if the "Support admin area style loading" preference was set to "No".

= 7.3.0.9 (June 17th, 2024) =

# Bugs fixed
* Possible PHP error: "mt_rand() expects parameter 2 to be integer, float given".
* In some places, the preferences text was too long to display neatly on laptop size screens.

# Enhancement
* Grid gaps are highlighted more explicitly, when CSS grid highlighting is enabled.

= 7.3.0.8 (June 11th, 2024) =

# Bugs fixed
* Possible PHP notice: "Undefined" in Logic.php on line 366.

= 7.3.0.7 (June 9th, 2024) =

# Bugs fixed
* On rare occasions, random data storage keys for responsive styles could be converted to "Infinity", which made it impossible to add responsive styling.

= 7.3.0.6 (June 8th, 2024) =

# Bugs fixed
* The subgrid setting for grid-template-columns/rows could be lost in the previous update.
* Grid items were not properly constrained by ancestor grid tracks when using subgrid.
* Switching selectors to one that has the single grid item view could display the wrong grid fields.
* Providing row/column line names reduced the maximum number of tracks to less than 24 in the grid controls.
* Padding was not properly adjusted for when highlighting grid items.

# Enhancement
* A purple dashed line shows implicit grid lines and "subgrid" (if relevant) in the grid control area.

= 7.3.0.5 beta (May 22nd, 2024) =

# Change
* Gutenberg block editor classes are whitelisted now, rather than admin only classes being blacklisted. This should greatly reduce the chance of styling working in the editor but not on the frontend.

# Enhancement
* CSS grid subgrid property value added to grid-template-columns and grid-template-rows.
* Gutenberg integration extended to KadenceBlocks.

# Bugs Fixed
* Miscellaneous issues with Gutenberg integration when the blocks were not loaded in an iframe.
* Unique classes were not added to all Gutenberg blocks e.g. blockquotes.
* Microthemer element overlay highlighting did not scroll with the page under certain circumstances.
* Option to view the block editor outside of Microthemer added to Exit options.

= 7.3.0.4 beta (May 13th, 2024) =

# Enhancement
* Microthemer's responsive controls now sync with Generate Blocks' responsive controls.

= 7.3.0.3 beta (May 8th, 2024) =

# Bugs Fixed
* The Gutenberg integration did work if the block editor was embedded directly into the page, rather than as an iframe. Direct embedding is a legacy method that is implemented when blocks using the old API are present: https://make.wordpress.org/core/2023/07/18/miscellaneous-editor-changes-in-wordpress-6-3/.

= 7.3.0.2 beta (May 3rd, 2024) =

# Enhancement
* The element breadcrumbs reflect the class or id used in the current selector.

# Bugs Fixed
* Possible internal server error when importing CSS from a stylesheet into Microthemer.

= 7.3.0.1 beta (April 23rd, 2024) =

# Bugs Fixed
* Microthemer did not live update CSS style loading when the page template was changed in the editor.
* When first clicking on the page content in the Site Editor, the body element was selected in the process.
* Unique classes added to blocks unable to accept them.
* Editor only classes could be suggested when selecting blocks.

= 7.3.0.0 beta (March 25th, 2024) =

# Change
* Sync browser tabs is enabled by default on new Microthemer installations.
* Admin asset loading is enabled by default on new Microthemer installations.
* Global styles also load in the block editor (if admin asset loading is enabled).
* When Microthemer creates new page specific folders, they also load in the block editor (if admin asset loading is enabled).

# Enhancement
* Deep integration with Gutenberg and the Full Site Editor (FSE). Add content with Gutenberg and style it with Microthemer at the same time, from a single browser tab.
* Consistent styling between the block editor and the site frontend.
* Apply responsive styling to Gutenberg blocks. Microthemer tabs sync with the mobile and tablet preview options in the block editor.
* When selecting block editor elements with Microthemer, the custom class input field is automatically scrolled into view. This makes it easier to add custom or utility classes provided by frameworks like Tailwind, CoreFramework, or ACSS.
* When loading the Gutenberg editor inside Microthemer, unique classes in the format "mctr-e5i34p" will be added to elements you select (and ancestor elements) to help target blocks precisely and in a way that is consistent between the frontend and block editor. To ensure the HTML markup stays clean, these classes are automatically removed if you do not target them with Microthemer. But if you do reference these classes, Microthemer will auto-save the Gutenberg content to ensure they don't get lost if you forget to save manually.
* There is a related option in MT's preferences to add unique classes to ALL Gutenberg blocks - even when editing outside Microthemer. It's disabled by default, but you may wish to enable this if you use Microthemer's full code editor with targeting disabled. Or, you prefer styling rendered Gutenberg blocks on the frontend but want to take advantage of block-specific CSS classes (akin to what page builders output).
* When styling block theme templates, template parts, patterns, or navigation using the Full Site Editor MT will generate folder logic to ensure that the styles display wherever the content displays. For example, to ensure that MT's CSS styling for a reusable pricing table pattern is loaded whenever that block is added to a post or page, it will generate folder logic that looks something like this: \Microthemer\has_template("wp_pattern", 4654, "Pattern - Pricing"). This will even work if the pricing table is part of another pattern that is added to the page.
* To ensure Microthemer can check for template/part/pattern/navigation usage reliably and quickly, it maintains a small cache file that can be efficiently checked on the frontend without having to parse blocks on the fly. This means Microthemer can keep CSS asset loading to an absolute minimum without incurring expensive overheads.
* The "\Microthemer\user_has_role()" logic function for folder loading now accepts a user id as the first parameter, as an alternative to specifying a role name.

# Bugs Fixed
* "editor.session is not defined" JavaScript error that could sometimes display when first loading Microthemer.
* CSS styling conflict with WP To Buffer Pro plugin where Microthemer select menus had a light background even if in dark theme mode.
* CSS grid gap properties were not output using shorthand even if both row and column values were provided.

# For full changelogs visit: https://themeover.com/microthemer-changelog-7-x/