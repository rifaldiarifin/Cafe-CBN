<div class="box-hiprompt hide">
    <div class="hiprompt-popup">
        <div onclick="alertHidePrompt()" class="close"></div>
        <div class="icon-prompt verifiedAccount">
            <div class="icon"></div>
        </div>
        <label>Personal Info</label>
        <p>Confirm first if this is you.</p>
        <div class="list-box-field">
            <div class="tf-default">
                <div class="icon-field">
                    <div class="i-passwordfill"></div>
                </div>
                <div class="box-field">
                    <input class="field1" type="password" value="" autocomplete="off" required>
                    <span>Password</span>
                </div>
            </div>
        </div>
        <div id="message-prompt" class="alert-form-message" style="display: none;">
            <div class="logo warning"></div>
            Wrong Password
        </div>
        <div class="end-prompt">
            <button class="button submit">Confirm</button>
        </div>
    </div>
</div>

<div class="main-container">
    <input type="checkbox" name="sidebar-toggle" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sb-header">
            <div class="logo-img">
                <div class="coffeeCupLogo"></div>
            </div>
            <label>COFFEE</label>
            <p>CAFE BISA NGOPI</p>
        </div>
        <div class="list-menu">
            <ul>
                <li>
                    <a href="<?= BASEURL; ?>/manager">
                        <div class="i-dashboard"></div>
                        <div class="list-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/productlist">
                        <div class="i-openbook"></div>
                        <div class="list-title">Menu List</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/employee">
                        <div class="i-collaborator"></div>
                        <div class="list-title">Employee</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/transaction">
                        <div class="i-purchase"></div>
                        <div class="list-title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/activity">
                        <div class="i-activityfeed"></div>
                        <div class="list-title">Activity</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-type2 bar-type2-nonactive">
        <div class="sb-header-type2">
            <div class="logo-img">
                <div class="coffeeCupLogo"></div>
            </div>
            <label>COFFEE</label>
            <p>CAFE BISA NGOPI</p>
        </div>
        <div class="list-menu-type2">
            <ul>
                <li>
                    <a href="<?= BASEURL; ?>/manager">
                        <div class="i-dashboard"></div>
                        <div class="list-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/productlist">
                        <div class="i-openbook"></div>
                        <div class="list-title">Menu List</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/employee">
                        <div class="i-collaborator"></div>
                        <div class="list-title">Employee</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/transaction">
                        <div class="i-purchase"></div>
                        <div class="list-title">Transaction</div>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/manager/activity">
                        <div class="i-activityfeed"></div>
                        <div class="list-title">Activity</div>
                    </a>
                </li>
                <li class="list-active-type2">
                    <a href="<?= BASEURL; ?>/manager/settings">
                        <div class="i-settings"></div>
                        <div class="list-title">Settings</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="btn-sidebar-type2 btn-type2-hide">
        <div class="i-menu2 i-menu2-active"></div>
    </div>
    <div class="container">

        <div class="header beetw">
            <div class="btn-for-sidebar">
                <label for="sidebar-toggle">
                    <div class="i-menu2"></div>
                </label>
            </div>
            <div class="searchpage-classic hide">
                <form action="" method="post">
                    <div class="i-search"></div>
                    <input type="text" name="search" id="search" placeholder="Search in Dashboard">
                </form>
            </div>
            <div class="navbar">
                <div class="nav-list">
                    <ul>
                        <li class="nav-active">
                            <a href="<?= BASEURL; ?>/manager/settings">
                                <div class="i-settings"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="my-profile profile-nonactive" id="dropdownParent">
                    <div class="avatar-prof" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');">
                    </div>
                    <div class="name-prof">
                        <?= $data['sessionData']['primary_data']['name']; ?>
                    </div>
                    <div class="dropdown-prof">
                        <div>
                            <div class="i-dropdown"></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-prof-menu hide" id="dropdownMenu">
                    <label>Personal</label>
                    <div class="box-prof">
                        <div class="avatar-prof-2" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');">
                        </div>
                        <div class="info-prof-2">
                            <div class="name-prof-2">
                                <?= $data['sessionData']['primary_data']['name']; ?>
                            </div>
                            <div class="status-prof-small">
                                <?= $data['sessionData']['secondary_data']['level']; ?>
                            </div>
                        </div>
                    </div>
                    <p>See your detailed profile in settings.</p>
                    <div class="box">
                        <a href="<?= BASEURL; ?>/manager/settings">
                            <button class="btntext-default">
                                Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content fl-colm">
            <div class="content-1 fl-1">
                <div class="content-box-2-1 fl-1">
                    <h1 class="frame0-9">Settings</h1>
                    <div class="content-box-2-2 fl-1 pad-20px">
                        <div class="tab-fixd" id="tabFixd1">
                            <h1 class="subtitle-text mrgn-clear mY-b-10 frame0">Profile</h1>
                            <div class="box-grid border-rounded-10px box-shadow-1 profile-box mY-b-10 frame1">
                                <div class="box fl-center prof-avatar">
                                    <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['sessionData']['primary_data']['image']; ?>');" class="circle-img-default"></div>
                                </div>
                                <div class="box fl-colm prof-detail fl-X-center">
                                    <label class="font-16px font-weg-600 colr-def mY-b-10"><?= $data['sessionData']['primary_data']['name']; ?></label>
                                    <p class="font-14px color-disabled font-weg-500 mrgn-clear"><?= $data['sessionData']['secondary_data']['level']; ?></p>
                                </div>
                                <!-- <div class="box fl-center prof-more">
                                    <div class="btn-icon">
                                        <div class="i-edit"></div>
                                    </div>
                                    <div class="dsp-flex fl-center dropdown-parrent dropdown-stndby">
                                            <div class="i-humburger"></div>
                                            <div class="dropdown-default border-rounded-10px">
                                                <div class="dp-list-default border-rounded-10px">
                                                    <div class="i-image2"></div>
                                                    <p class="font-14px mrgn-clear colr-def">Change Picture</p>
                                                </div>
                                            </div>
                                        </div>
                                </div> -->
                            </div>
                            <div id="personalinfo" class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame2">
                                <div class="dp-icon">
                                    <div class="i-userMenuMale"></div>
                                </div>
                                <div class="dp-title">
                                    Personal Info
                                </div>

                                <div class="dp-btn key-option" style="display: none;">
                                    <div class="i-padlock"></div>
                                </div>
                                <div class="dp-btn dp-option" style="display: none;">
                                    <div class="i-expand-arrow"></div>
                                </div>

                                <div onclick="HiPrompt('Personal Info', 'Confirm first if this is you', '/manager/openprofile')" class="dp-btn key-option lock">
                                    <div class="i-lock"></div>
                                </div>

                            </div>
                            <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                                <div class="dp-box-fit pad-10px">
                                    <div class="textview-default">
                                        <div class="tv-label">Username</div>
                                        <div class="tv-field">
                                            <div class="i-maleuser"></div>
                                            <p class="mrgn-clear" id="user_prof"></p>
                                        </div>
                                    </div>
                                    <div class="textview-default">
                                        <div class="tv-label">Password</div>
                                        <div class="tv-field">
                                            <div class="i-passwordfill"></div>
                                            <p class="mrgn-clear" id="pass_prof"></p>
                                        </div>
                                    </div>
                                    <div class="textview-default">
                                        <div class="tv-label">Email</div>
                                        <div class="tv-field">
                                            <div class="i-email"></div>
                                            <p class="mrgn-clear" id="email_prof"></p>
                                        </div>
                                    </div>
                                    <div class="textview-default">
                                        <div class="tv-label">Phone</div>
                                        <div class="tv-field">
                                            <div class="i-phone"></div>
                                            <p class="mrgn-clear" id="phone_prof"></p>
                                        </div>
                                    </div>
                                    <div class="textview-default">
                                        <div class="tv-label">Birthday</div>
                                        <div class="tv-field">
                                            <div class="i-gift"></div>
                                            <p class="mrgn-clear" id="birth_prof"></p>
                                        </div>
                                    </div>
                                    <div class="textview-default">
                                        <div class="tv-label">Address</div>
                                        <div class="tv-field">
                                            <div class="i-location"></div>
                                            <p class="mrgn-clear" id="location_prof"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame3">
                                <div class="dp-icon">
                                    <div class="i-logout"></div>
                                </div>
                                <div class="dp-title">
                                    Sign Out
                                </div>
                                <div id="btnsignout" onclick="HiConfirm('Signout', 'Are you sure to exit?', '/manager/signout')" class="dp-btn dp-option">
                                    <div class="i-expand-arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-fixd" id="tabFixd2">
                            <h1 class="subtitle-text mrgn-clear mY-b-10 frame4">Appearance</h1>
                            <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame4">
                                <div class="dp-icon">
                                    <div class="i-paintBrush"></div>
                                </div>
                                <div class="dp-title">
                                    Theme
                                </div>
                                <div class="dp-btn dp-option">
                                    <div class="i-expand-arrow"></div>
                                </div>
                            </div>
                            <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                                <div class="dp-box-fit pad-20px">
                                    <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Choose your theme</p>
                                    <div class="box-grid gd-rpt-colm-180px gd-gap-20px post-reltv">
                                        <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'currentSystem') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                                <div class="bgWindowLightDark"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Current System</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'light') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                                <div class="bgWindowLight"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Light Mode</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-theme <?php if ($data['sessionData']['config_data']['theme'] == 'dark') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                                <div class="bgWindowDark"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Dark Mode</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame5">
                                <div class="dp-icon">
                                    <div class="i-paintPalette"></div>
                                </div>
                                <div class="dp-title">
                                    Color
                                </div>
                                <div class="dp-btn dp-option">
                                    <div class="i-expand-arrow"></div>
                                </div>
                            </div>
                            <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                                <div class="dp-box-fit pad-20px">
                                    <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Choose your accent color</p>
                                    <div class="box-grid gd-rpt-colm-180px gd-gap-20px post-reltv">
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'coffeeBeans') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card">
                                                <div class="bgCoffeeBeans"></div>
                                            </div>
                                            <div class="box fl-center preview-text">
                                                <p class="mrgn-clear font-13px colr-def">Coffee Beans</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'greenMint') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                                <div class="bgGreenMint"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Green Mint</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'freshMango') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                                <div class="bgFreshMango"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Fresh Mango</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'peanut') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                                <div class="bgPeanut"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Peanut</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'darkWood') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                                <div class="bgDarkWood"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Dark Wood</p>
                                            </div>
                                        </div>
                                        <div class="card-img-select cardgroup-accentcolor <?php if ($data['sessionData']['config_data']['color'] == 'modern') echo 'card-selection'; ?>">
                                            <div class="box fl-center padY-t-10px padX-l-10px padX-r-10px">
                                                <div class="bgModern"></div>
                                            </div>
                                            <div class="box fl-center">
                                                <p class="mrgn-clear font-13px colr-def">Modern</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-fixd" id="tabFixd3">
                            <h1 class="subtitle-text mrgn-clear mY-b-10 frame5">Display & Performance</h1>
                            <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame5">
                                <div class="dp-icon">
                                    <div class="i-bursts"></div>
                                </div>
                                <div class="dp-title">
                                    Animation
                                </div>
                                <div class="dp-btn dp-option">
                                    <div class="i-expand-arrow"></div>
                                </div>
                            </div>
                            <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                                <div class="dp-box-fit pad-20px">
                                    <p class="font-16px font-weg-500 colr-def mrgn-clear mY-b-10">Animation on screen</p>
                                    <div class="range-horizon-select mY-t-10">
                                        <!-- <div class="slider-value">
                                                <span>Normal</span>
                                            </div> -->
                                        <div class="slider-field">
                                            <!-- <div class="valueLeft">Off</div> -->
                                            <?php
                                            $confTrans = $data['sessionData']['config_data']['transition'];
                                            if ($confTrans == "disabled") {
                                                $confTrans = "0";
                                            } elseif ($confTrans == "slowest") {
                                                $confTrans = "1";
                                            } elseif ($confTrans == "slow") {
                                                $confTrans = "2";
                                            } elseif ($confTrans == "normal") {
                                                $confTrans = "3";
                                            } elseif ($confTrans == "fast") {
                                                $confTrans = "4";
                                            } elseif ($confTrans == "fastest") {
                                                $confTrans = "5";
                                            }
                                            ?>
                                            <input type="range" min="0" max="5" value="<?= $confTrans; ?>" step="1" name="" id="animationControl">
                                            <!-- <div class="valueRight">Fastest</div> -->
                                            <div class="box mY-t-10 fl-X-sp-beet">
                                                <span>Off</span>
                                                <span>Slowest</span>
                                                <span>Slow</span>
                                                <span>Normal</span>
                                                <span>Fast</span>
                                                <span>Fastest</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dp-icon-text-auto-atr border-rounded-10px dp-itaa-off frame5">
                                <div class="dp-icon">
                                    <div class="i-imageGallery"></div>
                                </div>
                                <div class="dp-title">
                                    Image Resolution
                                </div>
                                <div class="dp-btn dp-option">
                                    <div class="i-expand-arrow"></div>
                                </div>
                            </div>
                            <div class="dp-box border-rounded-10px dp-box-personal-off hide">
                                <div class="dp-box-fit pad-20px">
                                    <p class="font-16px font-weg-500 colr-def mrgn-clear  color-disabled">Comming Soon :)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= BASEURL; ?>/js/cardSelect.js"></script>
<script src="<?= BASEURL; ?>/js/dropDownDefault.js"></script>
<script src="<?= BASEURL; ?>/js/dpAutoAtr.js"></script>
<script src="<?= BASEURL; ?>/js/cardSettingsAppearance.js"></script>
<script src="<?= BASEURL; ?>/js/rangeDisplayPerfomance.js"></script>