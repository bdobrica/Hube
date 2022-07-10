#!/bin/sh

# install worldpress
curl -o wordpress.zip -L https://wordpress.org/latest.zip
unzip wordpress.zip
mv wordpress/* /var/www
rm -Rf wordpress.zip
rm -Rf wordpress
rm -Rf /var/www/wp-config-sample.php
rm -Rf /var/www/wp-content/plugins/akismet
rm -Rf /var/www/wp-content/plugins/hello.php
rm -Rf /var/www/wp-content/themes/twenty*

# copy flat-ui files
curl -o flatui.zip -L https://github.com/designmodo/Flat-UI/archive/master.zip
unzip flatui.zip
mkdir -p /var/www/wp-content/themes/hube-ui/assets/css/
mkdir -p /var/www/wp-content/themes/hube-ui/assets/js/
cp Flat-UI-master/dist/css/flat-ui.min.css /var/www/wp-content/themes/hube-ui/assets/css/flat-ui.min.css
cp Flat-UI-master/dist/css/vendor/bootstrap.min.css /var/www/wp-content/themes/hube-ui/assets/css/bootstrap.min.css
cp Flat-UI-master/dist/scripts/flat-ui.min.js /var/www/wp-content/themes/hube-ui/assets/js/flat-ui.min.js
cp -r Flat-UI-master/dist/fonts /var/www/wp-content/themes/hube-ui/assets/fonts
sed -i '1 i\/*\nName:flat-ui\nDependencies:bootstrap\n*/' /var/www/wp-content/themes/hube-ui/assets/css/flat-ui.min.css
sed -i '1 i\/*\nName:bootstrap\n*/' /var/www/wp-content/themes/hube-ui/assets/css/bootstrap.min.css
sed -i '1 i\/*\nName:flat-ui\nDependencies:jquery\nVersion:0.1\nFooter:true\n*/' /var/www/wp-content/themes/hube-ui/assets/js/flat-ui.min.js
rm -Rf flatui.zip Flat-UI-master

# copy GoJs files
curl -o gojs.zip -L https://github.com/NorthwoodsSoftware/GoJS/archive/master.zip
unzip gojs.zip
cp GoJS-master/release/go.js /var/www/wp-content/themes/hube-ui/assets/js/go.js
cp GoJS-master/extensions/Figures.js /var/www/wp-content/themes/hube-ui/assets/js/figures.js
sed -i '1 i\/*\nName:gojs\nVersion:0.1\nFooter:true\n*/' /var/www/wp-content/themes/hube-ui/assets/js/go.js
sed -i '1 i\/*\nName:gojs-figures\nDependencies:gojs\nVersion:0.1\nFooter:true\n*/' /var/www/wp-content/themes/hube-ui/assets/js/figures.js
rm -Rf gojs.zip GoJS-master

# create wp-config.php
sed -i '/^### SALT ###$/r'<( curl -L https://api.wordpress.org/secret-key/1.1/salt/ ) /var/www/wp-config.php