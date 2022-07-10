<?php
$header_file = $hube_theme->get ('dir', 'request::header');

$hube_user = $hube_theme->get ('user');
$user_role = $hube_theme->get ('user', 'role');

if (file_exists ($header_file))
        include ($header_file);

get_header();
?>
<div class="container <?php echo !empty ($user_role) ? 'hube-' . $user_role : ''; ?>">
<?php

if ($user_role == 'admin'):
        $hube_theme->render ('menu');

?>

<?php $hube_theme->render ('header'); ?>
                <hr />
<?php
        $page_file = $hube_theme->get ('dir', 'request::pages');
        if (file_exists ($page_file)) :
                include ($page_file);
        endif;
?>
        </div>
</div>
<?php else:
        $page_file = $hube_theme->get ('dir', 'request::pages');
        if (file_exists ($page_file)) :
                include ($page_file);
        endif;
endif;
get_footer();