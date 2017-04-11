# ti-birthday-notifications
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg?style=flat)](https://github.com/Codeinwp/pirate_wraith)
[![Build Version](https://img.shields.io/badge/version-1.1.0-blue.svg?style=flat)](https://github.com/Codeinwp/pirate_wraith)

Sends a notification two weeks / one week before one of ThemeIsle's team birthday on Slack on a private channel.

## Prerequisites
- Ubuntu 16.04
- LAMP Stack configured
- A private channel for each person's birthday ( for example: bday-rodica, bday-sabina etc )
- An incoming webhook associated with each of those channels.

## Files

### birthdays.php

The birthdays.php file will contain the birthdays of all ThemeIsle's team.
The format is as follows:
Each line is composed by the person's private channel webhook, followed by a blank space and the birthday. The format of the date is day.month.year .

For example :

https://hooks.slack.com/services/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 18.04.1980
https://hooks.slack.com/services/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 29.01.1991

### main.php
This is the main file of the application. It parses the birthdays.php content and for each entry checks if the birthday is scheduled in the next 2 weeks or in the next week and sends a notification to that person's private birthday channel with the message `Buy me a gift. Pretty please`

## How to use it
The script runs every day with the help of a cron. For that, you need to set up the cron on the server like this:

Type:
`sudo crontab -e`

Insert the following entry, making sure the path to the main.php file is the correct one from your environment.
`0 0 * * * php /var/www/html/main.php`

### Authors

Rodica Andronache -- Themeisle -- rodica@themeisle.com -- @rodica-andronache

Marius Cristea -- Themeisle -- marius.cristea@vertistudio.com -- @selu
