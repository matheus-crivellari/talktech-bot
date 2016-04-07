# TalktechBot
A bot made during the 10 hours-marathon Movile Talktech Hackathon where we had to develop an innovative bot which had business appeal and were valuable to the user.

##Overview
This is a backend application entirely made in PHP and it communicates with a bot created with the Telegram BotFather interface.

The bot is responsible for receiving messages from Telegram's users while our TalktechBot gets those messages through a long-polling approach.

TalktechBot was intended to sell pizzas to customers through a chat interface. It is capable of receiving orders, opening shopping carts, consulting databases, offering add-ons, checkouting orders through etc. Everything by option buttons available in Telegram's interface.

It has a human-message-to-operation-code-translator class which were responsible for translating human messages containing known keywords into operation codes in order to ease the application decision taking.