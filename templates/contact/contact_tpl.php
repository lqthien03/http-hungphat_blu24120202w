<div class="content-main wrap-content">
    <div class="contact-article row">
        <div class="contact-text col-lg-6">
            <div class="content_contactus"><?= htmlspecialchars_decode($lienhe['content' . $lang]) ?></div>
            <div class="product-description">
                <?php foreach ($cauhoi as $k => $v) { ?>
                    <div class="product-tab">
                        <div class="product-tab-title">
                            <h2><?= $v['name' . $lang] ?></h2>
                        </div>
                        <div class="product-tab-description" style="display: none;">
                            <div class="product-tab-description_detail">
                                <?= htmlspecialchars_decode($v['content' . $lang]) ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class=" col-lg-6  position-relative">
            <div class="gr_pocontactus">
                <form class="contact-form validation-contactcontact_us" novalidate method="post" action="" enctype="multipart/form-data">
                    <h2 class="text-ani-item">Liên hệ</h2>
                    <div class="row-20">
                        <div class="contact-input col-sm-12 col-20">
                            <div class="form-floating form-floating-cus">
                                <input type="text" name="dataContact[fullname]" class="form-control text-sm" id="fullname-contact" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required>
                                <label for="fullname-contact"><?= hoten ?></label>
                            </div>
                            <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                        </div>
                        <div class="contact-input col-sm-12 col-20">
                            <div class="form-floating form-floating-cus">
                                <input type="number" name="dataContact[phone]" class="form-control text-sm" id="phone-contact" placeholder="<?= dienthoai ?>" value="<?= $flash->get('phone') ?>" required>
                                <label for="phone-contact"><?= dienthoai ?></label>
                            </div>
                            <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                        </div>
                        <div class="contact-input col-sm-12 col-20">
                            <div class="form-floating form-floating-cus">
                                <input type="text" class="form-control text-sm" id="address-contact" name="dataContact[address]" placeholder="<?= diachi ?>" value="<?= $flash->get('address') ?>" required />
                                <label for="address-contact"><?= diachi ?></label>
                            </div>
                            <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                        </div>
                        <div class="contact-input col-sm-12 col-20">
                            <div class="form-floating form-floating-cus">
                                <input type="email" class="form-control text-sm" id="email-contact" name="dataContact[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                                <label for="email-contact">Email</label>
                            </div>
                            <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                        </div>
                    </div>
                    <div class="contact-input">
                        <div class="form-floating form-floating-cus">
                            <input type="text" class="form-control text-sm" id="subject-contact" name="dataContact[subject]" placeholder="<?= chude ?>" value="<?= $flash->get('subject') ?>" required />
                            <label for="subject-contact"><?= chude ?></label>
                        </div>
                        <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
                    </div>
                    <div class="contact-input">
                        <div class="form-floating form-floating-cus">
                            <textarea class="form-control text-sm" id="content-contact" name="dataContact[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>
                            <label for="content-contact"><?= noidung ?></label>
                        </div>

                        <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                    </div>
                    <button type="submit" class="gr_btniconsubmit" name="submit-contact">
                        <span>Gửi thông tin</span>
                        <div class="icon-svg"><svg viewBox="0 0 200 200">
                                <path fill="currentColor" d="M100,68.3c-17.5,0-31.7,14.2-31.7,31.7s14.2,31.7,31.7,31.7s31.7-14.2,31.7-31.7S117.5,68.3,100,68.3z M100.7,114v-12.4 H85.3v-2.9h15.4V86.1l14,14L100.7,114z">
                                </path>
                                <circle class="before" fill="none" stroke="currentColor" cx="100" cy="100" r="90">
                                </circle>
                                <circle class="after" fill="none" stroke="currentColor" cx="100" cy="100" r="90">
                                </circle>
                            </svg>
                        </div>
                    </button>
                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="contact-map"><?= $func->decodeHtmlChars($optsetting['coords_iframe']) ?></div>