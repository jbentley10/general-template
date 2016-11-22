# muscle-banksite
Muscle banksite template

This is a template for a muscle-enhancement product's banksite.

Please review this document to understand more about the template and it's
structure before updating the files yourself.

*Folder Structure*

1. .git

Contains items related to this Git repo.

2. CSS

Contains the CSS code for each page. The CSS is divided up as follows:

**SCSS**

Contains the .scss files that correspond to each page. **Edit these files when
coding CSS!** While you are editing CSS, use the command sass --watch
scss/[filename].scss:[filename].css to compile your CSS in real time.

3. img

Try to use as few images as possible. Use font-icons when you can. If you must
use an image, please compress it and use the SVG or PNG format.

4. js

Contains JS files related to the project. Main.js will be the usual file you will
be updating for this project.

5. lib

Contains the necessary .twig framework files.

6. public_html

Don't edit the files in this folder. Instead, edit the files in the...

7. views

Contains the .php files for the actual structure of each page. Edit these to edit
the HTML layout of a given screen. Also contains content files which can be loaded
into PHP pages.

*HTML Syntax*

When coding in HTML, please use the Bootstrap framework to adhere to mobile
responsiveness. Use ID's to declare the name of something, use classes to control
CSS, etc. Use alt tags in images so that screen readers can view an image.

*Use of Twig*

Use Twig statements when appropriate to facilitate the organization of information
that is unique to each product.

*Icons & Images*

As mentioned above, please use font-icons whenever possible. SVGs are best, but
PNGs are second best.
