---
layout: default
title: "4.4 Security"
---

# 4.4 Security

In this video, we're going to set up BulletProof Security and discuss some ways to secure WordPress.

1. Go to the URL of your tutorial site following by _wp-login.php_. For example, <https://cisstudent.uma.edu/~studentX/cis338/tutorial/wp-login.php>, where _studentX_ is your CIS Student Server username.
2. Log in using the username and password you created in the _Install WordPress_ tutorial.
3. You will be taken to the _Dashboard_, part of the WordPress _Admin Area_. You should see a _BPS Setup Wizard Notification_ box at the top of the page and can click the _Click Here_ link in that box to start the setup wizard. If not, check the _Installed Plugins_ to ensure that _BulletProof Security_ is installed and activated and use the _Setup Wizard_ link under the _BulletProof Security_ heading to start the process.
4. You will see a list of pre-installation checks, which should all be green. Click the _Setup Wizard_ button at the bottom to run the wizard.
5. You will receive a message that you can re-run the wizard at any time and your existing settings will be saved. Click _OK_.
6. You should get a message that the setup is complete. It will indicate that your root .htaccess file for your Web site has been backed up. We'll take a look at why in a bit. Scroll down to the _BPS Setup Verification & Error Checks_ section and read through the confirmations. I encourage you to hover over the question marks to read more about what has been done and why.
7. Under the _BPS Security_ item on the _Admin Menu_, click _htaccess File Options_.
8. At the top of the page there is a notice about the BPS GDPR Compliance option. I encourage you to read the forum topic to better understand what this option does. If this were a public site, you would need to consider if you should turn on the option or not based on your and your lawyer's understanding of the EU's _General Data Protection Regulation (GDPR)_ and how it applies to you. For now, you can click _Dismiss Notice_.
9. Scroll through this page and review the information by clicking the question marks. Note that by default, BPS applies several protections using .htaccess files and also scans for hidden plugin folders and files on a regular basis. We're going to explore the types of things that the .htaccess protections entail shortly.
10. Click the _htaccess File Editor_ tab. It's tempting here to lock the htaccess file so that malware can't modify it, but due to the way the student server works, this will cause WordPress to become inaccessible - don't click that button!
11. Click the _Custom Code_ tab. This is where you would go to add additional rules to your .htaccess file or modify sections that BPS automatically adds. This can be very powerful but also can break things, so carefully ready the instructions before doing anything with it. Although we won't use it in this class, one custom code block that I've found useful is the Brute Force Login Page Protection (#4), which can be used to entirely block logins from all IP addresses other than your own.
12. Click _MScan_. MScan scans your WordPress installation for malware. The first time you run this, you will actually need to run it twice. It uses a combination of file hash comparisons and pattern matching scanning. Click the help button and find the _MScan Malware Scanner Guide_ for more information.
13. Click _Login Security_. Login security includes account lockouts after failed login attempts. If you use this feature and find that a user has been locked out, you can unlock their account by coming here. Note that it is possible that a bot will brute force an active account and cause it to become locked out. This could even happen to your admin account. If that happens to your admin account, you won't be able to get here to unlock the account, so your options are to wait until the account is automatically unlocked or rename the BulletProof Security plugin folder. 
14. Click the _JTC-Lite_ tab. JTC is a simple CAPTCHA that is meant to reduce the number of brute force login attempts, thereby reducing the number of account lockouts due to such brute force attacks.
15. Click the _Idle Session Logout|Auth Cookie Expiration_ tab. The ISL feature monitors user activity via Javascript and logs out inactive accounts after a period of inactivity specified here. It's similar to Brightspace asking you if you are still there after a period of time and logging you out if you don't respond. ACE actually sets an expiration date on the WordPress authentication cookie, meaning that whether the user is active or not, after the period of time specified here, they are logged out. The cookie expiration is reset every time someone logs in. This also includes an option to turn off the Remember Me checkbox on the WordPress login screen.
16. The _DB Backup_ page provides another way to backup the database.
17. The _Security Log_ shows security events and should be reviewed periodically in case there are things that you need to address.
18. The _Alerts|Logs|Email Options_ page allows you to change the email address to which BPS will send security notices and logs. You can also specify settings related to what you would like to be sent. Notice that BPS includes an option to send you notices of theme and plugin updates that need to be installed - very handy for those who aren't using automatic updates! Let's leave all of these alerts as-is except for the updates available emails: for those, let's turn them on for all plugins and all themes and then click _Save_.

That's pretty much everything that I want to cover about this particular plugin, but our discussion post this week explores additional ways to protect WordPress. Feel free to experiment with other security plugins and let the class know if you find one that you think is especially good and/or if you find a BPS setting that we should be using but aren't.

Let's take a moment to take a look at some of what BPS does to your WordPress installation's files. You are welcome to just watch this, but of course you can also follow along in your own installation.

1. I'm going to log in via SSH and _cd_ into the tutorial site directory:

```
cd www/cis338/tutorial
```

2. Next, I'll type the following to get a full directory listing:

```
ls -al
```

3. Let's look at what is in the .htaccess file:

```
nano ./.htaccess
```

4. By default, Apache includes the version of Apache and sometimes PHP in the response headers that are sent to web browsers when someone visits your site. The first option here turns that off, providing potential hackers with less information about your server.
5. The next rule turns off directory browsing, which protects against hackers being able to browse your wp-content directory and possibly various other directories that aren't otherwise hidden.
6. The next rule makes it so that WordPress's index.php script will be run even if an index.html file ends up in your site's root folder.
7. If you read the block about error logging, you'll see that the next several lines ensure that errors are logged by BPS, which means that BPS and you can see and respond to hacking attempts.
8. The next several lines ensure that important system files are not viewable (the F means that anyone who tries to access the path will receive a 403 Forbidden status).
9. BPS also blocks certain types of requests that WordPress doesn't know how to handle.
10. The next several rules address specific exploits in themes and plugins, block requests from user agents that aren't used by real Web visitors and are frequently used by bots, and block query strings that are commonly found in exploits.
11. Finally, it blocks access to configuration files from the Web.
12. Although I won't show it in this tutorial, you may also want to take a look at the .htaccess file in the wp-admin directory.

I mentioned earlier that you may find yourself unable to log in because BPS responded to a brute force attack on your user account and locked it. If that happens, here's what you should do:

1. Log into the student server using either SSH or SFTP. I'm going to show it using SFTP.
2. Navigate to your WordPress root directory, such as _www/cis338/tutorial_.
3. Navigate to _wp-content/plugins_.
4. Rename the _bulletproof-security_ directory to something else, such as _bulletproof-security-off_.

This will deactivate BPS and you will be able to log in as normal. When you log in, you will see a notice that _The plugin bulletproof-security/bulletproof-security.php has been deactivated due to an error: Plugin file does not exist._ This is due to the fact that WordPress stores which plugins and themes are active based on the path and filename of the primary plugin file. By renaming the directory, you are causing the BPS path to change, so WordPress sees it as a different, deactivated, plugin. At this point, you would want to return the BPS directory to its original name. Notice that when I refresh the Plugins list, it is still deactivated - once WordPress deactivates a plugin because it can't be found, it doesn't automatically reactivate it. So, you will want to activate it yourself in order to restore its functionality. It will remember your prior settings. Keep in mind that you are likely to be locked out again if the brute force attack is still taking place. I would usually check the security log to see if the same IP(s) are trying to log in and block those IP(s) via .htaccess or some other method.
