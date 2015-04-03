# SHARE

### CSS modifications

To modify the CSS it is strongly suggested that you work with the SASS partials in this folder: wp-content/themes/share/scss  For more information about SASS partials, please see this article: http://thesassway.com/beginner/how-to-structure-a-sass-project

Working with SASS partials as opposed to editing the compiled CSS makes for a much more maintainable and organized code structure.

You will need the following software installed:

* Have the most recent version of SASS installed and running
* Have Compass and Susy installed: http://compass-style.org/ http://susy.oddbird.net/

In order to compile .scss to .css (OS X directions supplied, Windows will be similar but you won't use Terminal)

* In Terminal, navigate to the template folder – wp-content/themes/share/
* Type the following ```sass --watch scss:css```
* Saving anything in the scss folder will automatically compile a new main.css and main.css.map, both of which should be uploaded.