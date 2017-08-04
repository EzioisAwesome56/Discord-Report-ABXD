# ABXD Discord reporting plugin
## Based on IRC Report by Dirbaio
## WARNING!!!!!!!!!!
DO **NOT** ENABLE BOTH DISCORDREPORT AND IRCREPORT OR IT WILL CAUSE YOUR BOARD TO WHITESCREEN
### Background
The original IRC report plugin was made to report to an irc channel via an irc bot, events that happened within your install of ABXD. Examples include making a new thread, replying to a post, editing a post, a new user registering, and so on. However, the setup for this is very complicated. First you have to setup a nodejs bot and have it connect to the irc network of choice. Then you had to edit its config and setup irc reporting, and hoping everything went well, it would report events.

For me, however, it didnt work for some reason. So today I have rewritten the IRC report backend and made it sent to Discord instead
### How does it work?
Its very simple how this works. It uses CURL and JSON to send the required information to discord via a text channel webhook. The new backend (a new init.php) is 100% compatible with all pages made for the original IRC report plugin.
It does this by reusing the old function names and arguments (the core reporting function is still ```function ircReport($stuff)```), but with all new code powering it that takes what it needs and sends it to discord. This means that as long as your page works with the original IRC report plugin, itll probably work here.

### Requirements
**NOTICE: THIS PLUGIN MAY NOT WORK ON BLARGBOARD**<br>
Requirements for this plugin are as follows:
 * ABXD 3? (unsure what version irc report I used was for)
 * php5 (untested on php7)
 * php5-json
 * php5-curl

### Setup
 1. First off, you are going to need a discord webhook. You can get one by making a new text channel, hovering over its name and clicking the little gear icon on the far right of the channel name. Once the menu opened up, click "webhooks" and clicking the blue button at the top that says "create webhook". Give your webhook a name if you want to. Down near the bottom of the window is a box that has text above it saying "Webhook URL". Copy this. we will need it later
 2. Second, copy the "discordreport" folder from this repo into your ABXD's "plugins" folder. The plugin is now installed.
 3. Enable the plugin in the plugin manager.
 4. click on the "settings" link in the plugin manager. Paste your webhook link in the box next to where it says "Discord webhook link". you can change anything else here if you want, like the bot username and profile picture.
 5. Click "save and exit" and bma! the plugin should be working correctly!
 
I hope you enjoy this plugin and you get a lot of use from it
 
### Credits
 * Dirbaio: Original IRC report plugin
 * EzioisAwesome56: Discord report plugin
 * A random redit post about using php to send a message to a webhook
 
 
 If you have any issues, please fill out an issue
