# Backing Up Your Site

In a future lesson, we will look at ways to automatically perform backups, but it is important that you conduct manual backups as you work on your sites in this course.

## Backing Up Your Database

1. Log into phpMyAdmin on the CIS Student Server.
2. Click the database that you want to backup. For example, _studentX_cis338tutorial_, where _studentX_ is your student username.
3. Click _Export_.
4. Click _Custom_.
5. Ensure that _Structure_ and _Data_ are selected for all tables.
6. Ensure that _Output to a file_ is selected.
7. Check _Add DROP TABLE / VIEW / PROCEDURE / FUNCTION / EVENT / TRIGGER statement_.
8. Click _Go_.
9. Save the resulting file in a safe place.
10. Log out of phpMyAdmin.

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