apt-get install php5 git -y --force-yes
cd /tmp
git clone https://
php cleopatra/install-silent
git clone https://github.com/phpengine/transform-uk.git
cd transform-uk
cleopatra autopilot install build/config/cleopatra/autopilots/transformuk.php