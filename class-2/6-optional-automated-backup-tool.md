# Optional Tutorial: A Shell Script to Automate File and Database Backups

Now that you know the manual steps to backup your WordPress database and files, in this optional tutorial we will create a Bash script that will perform all of those manual steps by running a single command.

1. Log into the CIS Student Server using SSH.
2. Type the following command and press Enter to create a new Bash script and edit it using the Nano text editor.

```
nano ./backup-tutorial-site.sh
```

3. You will see a nearly blank screen with a title bar at the top and a number of keyboard shortcuts listed at the bottom. Either retype the following or copy and paste it into Nano:

```
#!/bin/bash
TIME=`date +%Y-%m-%d-%H-%M`                      # This Command will read the date.
FILES_FILENAME=tutorial-files-$TIME.tar.gz       # The filename including the date.
SRCDIR=$HOME/www/cis338/tutorial                 # Source backup folder.
DESDIR=$HOME/cis338-backups                      # Destination of backup file.
DB_FILENAME=tutorial-db-$TIME.sql                # The filename including the date.
DBSERVER=127.0.0.1                               # Database server
DATABASE=XXX                                     # Database name
USER=XXX                                         # Database username
PASS=XXX                                         # Database password

tar -cpzf $DESDIR/$FILES_FILENAME $SRCDIR        # Backup the files
# Create the non-compressed database backup .sql file
mysqldump --opt --user=$USER --password=$PASS $DATABASE > $DESDIR/$DB_FILENAME
# Compress the .sql file and delete the original
gzip ${DESDIR}/${DB_FILENAME}                    
```

4. Replace each XXX with the proper value, based on the comments.
5. Press Ctrl+O to save the file.
6. Press Enter to save with the name specified in step 2.
7. Press Ctrl+X to close Nano.
8. Type the following and press Enter to make the Bash script executable:

```
chmod a+x ./backup-tutorial-site.sh
```

9. Type the following and press Enter to run the Bash script:

```
./backup-tutorial-site.sh
```

10. Use the following command to change into the _cis338-backups_ directory:

```
cd cis338-backups
```

11. Use the following command to list all files and ensure that you have one file for the database and one for the files:

```
ls -al
```

There you have it! At this point, you can download the files and store them as described in tutorial 5.
