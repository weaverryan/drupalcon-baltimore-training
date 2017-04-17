# DrupalCon Training!  D8 & Symfony: Dive Into the Core Concepts that Make Each Fly 

Hi guys! This repository contains an empty Drupal 8.3 site that you'll
need to install before coming to the training.

The goal is to make the training feels as "normal" as possible. So,
if you normally use a VM, then install this on a VM. If you normally
do local development, install this locally on your machine.

If you have **any** problems or questions at all, just message
me (Ryan) at ``hello@knpuniversity.com`` :).

## 1) Pre-requisites

Before you start, you'll need to make sure your system has a few
things setup:

* Access to the command line. If you're in Windows, "command" is
    ok, but something like cygwin or Git Bash is even better.

* Git - you'll need this to clone this repository

* MySQL (or MariaDB or SQLite - whatever your favorite database server is)

* PHP version 5.6 or higher

## 2) Clone this repository

Clone this repository down onto your machine (you can use any directory).

From the command line, this is:

```bash
git clone https://github.com/weaverryan/drupalcon-baltimore-training.git
```

### 3) Point your Web Server at the site

You can use any web server for the training, but I highly recommend
the built-in PHP web server because it requires zero setup. From
the command line, move into your new directory and run:

```
php -S localhost:8000
```

That's it! You should be able to go to ``http://localhost:8000``
to pull up your site! When you're finished, press `Ctrl+C` to
terminate the built-in web server. We'll start it again when
you get to the training.

**NOTE** If you're using a virtual machine, no problem! Update the
command to be `php -S 0.0.0.0:8000` and then use your VM's IP address
in your browser to access it.

## 4) Install the Drupal Site

Finally, make sure you've gone through the Drupal site install
process. You can do this however you want, for example:

A) You can go to `http://localhost:8000` and install via the web interface

B) Use Drush (which is pre-installed inside this project). For example:

```
php vendor/bin/drush site-install --db-url=mysql://root@localhost/d8_baltimore
```

(update the connection details based on your system!)

C) Or you can use Drupal console

```
php vendor/bin/drupal site:install
```

That's it! Make sure you can access and see your site! You're
now all ready for the training! Come ready to do some coding :).

Cheers!
