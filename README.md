# Samson Tse's Project 2

## Live URL
<http://p2.samsontse.com>

## Description
The goal of this project is to create a usable xkcd password generator.  We were taught traditionally that the harder it is for a password to be remembered by a human, the harder it will be for a machine to crack. However, that notion is simply not true. As you can see from the comic below, it showing you that the password "Tr0ub4dor&3" is technically much easier for a machine to crack than the password "correcthorsebatterystaple". On top of that, the latter password has a much better chance for a human to remember successfully. This claim can be justify by running calcuations on the [entropy](https://en.wikipedia.org/wiki/Entropy_(information_theory)) for each of the password stated. Our generator above challenges the idea that the harder it is to remember a password, the safer it will be against cracking software. It doesn't have to be that way and this xkcd password generator can help you create much stronger passwords that you can also remember.

## Demo/Screencast
<http://www.screencast.com/t/UqFqlsCx>

## Details for teaching team
No login required for this password generator. The index.php is where most of the display code is and the logic.php is most of the function used for the generator.

## Outside Code
* jQuery: https://jquery.com/
* Bootstrap: http://getbootstrap.com
* Bootstrap Theme: http://bootswatch.com/flatly/

## Wordlist Source
* corncob_lowercase.txt: http://mieliestronk.com/
