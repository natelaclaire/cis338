# Backing Up Your Site

It is important that you perform regular backups of your WordPress site. WordPress stores most information in the database, but it stores uploaded files as well as themes and plugins as files, so it's important that you backup both the database and files.

In the optional next tutorial, we will look at one way to perform the following steps with a single command, but first let's learn the manual steps to backup your database using phpMyAdmin and backup your files using SSH.

In a future tutorial, we will look at some plugins that can help with backups, too.

It's also important to note that many Web hosts provide a built-in backup feature that is accessible via a hosting control panel. If you have access to such a tool, learn how it works and if it does what you need as frequently as you need it, take advantage of that since your Web host is providing it and therefore likely also supporting it. Although the following process is quite light-weight as far as server resources are concerned, many of the backup plugins are not and, in addition, taking advantage of the tools provided by your Web host is a good way to stay on your Web host's good side.

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
tar -czf ./cis338-backups/tutorial-2024-01-21.tar.gz ./www/cis338/tutorial
```

4. Type _exit_ to disconnect from the server.

## Storing Your Backups

At this point, you have a database backup on your own device and a file backup on the server. Although it's a good idea to keep at least one backup on the server for easy restoration if needed, you should always maintain your backups on a separate device (preferably multiple separate locations, whether those are on devices that can be instantly accessed, such as your personal computer or a file server, or on storage media that is disconnected, such as a flash drive that is kept in a safe). It's also a good idea to keep the database and file backups in the same location since you will need both if something happens. Also, make sure that you can directly tie a file backup to a single database backup - if you have to restore your site from a backup, you want to make sure that you don't restore the files from one point in time and the database from another point in time, which can result in things missing on your site.

It's also important to have a process in place to delete backups after a period of time. How long depends on you and the project. Take into account how often the site and its data are changed. For example, during initial development of a site you may keep all backups until launch, so that if something goes wrong or a direction from the client is misunderstood, the site can be returned to a prior point in time easily. Once launched, you might switch to keeping a week's worth of daily backups, one backup a week for two months, and then monthly backups for a year. Keep in mind that if the site is hacked, it's not always evident immediately. Although you probably won't directly restore a 3-month-old backup, having access to the files and database from 3 months ago might save you a lot of headaches if you find that 2.5 months ago your site was hacked and now you have to figure out what the hackers did to gain access, what backdoors they added after gaining access, and other changes that they made that might not be readily apparent. In that situation, you may start by comparing the 3-month-old backup with the 2-month-old backup and then slowly move forward in time.

Any backups originating on the server, such as the file backup created here, can be downloaded using SFTP. It's also possible to automate backup downloads using tools such as SCP (Secure CoPy) or RSync (Remote Sync), although we won't cover those here.

1. Log in to the student server using SFTP.
2. Navigate to the cis338-backups directory.
3. Download the file backup created above.
4. Store the downloaded file in a safe location, along with the database backup created above.
