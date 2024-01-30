# Security

In this video, we're going to set up BulletProof Security and discuss some ways to secure WordPress.

1. Go to the URL of your tutorial site following by _wp-login.php_. For example, <https://cisstudent.uma.edu/~studentX/cis338/tutorial/wp-login.php>, where _studentX_ is your CIS Student Server username.
2. Log in using the username and password you created in the _Install WordPress_ tutorial.
3. You will be taken to the _Dashboard_, part of the WordPress _Admin Area_. You should see a _BPS Setup Wizard Notification_ box at the top of the page and can click the _Click Here_ link in that box to start the setup wizard. If not, check the _Installed Plugins_ to ensure that _BulletProof Security_ is installed and activated and use the _Setup Wizard_ link under the _BulletProof Security_ heading to start the process.
4. You will see a list of pre-installation checks, which should all be green. Click the _Setup Wizard_ button at the bottom to run the wizard.
5. You will receive a message that you can re-run the wizard at any time and your existing settings will be saved. Click _OK_.
6. You should get a message that the setup is complete. It will indicate that your root .htaccess file for your Web site has been backed up. We'll take a look at why in a bit. Scroll down to the _BPS Setup Verification & Error Checks_ section and read through the confirmations. I encourage you to hover over the question marks to read more about what has been done and why.
7. Under the _BPS Security_ item on the _Admin Menu_, click _htaccess File Options_.
8. Notice at the top of the page there is a notice about the BPS GDPR Compliance option. I encourage you to read the forum topic to better understand what this option does. If this were a public site, you would need to consider if you should turn on the option or not based on your and your lawyer's understanding of the EU's _General Data Protection Regulation (GDPR)_ and how it applies to you. For now, you can click _Dismiss Notice_.
9. Scroll through this page and review the information by clicking the question marks. Note that by default, BPS applies several protections using .htaccess files and also scans for hidden plugin folders and files. We're going to explore the types of things that the .htaccess protections entail shortly.


TODO: finish this!
look at login security
MScan
htaccess file editor and custom code
DB backup
alerts

go to SSH and look at the .htaccess file adjustments