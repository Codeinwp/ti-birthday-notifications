# ti-birthday-notifications
[![ThemeIsle Hackathon](https://img.shields.io/badge/%20-Hackathon-red.svg?colorA=333333&colorB=FF3D3D&logoWidth=100&logo=data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAFwAAAAOCAYAAACiqXukAAAFsElEQVR42u3Ye1BUZRgGcBYFtpCLjjVmJKgx5gwiKkigAytegkTcFBWCUtNMC%2FJWNpUpiaMzpYmaQrcRxwuTNQ5YmpGlZqaVeUG8gCledkPUuCS2LLA8PW3vH98czgbmPzbTmfnNnvfd831n99nDd87gBsBJb0N4lIGGUxYGProe%2FcL%2FoM1u%2F2%2B3vUnOyk7rsLsfyPns6ksLd8AxIh6sgSGRwICIG9zv1p6T9NhzqROZFP53cygWi%2BURMtHDbRwXRiYRcseB1wWM9GkOHXr91dXn4BsYh7qibDSXzwauvIEWaw6avpz%2Bu4uA%2FchMo6QOIyhMd3ng%2BQTKaeO4fQRR%2BO8Dz6nu7%2FV21dTagFFnwSu67umZKMvdiOaj0UBpFNFpE1CRiaZt41apE2oCvih1F5pCN%2F4jgb9IhTStjePiaesdBc6w%2B3X%2FoNY%2BM70I9r6xYOBOjUVpErbidBzqD6be4pj3qIOrwJX%2BRTVwvnamHuTu4i%2FFl4Lo3jaWLAMFUCdN%2F37q9g%2Fjuss493b%2BEH4URPcovTmuAmevKwWSh8vAjWurNw%2FYUod9D2TCMdgEREQ7A7fvn9g6cKo%2BMMnRJa8GDDxNvkQOQeO4JvAU2k0QlyhcCSKIdpGDQHZ6n7xoOdWKXDJRBYFsNIWC6RBB7CajMv9EukAQFhovIV2iWrFcen3oIEE00qfkqxc496PpJ4KoowW6gfusr6kMe9eKi27JaBo0DIhPBIYOQ0vxJNgORjhDbj42GI5jkc79vRuzIIEvkS%2FzpBJmPeXTEk3gvxGkbibQz8ryc1l6RyXU61Ln0TT6UepKOUetgBxbTo1kJYgMmX%2BC1A76mD5R6igGs4Uuq2s4X7%2BX%2BiTl0RWpZ2kDlxupTXrF9BHZpZ7cKnDvdTUIXfaLM%2FCbgSMAczKQNB5YxODLZsBR%2FgpgWYOGknlo%2BNaEhGf2gD8SGPhryhVkamNJqaZw6Y0lCC9aTKAfqIMcE02QEH1kfogiGedPNiX0YBm7TXobNJ8hQ%2FlcH0pvq%2FamKfU1qVOkHkP7KFkn8B1S5ylXfKb0jrQK3HNNtc1vZSUqDMmweD7x97KSkg5MSAWyxwJfpQBfT0fzimRc7TwGYXOPwHNtNRj447cR%2BEKl140g%2FGk%2Fgc5SodhBEBGawEN15l%2Bq9LIIMk9vgihW5j8hvVIXga%2BW2kYbKZ7c5T1t4PVSH6JCcUB6N%2FVumusMK65ie495zqvc4p0Ee2isc2nhle58tUeMhNUnCSXGdHgtq4Ahp7qK44y3Ebj64%2FhrAj9KoMOUryNImb%2FBxfwTXQTenyA26cyd7SLwDpRBFwjiGPXUCRzic8rXyNML3Ngx%2B8zhhNRcMHCnMsM4lPmMxvku8Sj3TsQ5w3hnf27MSnRceuaa4Z3rsZovHkOgGjLoP6XoB64sAfluLjYl8FoXgZtdBO6n3Ihj2%2FMcTl3JTAPJnUZQCYEKdAI%2FL3Vmux4LjduMocYtgTOMmx5qWJw4ENbgsbD2NqMqegwq%2ByfB2suMyrAkFAQ83%2BQ7rzjHI%2BuEr04gD1ILgd6knuSv3AwTyUsn8EAardSvy9gQyqa3yEvGg%2BpkvLsm8DQyagLfSb5UIHUFJchnHU5f0CAG5aM8W%2BfSY8oS4Sehr5LebnqOQOXUjxYpTyZP0UMUSRsoTS%2FwBLpGIPy6N7Levj3GBj6ROA4NQUNBrB0lUc1pI1f6t%2FFsvJogmggac7SBCzMtJ%2Bioopd1%2BkFq4CJLEzjk%2FfvoJEHHX2v1cYLiO7LIvoNsBDGBelGj1LXkQbsIOr7RC9yLMiiXZrWcGrILpdE7URp7q%2BVETAVORm3HqRhLO%2F%2BH0lcCnE%2BpGn3kGE9NP0D6fWgqLaDZlECdpJ%2Bq4S1jkpReiPRClF6Scs44ypT5n6UBZJAbYqoijnxpNM2m%2BTSZgpUlqDelUbrUBhpMM2kBvUBDyQOS859z6Lcv%2FR800QAAAABJRU5ErkJggg%3D%3D)](https://github.com/rodica-andronache/ti-birthday-notifications)

Sends a notification two weeks / one week before one of ThemeIsle's team birthday on Slack on a private channel.

## Prerequisites
- Ubuntu 16.04
- LAMP Stack configured
- A private channel for each person's birthday ( for example: bday-rodica, bday-sabina etc )
- An incoming webhook associated with each of those channels. For more details about incoming hooks and how to use them check this link https://api.slack.com/incoming-webhooks

## Files

### birthdays.php

The birthdays.php file will contain the birthdays of all ThemeIsle's team.
The format is as follows:
Each line is composed by the person's private channel webhook, followed by a blank space and the birthday. The format of the date is `d.m.Y` (date.month.year) .

For example :

`https://hooks.slack.com/services/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 18.04.1980
https://hooks.slack.com/services/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 29.01.1991`

### main.php
This is the main file of the application. It parses the birthdays.php content and for each entry checks if the birthday is scheduled in the next 2 weeks or in the next week and sends a notification to that person's private birthday channel with the message `Buy me a gift. Pretty please`

## How to use it
The script runs every day with the help of a cron. For that, you need to set up the cron on the server like this:

Type:
`sudo crontab -e`

Insert the following entry, making sure the path to the main.php file is the correct one from your environment.
`0 0 * * * php /var/www/html/main.php`

Note: If the path for the project is different than the default one used in the project ( /var/www/html/main.php ) please make sure you also update the path to the birthdays.php file in the main.php file `$bdays = file_get_contents('/var/www/html/birthdays.php');`

### Authors

Rodica Andronache -- Themeisle -- rodica@themeisle.com -- @rodica-andronache

Marius Cristea -- Themeisle -- marius.cristea@vertistudio.com -- @selu
