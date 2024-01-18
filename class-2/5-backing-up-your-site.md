# Backing Up Your Site

In a future lesson, we will look at ways to automatically perform backups, but it is important that you conduct manual backups as you work on your sites in this course.

## Backing Up Your Database

1. Log into phpMyAdmin on the CIS Student Server.
2. Click the database that you want to backup. For example, _studentX_cis338tutorial_, where _studentX_ is your student username.
3. Before we proceed with the backup process, let's take a look at the structure of a WordPress database. This this is a fresh installation of WordPress, there aren't too many tables. As you can see, the current version of WordPress has just 12 tables. In a future lesson, we'll learn about Plugins, which create their own tables. As a result, it's not safe to assume that a WordPress installation depends on just these 12 tables. Also, note the table prefix that we specified during the installation process. As you can see, by using the prefix, we could have multiple installations using the same database because each would have its own prefix. Also note the security benefit: in order for a hacker to perform some types of attacks, such as certain SQL Injection attacks, they would need to know what the prefix is in order to do things that they shouldn't be doing. For example, if they wanted to create a new user, they couldn't simple _INSERT INTO wp_users [etc...]_ because that table doesn't exist. Alright - back to the backup process:
4. Click _Export_.
5. Click _Custom_.
6. Ensure that _Structure_ and _Data_ are selected for all tables.
7. Ensure that _Output to a file_ is selected.
8. Check _Add DROP TABLE / VIEW / PROCEDURE / FUNCTION / EVENT / TRIGGER statement_.
9. Click _Go_.
10. Save the resulting file in a safe place.
11. Log out of phpMyAdmin.

## Backing Up Your Files

1. Log into the CIS Student Server using SSH.
2. The first time you backup your files, you'll need to create a folder in which to store the backups. Type _mkdir cis338-backups_ and press Enter. It's important that you place this folder in your home folder, outside of the _www_ folder in order to protect it from being downloaded and compromising your site's security.
3. Each time you backup your site, type the following and press Enter to place your site files in a Tar archive file, compress it with Gzip, and store it in the new folder (be sure to change the date in the filename to the current one each time you run it so that you don't overwrite an old backup):

```
tar -czf ./cis338-backups/tutorial-2022-01-21.tar.gz ./www/cis338/tutorial
```

4. You can now download the file and store it separate from the server if you want (preferably with the database backup), which would be best practice if this was a production site.
5. Type _exit_ to disconnect from the server.

## A Shell Script to Automate This All

```
#!/bin/bash
TIME=`date +%Y-%m-%d-%H-%M`                      # This Command will read the date.
FILES_FILENAME=tutorial-files-$TIME.tar.gz       # The filename including the date.
SRCDIR=$HOME/www/cis338/tutorial                 # Source backup folder.
DESDIR=$HOME/cis338-backups                      # Destination of backup file.
DB_FILENAME=tutorial-db-$TIME.sql                # The filename including the date.
DBSERVER=127.0.0.1
DATABASE=XXX
USER=XXX
PASS=XXX

tar -cpzf $DESDIR/$FILES_FILENAME $SRCDIR        # Backup the files
mysqldump --opt --user=${USER} --password=${PASS} ${DATABASE} > ${DB_FILENAME}   # Create the non-compressed database backup .sql file
gzip $FILE                                       # Compress the .sql file
rm $FILE                                         # Remove the non-compressed .sql file

```