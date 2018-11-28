# Arka Kapi Magazine Wordpress Theme

This theme developed for arkakapidergi.com and arkakapimag.com by [@om3rcitak](https://github.com/om3rcitak)

## Installation

1- Install clear wordpress.

2- Clone Theme
   ```sh
   $ cd wp-content/themes
   $ git clone https://github.com/arkakapi/wp-theme/ arkakapi
   $ cp arkakapi/languages/* ../languages/themes/
   ```
And if you wanna get all update please add "git-pull-job.sh" file to crontab.
 
```sh
* * * * * /bin/bash /path/to/arkakapi/git-pull-job.sh
```

3- Pages
   - Create a page whose name is "Home".
   - Create a page whose name is "Blog".
   - Go to "Settings > Reading" and set "Homepage" and "Posts page" options.

4- Enable Theme
- Go to "Appearence > Themes" page
- Click "Activate" button on the "Arka Kapi Magazine" theme

5- Enable Required Plugins
- Install and activate "Open Graph for Facebook, Google+ and Twitter Card Tags" plugin. [plugin link](https://wordpress.org/plugins/wonderm00ns-simple-facebook-open-graph-tags/)
- Install and activate "Contact Form 7" plugin. [plugin link](https://wordpress.org/plugins/contact-form-7/)
- Install and activate "ACF Pro" plugin. [plugin link](https://www.advancedcustomfields.com/pro/)
- Go to "Custom Fields > Tools" page and import [custom-fields.json](custom-fields.json) file.

6- Menus
- Create 2 different menus for Navigation and Footer Social Icons
- Go to "Appearance > Menus > Manage Locations" page and assign menus to locations.

7- Contact Form
- Create new "Contact Form 7" form.
- Paste form ID to "All Pages > Home > Contact > Contact Form 7 Form ID" and save

## Contributing
If want to contribute Arka Kapi Wordpress Theme you can create a new issue.

License
----
MIT
