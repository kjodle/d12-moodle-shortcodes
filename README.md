# d12-moodle-shortcodes
A filter that adds WordPress-like shortcodes to Moodle

## What this filter does
This filter allows you to use a shortcode, such as `[wi]` to dynamically add content to Moodle blocks and activities.

## How to install this filter
1. Upload the entire directory to the `moodle/filter` directory.
1. Make sure the plugin directory and enclosed files have the same permissions as other filters. (Use their permission scheme as a reference.)
1. Go to Site Administration >> Notifications and upgrade your database.
1. Go to Site Administration >> Plugins >> Filters >> Manage Filters and activate the plugin.

## How to use this filter
This filter is preset to use `[wi]` to add `<div class="wi">`, and `[/wi]` to add `</div>`.

You will need to go to the custom CSS area of your theme and define a style for `.wi` css class.

## How to adapt this filter
This filter uses the php function `str_replace` to replace the shortcode with your desired text. The basic formula is

    str_replace (
        'text to replace',
        'text to replace it with',
        $string_to_replace_text_in
        )

Both `text to replace` and `text to replace it with` will accept arrays, so you can define a lot of shortcodes in a single function. I have not yet tested performance when adding many shortcodes.
