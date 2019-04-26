These files are served by the Raspberry Pi in my bedroom at my primary residence. They include control panel pages that interact with the pingpong lights (see https://github.com/SpenceKonde/AzzyProjects/tree/master/Animate ) and in the future will also include additional utility pages. 


Install docker and docker-compose:

curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
sudo apt-get install libffi-dev
sudo apt-get -y install python-setuptools && sudo easy_install pip  && sudo pip install docker-compose

Start container:

docker-compose up


Restart after reboot:

docker-compose rm
docker-compose create
docker-compose start
