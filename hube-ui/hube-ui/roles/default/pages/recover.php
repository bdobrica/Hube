<?php ?><div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1><?php wp_title (); ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="hube-rounded hube-padded hube-translucent">
            <h3><?php HUBE_Theme::_e( /*T[*/'Password Recovery'/*]*/ ); ?></h3>
            <form action="" method="post">
                <label><?php HUBE_Theme::_e( /*T[*/'E-Mail Address:'/*]*/ ); ?></label>
                <input class="form-control" name="email" value="" placeholder="" type="text" />
                <br />
                <button class="btn btn-block btn-info"><?php HUBE_Theme::_e( /*T[*/'Recover Password &raquo;'/*]*/ ); ?></button>
            </form>
            <ul>
                <li><a href="?page=register"><?php HUBE_Theme::_e( /*T[*/'Register a new account?'/*]*/ ); ?></a></li>
                <li><a href="?page=dashboard"><?php HUBE_Theme::_e( /*T[*/'I\'m already registered!'/*]*/ ); ?></a></li>
            </ul>
        </div>
    </div>
</div>
