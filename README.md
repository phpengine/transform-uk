transform-uk
============

An example of Automation for Transform UK. This will require Ubuntu. Ive tested it on 12.04 but it should work fine on
any 12+ version. So, to fire up our tests we do this:

1. Install PHP5 and Git

   sudo apt-get install php5 git


2. Install Cleopatra

   cd /tmp && git clone https://github.com/phpengine/cleopatra && sudo php cleopatra/install-silent


3. Download the Repo with the Tests and Automation scripts in it

   git clone https://github.com/phpengine/transform-uk.git && cd transform-uk


4. Kick off some automation for your Environment and the Tests...

   sudo cleopatra autopilot install build/config/cleopatra/autopilots/transformuk.php


This will kick off a whole load of automated goodness, including Configuring your system with
Java (as a Selenium Dependency), Selenium Server, Starting the Server, Ensuring Firefox
is installed, Ensuring Behat is installed, and then executing the Behat test Suite for you.

Everything is written in PHP using configuration by code.
