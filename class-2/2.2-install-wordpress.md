# Install WordPress

1. Log into your CIS Student server account via SSH.
2. Type _cd www/cis338_ and press Enter. If you have not already created your cis338 folder, follow last week's tutorials first to do so.
3. Type the following and press Enter to download the latest version of WordPress:

```
wget https://wordpress.org/latest.zip
```

4. Type _ls_ and press Enter and you should now see a file named latest.zip downloaded into the folder.
5. Type the following and press Enter to unzip the file into a folder named _wordpress_:

```
unzip ./latest.zip
```

6. You will see a number of lines on the screen that confirm that each of the files are being inflated. If you run _ls_ again you will now see a folder named _wordpress_.
7. Type the following to copy the new _wordpress_ folder to a folder named _portfolio_:

```
cp -R ./wordpress ./portfolio
```

8. Type the following to rename the _wordpress_ folder to _tutorial_:

```
mv ./wordpress ./tutorial
```

9. If you run _ls_ again you will now see two folders named _portfolio_ and _tutorial_, respectively.
10. Type _rm latest.zip_ to delete the zip file - you no longer need it.
11. Type _exit_ to disconnect from SSH.
12. It's now time to switch to your Web browser to complete the installation of your tutorial site. Go to https://cisstudent.uma.edu/~studentX/cis338/tutorial/, where _studentX_ is your student username.
13. You will be presented with a list of languages. Choose English and click Continue.
14. Read the information presented and click _Let's Go_.
15. Enter the name of the database that you created in the _Create Your Database_ tutorial, for example, _studentX_cis338tutorial_, where _studentX_ is your student username.
16. Enter your MySQL server username and password and leave the database host as-is (_localhost_).
17. The table prefix will be the first part of the name of every database table that WordPress uses. This allows you to have multiple installations of WordPress share a single database and also provides a level of security since some SQL injection attacks would require knowing your prefix. We won't be placing multiple WordPress sites in a single database but we will be taking advantage of the security aspect. Change _wp\__ in the table prefix field by adding a random number between _wp_ and the underscore. For example, _wp8646\__.
18. Click _Submit_.
19. Click _Run the Installation_.
20. Type _Geeky Acres_ as the site title.
21. Enter a username that you will use to administer the site. For security purposes, don't use _admin_.
22. Enter a password or use the randomly-generated suggestion.
23. Enter your maine.edu email address.
24. Click _Install WordPress_.
25. You are done installing! If you check your email, you should now have a message from wordpress@cisstudent.uma.edu with information about your new tutorial site.
26. Now repeat from step 12 for the portfolio site.