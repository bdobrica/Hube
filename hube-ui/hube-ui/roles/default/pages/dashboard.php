<?php
$hube_language = new HUBE_Language ();
$languages = $hube_language->get ('languages');

if (strpos ($_SERVER['REQUEST_URI'], '/admin/') !== FALSE) : ?>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <a href="" class="hube-logo"><span><?php wp_title (); ?></span></a>
        <div class="hube-rounded hube-translucent hube-padded hube-center hube-trainer-login">
            <h5><?php HUBE_Theme::_e( /*T[*/'Trainer Login'/*]*/ ); ?></h5>
            <form action="" method="post">
                <label><?php HUBE_Theme::_e( /*T[*/'Username:'/*]*/ ); ?></label>
                <input class="form-control" name="username" type="text" value="" placeholder="" />
                <label><?php HUBE_Theme::_e( /*T[*/'Password:'/*]*/ ); ?></label>
                <input class="form-control" name="password" type="password" />
                <label><?php HUBE_Theme::_e( /*T[*/'Language'/*]*/ ); ?>:</label>
                <?php HUBE_Theme::inp ('locale', '', 'select', $languages); ?>
                <br />
                <br />
                <button class="btn btn-block btn-success"><?php HUBE_Theme::_e( /*T[*/'Login &raquo;'/*]*/ ); ?></button>
            </form>
            <ul>
                <li><a href="?page=recover"><?php HUBE_Theme::_e( /*T[*/'Forgot your password?'/*]*/ ); ?></a></li>
                <!--li><a href="?page=register"><?php HUBE_Theme::_e( /*T[*/'Register a new account?'/*]*/ ); ?></a></li-->
            </ul>
        </div>
    </div>
</div>
<?php else : ?>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <a href="" class="hube-logo"><span><?php wp_title (); ?></span></a>
        <div class="hube-rounded hube-translucent hube-padded hube-center hube-player-login">
            <h5><?php HUBE_Theme::_e( /*T[*/'Player Login'/*]*/ ); ?></h5>
            <form action="" method="post">
                <label><?php HUBE_Theme::_e( /*T[*/'Team Password'/*]*/ ); ?>:</label>
                <input class="form-control" name="teampass" type="text" value="" placeholder="" />
<?php if (FALSE) : ?>
                <label><?php HUBE_Theme::_e( /*T[*/'Language'/*]*/ ); ?>:</label>
                <?php HUBE_Theme::inp ('locale', '', 'select', $languages); ?>
<?php endif; ?>
                <br />
                <button class="btn btn-block btn-success"><?php HUBE_Theme::_e( /*T[*/'Login &raquo;'/*]*/ ); ?></button>
            </form>
            <ul></ul>
        </div>
    </div>
</div>
<?php endif;
