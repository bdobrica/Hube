#!/bin/bash

curl -o wordpress.zip https://wordpress.org/latest.zip
unzip wordpress.zip
mv wordpress/* /var/www
rm -Rf wordpress.zip
rm -Rf wordpress
rm -Rf /var/www/wp-config-sample.php
rm -Rf /var/www/wp-content/plugins/akismet
rm -Rf /var/www/wp-content/plugins/hello.php
rm -Rf /var/www/wp-content/themes/twenty*


curl -o flatui.zip https://github.com/designmodo/Flat-UI/archive/master.zip
unzip flatui.zip
cp Flat-UI-master/dist/css/flat-ui.min.css /var/www/wp-content/themes/hube-ui/assets/css/flat-ui.min.css
cp Flat-UI-master/dist/css/vendor/bootstrap.min.css /var/www/wp-content/themes/hube-ui/assets/css/bootstrap.min.css
cp Flat-UI-master/dist/scripts/flat-ui.min.js /var/www/wp-content/themes/hube-ui/assets/js/flat-ui.min.js
sed -i '1 i\/*\nName:flat-ui\nDependencies:bootstrap\n*/' /var/www/wp-content/themes/hube-ui/assets/css/flat-ui.min.css
sed -i '1 i\/*\nName:bootstrap\n*/' /var/www/wp-content/themes/hube-ui/assets/css/bootstrap.min.css
sed -i '1 i\/*\nName:flat-ui\nDependencies:jquery\nVersion:0.1\nFooter:true\n*/' /var/www/wp-content/themes/hube-ui/assets/js/flat-ui.min.js