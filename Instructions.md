# Instructions

This is a simple WordPress Child Theme. All the files you need to see and change are inside this theme.

Set up your local environment and then start the exercise, from the basics.

## Setting up

First of all, you need a fresh new WordPress install. 

Install WordPress and make sure it is working well.

Once you have a local WordPress installation:

* Copy this folder to the wp-content/themes folder of your WP install
* visit you WP Dashboard (e.g. localhost/wordpress/wp-admin)
* Log in
* Visit Appearance > Themes
* Activate the WP Assessent Test Theme

Open a text editor and edit the `wp-config.php` file, located at the root directory of your WordPress install, and add this line:

```
define('WP_DEBUG', true);
```

Now visit you WordPress home page. (e.g. localhost/wordpress)

You should see some errors on your screen.

Lets begin!


## The test

### The basics

a) First, fix the site.

b) After you fix the home page, click the "Hello World" post and fix it too

c) In the "Extra metadata" section, there is something you can and should optimize in the code. Look for useless functions, iterations or anything that could be done in a better way to improve performance


### The challanges


#### 1. Simple javascript

Using jQuery, CSS and some HTML, hide the "Extra Metadata" contents (only the metadatas, not the section title) 
and make it visible by clicking in the section title. 

Click should have a toggle behavior (click once, displays content, click again, hide content, and so on).


#### 2. WordPress Custom field

Create a new WordPress custom field (post meta) for the post and display it along with the other metadata under the "Extra metadata" section.

The field can have any name and its value is a simple string.


#### 3. Create a Class

Inside functions.php, create a small class to handle the "Extra metadata" section. It should receive the post ID and do everything necessary to output the same content. Remove any business logic from the template file and put it inside this class.
