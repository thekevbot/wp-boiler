#Easy Wordpress Boilerplate

This boilerplate is designed to set up a local Wordpress dev environment really quickly. It includes plugins like Gulp and BrowserSync, and makes it really easy for multiple team members to work on the same website project.

###Setup is easy:

1. Fork this repo and rename it to whatever you want
2. Clone this new repo to your local machine
3. Create a new MySQL database on your local machine (I use MAMP)
4. In your terminal `cd` to `<your-repo-name>/wp-content/themes/boiler-theme`
5. Install all the dependencies by running `npm install` in your terminal
6. Run `gulp` (This will spin up the browsersync server and start watching for changes) - whatever you have set to be your MAMP server's document root to be will open in your default browser.
7. If necessary, navigate your browser to the cloned subdirectory (i.e. `http://localhost:3000/my-cool-site`)
8. Complete the Wordpress installation by providing the database credentials you created in step 3.
9. Log in to the Wordpress admin area
10. Navigate to `Appearance > Themes` and activate the `Boiler` theme.
11. Navigate to the `Plugins` tab and activate all plugins.
