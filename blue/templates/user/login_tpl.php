<?php $backgroud_admin = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('backgroud-adminlogin', 'photo_static'), 'fetch', 7200);
?>
<div class="login-box login_blueweb">
    <div class="img_loginadmin">
        <img class="" src="../thumbs/600x500x1/upload/photo/<?= $backgroud_admin['photo'] ?>" alt="<?= $v['name' . $lang] ?>"
            title="Blueweb.com.vn" />
    </div>
    <div class="gr_loginn">
        <div class="gr_toploginf">
            <div class="title_bluewf">BLUE<span>WEB</span></div>
            <a href="../" target="_blank" title="Xem website">
                <div class="btn_vtrchu">
                    <div class="txt_quayve">Về trang chủ</div>
                    <img src="assets/images/icontrangchu.png" alt="" class="icontrangchu">
                </div>
            </a>
        </div>
        <div class="gr_titlehethong">
            <img src="assets/images/security.png" alt="" class="security">
            <div class="title_loginhethong">Đăng Nhập Hệ Thống</div>
            <div class="mien"><?= $_SERVER["SERVER_NAME"] ?></div>
        </div>
        <div class="card-body login-card-body">
            <form enctype="multipart/form-data">
                <div class=" mb-3 input_loginf">
                    <img src="assets/images/user_l.png" alt="" class="user_l">
                    <input type="text" class="form-control text-sm" name="username" id="username"
                        placeholder="<?= taikhoan ?> *" autocomplete="off">
                </div>
                <div class=" mb-3 input_loginf">
                    <img src="assets/images/pass_l.png" alt="" class="user_l">
                    <input type="password" class="form-control text-sm" name="password" id="password"
                        placeholder="<?= matkhau ?> *" autocomplete="off">
                    <div class="input-group-append">
                        <div class=" show-password">
                            <span class="fas fa-eye"></span>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-block btn-login text-sm butttonlogin">
                    <div class="sk-chase d-none">
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                    </div>
                    <span class="span-mother">
                        <span>Đ</span>
                        <span>Ă</span>
                        <span>N</span>
                        <span>G</span>
                        <span> </span>
                        <span>N</span>
                        <span>H</span>
                        <span>Ậ</span>
                        <span>P</span>
                    </span>
                    <span class="span-mother2">
                        <span>Đ</span>
                        <span>Ă</span>
                        <span>N</span>
                        <span>G</span>
                        <span> </span>
                        <span>N</span>
                        <span>H</span>
                        <span>Ậ</span>
                        <span>P</span>
                    </span>
                </button>
                <div class="alert my-alert alert-login d-none text-center text-sm p-2 mb-0 mt-2" role="alert"></div>
                <div class="login-copyright text-sm">Powered by <a href="https://blueweb.com.vn/" target="_blank"
                        title="Blueweb.com.vn">Blueweb.com.vn</a></div>
            </form>
        </div>
    </div>
</div>