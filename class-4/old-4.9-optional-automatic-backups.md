---
layout: default
title: "4.7 Optional: Automatic Backups"
---

# 4.7 Optional: Automatic Backups

In an optional tutorial a few weeks ago, we created a Bash script to backup WordPress with one command. In this optional tutorial, we will take this another step and fully automate the running of the script that we created.

Before we begin, though, a word of warning: this could fill up the student server quite quickly. If you enable fully automatic backups using this method, please be diligent about deleting old backups! Also, when the course is over and you are no longer using WordPress on your student account, please disable automatic backups.

1. Log in to the CIS Student Server via SSH.
2. Type the following and press Enter to edit your crontab file in Nano:

```
crontab -e
``` 

3. A Nano screen will appear containing your personal crontab file. You will see a set of commented lines explaining the format and use of the file.
4. Use the arrow keys to navigate to the bottom of the file.
5. Each command that should be run on a schedule gets put on its own line, so we are going to add a line that contains /home/studentXXX/backup-tutorial-site.sh where XXX is your student server account number.
6. Before the command there are five additional elements separated by spaces. Each of those elements is either a number, an asterisk, or a combination of numbers and asterisks an operators. Let's say that we want to perform daily backups at 5:00 AM. The first element is the minute, so that should be a 0. The second element is the hour (0 for midnight through 23 for 11 PM), which should be 5. The next is the day of the month starting at 0. We want to run it every day, so put an asterisk there. The next element is the month starting at 0 and we want to run it every month, so put an asterisk there as well. The final element before the command is the day of the week (Sunday is both 0 and 7, Saturday is 6). We'll run this any day of the week, so put an asterisk there as well. Make sure that you have a single space between each element.
7. If you had any command line arguments to pass to the program, those would come after the command separated by spaces, but we don't have anything. Press Enter so that there is still a blank line at the end of the file.
8. Before we close this, let's talk about the operators. Let's say you have something that you want to run at 5 AM, noon, and 8 PM. You can use the comma operator to specify a list of values for any of the numeric elements.
9. There's also a dash operator to specify a range of values. For example, if you want to run something hourly during business hours, you could use 8-17 in the hour element.
10. The slash operator specifies a step. Let's say that you don't need daily backups, but you want one every 3 days. You can do */3 in the day of the month slot.
11. Let's make one change to this. If you want this to run every day, you can leave it this way! My suggestion, though, is to instead run it once a week, perhaps every Sunday morning since the assignment is due Saturday evening. Or, you might run it every 3-4 days or maybe every Sunday and Wednesday. I'll leave the schedule up to you.
12. Press Ctrl-O and Enter to save.
13. Press Ctrl-X to close Nano.

That's all there is to it! Once you've saved the file and closed Nano, the cron system will update its schedule based on what you put in the file. If you need to modify or remove a command from the schedule, simply repeat the process and make whatever changes you need to make. As you soon as you save and close Nano, whatever changes you make, whether adding, modifying, or removing a command, will be immediately applied.

There's some great information about cron jobs here:
<https://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/>
