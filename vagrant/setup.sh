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

install