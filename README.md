- menuler eklenecek
- example export edilecek

# Arka Kapi Magazine Wordpress Theme

This theme developed for arkakapidergi.com and arkakapimag.com by [@om3rcitak](https://github.com/om3rcitak)

## Installation

1- Install clear wordpress.

2- Pages
- Create a page whose name is "Home".
- Create a page whose name is "Blog".
- Go to "Settings > Reading" and set "Homepage" and "Posts page" options.
   
3- Clone Theme
```sh
$ cd wp-content/themes
$ git clone https://github.com/arkakapi/wp-theme/ arkakapi
```

4- Enable Theme
- Go to "Appearence > Themes" page
- Click "Activate" button on the "Arka Kapi Magazine" theme

5- Enable Required Plugins
- Login wp-admin
- Go to "Plugins" page
- Click "Add New" button
- Search "wonderm00ns-simple-facebook-open-graph-tags" and activate plugin.
- Search "contact-form-7" and activate plugin.
- Search "advanced-custom-fields" and activate plugin.
- Go to "Custom Fields > Tools" page and import [custom-fields.json](custom-fields.json) file.

6- Contact Form
- Create new "Contact Form 7" form.
- Paste form ID to "All Pages > Home > Contact > Contact Form 7 Form ID" and save


## Required Plugins

- https://wordpress.org/plugins/wonderm00ns-simple-facebook-open-graph-tags/
- https://wordpress.org/plugins/advanced-custom-fields/
- https://wordpress.org/plugins/contact-form-7/


License
----
MIT