CP Edit URL
===========

Generate link to go to the edit page in the control panel of currently viewed page.

This is Fred's code that I have added.

Unzip the file, rename it to `control_panel_edit_url` and drop it inside into your _add-ons folder. Now, on any of your pages, you should be able to use ``{{ control_panel_edit_url }}`` in a link and away you'll go.

Maybe something like this in the footer of your site:

```
{{ if logged_in }}
<a href="{{ control_panel_edit_url }}">Edit This Page</a>
{{ endif }}
```

**One thing to note, this add-on requires v1.7 to work.**
