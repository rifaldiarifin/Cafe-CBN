    <div class="container-signin fl-center-grid">
        <div class="box-grid form-signin">
            <div class="box fl-center fl-colm intro">
                <div class="logo-box z-1 mX-l-10px">
                    <div class="companyLogo"></div>
                </div>
                <label class="z-1 mX-l-10px">COFFEE<br><span>Cafe <span>Bisa</span> Ngopi</span></label>
            </div>
            <div class="box fl-center form">
                <form class="box fl-colm z-1" action="<?= BASEURL; ?>/home/checkdata" method="post">
                    <label>Signin</label>
                    <div class="textfield-default">
                        <div class="tf-field">
                            <div class="i-user-filled"></div>
                            <input type="text" name="user" id="user" placeholder="Username" autofocus autocomplete="off">
                        </div>
                    </div>
                    <div class="textfield-default">
                        <div class="tf-field">
                            <div class="i-password-filled"></div>
                            <input type="password" name="pass" id="pass" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="box-end">
                        <div class="box fl-rows fl-X-center">
                            <button type="submit" class="btn-icon-text btn-clear">
                                <p>SIGNIN</p>
                            </button>
                        </div>
                    </div>
                    <?php FlashFormMessage::formFlash();?>
                </form>
            </div>
        </div>
    </div>