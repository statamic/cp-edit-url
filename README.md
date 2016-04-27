CP Edit URL ![Statamic 1.7+](https://img.shields.io/badge/statamic-1.7+-lightgrey.svg?style=flat-square)
===========

Generate link to go to the edit page in the control panel of currently viewed page.

Unzip the folder, rename it to `control_panel_edit_url` and drop it inside into your _add-ons folder. Now, on any of your pages, you should be able to use `{{ control_panel_edit_url }}` in a link and away you'll go.

Maybe something like this in the footer of your site:

```
{{ if logged_in }}
<a href="{{ control_panel_edit_url }}">Edit This Page</a>
{{ endif }}
```

**Requires v1.7**
