<?php
wp_logout();
header( 'Location:' . HUBE_Theme::HOME . '/', 303 );
exit( 1 );
