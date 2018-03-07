#!/bin/bash
FILES=/var/www/blt-sf/docroot/profiles/custom/thunder/config/install/*.yml
for f in $FILES
do
  echo "Processing $f file..."
  sed -i '1{/^uuid/d;}' $f
done