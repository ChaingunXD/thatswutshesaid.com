#!/bin/bash

DIR=$(dirname "$0")

install() {
  sh $DIR/init/scripts/base.sh
  sh $DIR/init/scripts/lamp.sh
  sh $DIR/init/scripts/node.sh
  sh $DIR/init/scripts/node-clientside-tools.sh
  sh $DIR/init/scripts/mon.sh
  sh $DIR/init/scripts/dotfiles.sh
}

postinstall() {
  cp /var/www/vagrant/conf/default /etc/apache2/sites-available/
  cp /var/www/vagrant/conf/apache2.conf /etc/apache2/
  /etc/init.d/apache2 restart
}

install
postinstall