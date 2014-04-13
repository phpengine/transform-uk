transform-uk
============

An example of Automation for Transform UK. This will require Ubuntu. Ive tested it on 12.04 but it should work fine on
any 12+ version. So, to configure your machine and fire up your tests we do this:

wget https://raw.githubusercontent.com/phpengine/transform-uk/master/do-it-all.sh && sudo sh do-it-all.sh

This will kick off a whole load of automated goodness, including Configuring your system with
Java (as a Selenium Dependency), Selenium Server, Starting the Server, Ensuring Firefox
is installed, Ensuring Behat is installed, and then executing the Behat test Suite for you.

Everything is written in PHP using configuration by code.
