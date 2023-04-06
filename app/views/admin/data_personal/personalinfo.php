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
                        <a href="<?= BASEURL; ?>/admin">
                            <div class="i-dashboard"></div>
                            <div class="list-title">Dashboard</div>
                        </a>
                    </li>
                    <li class="list-active">
                        <a href="<?= BASEURL; ?>/admin/datapersonal">
                            <div class="i-collaborator"></div>
                            <div class="list-title">Data Personal</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/admin/activity">
                            <div class="i-activityfeed"></div>
                            <div class="list-title">Activity Log</div>
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
                        <a href="<?= BASEURL; ?>/admin">
                            <div class="i-dashboard"></div>
                            <div class="list-title">Dashboard</div>
                        </a>
                    </li>
                    <li class="list-active">
                        <a href="<?= BASEURL; ?>/admin/datapersonal">
                            <div class="i-collaborator"></div>
                            <div class="list-title">Data Personal</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/admin/activity">
                            <div class="i-activityfeed"></div>
                            <div class="list-title">Activity Log</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/admin/settings">
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
                        <input type="text" name="search" id="search" placeholder="Search in Employee">
                    </form>
                </div>
                <div class="navbar">
                    <div class="nav-list">
                        <ul>
                            <li>
                                <a href="<?= BASEURL; ?>/admin/settings">
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
                            <a href="<?= BASEURL; ?>/admin/settings">
                                <button class="btntext-default">
                                    Profile
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="box-grid profile fl-1">
                    <div class="box fl-colm padY-b-10px box-shadow-2 border-rounded-20px overf-hide overview-personal frame0-9">
                        <div class="banner-box">
                            <div class="box fl-colm">
                                <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['SelectByID']['image'] ?>');" class="avatar-default frame0"></div>
                                <label class="frame1"><?= $data['SelectByID']['name'] ?></label>
                                <p class="frame1"><?= $levelUser =  $data['SingleSelectData']->singleSelectData("level", "personal_level", "WHERE personal_id IN (SELECT personal_id FROM data_personal WHERE personal_id = '" . $data['SelectByID']['personal_id'] . "')")['level']; ?></p>
                            </div>
                        </div>
                        <div class="box fl-X-betw fl-Y-center h-60px padX-20 frame2">
                            <div class="box fl-Y-center pad-10px">
                                <?php
                                $chck = $data['SearchDataDB']->singleSelectData("status", "personal_status", "WHERE personal_id = '" . $data['SelectByID']['personal_id'] . "'")['status'];
                                $colIndic = "stat-color-1";
                                $stat = "Offline";
                                if ($chck == '1') {
                                    $stat = "Online";
                                    $colIndic = "bg-accent-color-third";
                                }
                                ?>
                                <p class="font-14px color-disabled mX-r-10">Status</p>
                                <p class="mrgn-clear text-box font-14px border-rounded-10px <?= $colIndic;?>"><?= $stat;?></p>
                            </div>
                        </div>
                        <div class="box fl-colm padX-20 padY-b-10px">
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    ID Personal
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['personal_id']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    Name
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['name']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    Username
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['username']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    email
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['email']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    phone
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['phone']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    address
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['address']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    Birthday
                                </div>
                                <div class="tv-field">
                                    <?= $data['SelectByID']['birth']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    Gender
                                </div>
                                <div class="tv-field">
                                    <?= $genderUser = $data['SingleSelectData']->singleSelectData("gender", "personal_gender", "WHERE personal_id IN (SELECT personal_id FROM data_personal WHERE personal_id = '" . $data['SelectByID']['personal_id'] . "')")['gender']; ?>
                                </div>
                            </div>
                            <div class="textview-trnsp frame2">
                                <div class="tv-label">
                                    level
                                </div>
                                <div class="tv-field">
                                    <?= $levelUser; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box fl-colm pad-20px box-shadow-2 border-rounded-20px overf-hide personal-info frame4">
                        <div class="subtitle-text">
                            Personal Info
                        </div>
                        <span class="mY-dl-10"></span>
                        <form onsubmit="allowsubmit()" action="<?= BASEURL; ?>/admin/editaccount" method="post" enctype="multipart/form-data">
                            <div class="list-box-field frame5">
                                <input type="hidden" value="<?= $data['SelectByID']['personal_id']; ?>" name="default_pid" id="id">
                                <div class="label-field">
                                    Name
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-ballpointpen"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="new_name" id="new_name" value="<?= $data['SelectByID']['name']; ?>" autocomplete="off" required>
                                        <span>Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Username
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-maleuser"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="new_user" id="new_user" value="<?= $data['SelectByID']['username']; ?>" autocomplete="off" required>
                                        <span>Username</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Email
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-email"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="new_email" id="new_email" value="<?= $data['SelectByID']['email']; ?>" autocomplete="off" required>
                                        <span>Email</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Phone
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-phone"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="new_phone" maxlength="15" id="new_phone" value="<?= $data['SelectByID']['phone']; ?>" onkeypress="return restrictAlphabets(event)" autocomplete="off" required>
                                        <span>Phone</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Address
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-location"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="text" name="new_address" id="new_address" value="<?= $data['SelectByID']['address']; ?>" autocomplete="off" required>
                                        <span>Address</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Birthday
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-gift"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="date" name="new_birth" id="new_birth" autocomplete="off">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="radio-box-manual fl-colm frame5">
                                <?php if ($genderUser == "Male") : ?>
                                    <input type="radio" name="new_gender" value="Male" id="option1-mp" class="hide" checked>
                                    <input type="radio" name="new_gender" value="Female" id="option2-mp" class="hide">
                                <?php elseif ($genderUser == "Female") : ?>
                                    <input type="radio" name="new_gender" value="Male" id="option1-mp" class="hide">
                                    <input type="radio" name="new_gender" value="Female" id="option2-mp" class="hide" checked>
                                <?php endif; ?>
                                <div class="label-field mY-b-20">
                                    Gender
                                </div>
                                <div class="box fl-wrap">
                                    <label for="option1-mp" class="box-radio">
                                        <div class="i-male"></div>
                                        Male
                                    </label>
                                    <label for="option2-mp" class="box-radio">
                                        <div class="i-female"></div>
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="radio-box-manual fl-colm frame5">
                                <?php if ($levelUser == "Admin") : ?>
                                    <input type="radio" name="new_level" value="Admin" id="option1-lvl" class="hide" checked>
                                    <input type="radio" name="new_level" value="Manager" id="option2-lvl" class="hide">
                                    <input type="radio" name="new_level" value="Cashier" id="option3-lvl" class="hide">
                                <?php elseif ($levelUser == "Manager") : ?>
                                    <input type="radio" name="new_level" value="Admin" id="option1-lvl" class="hide">
                                    <input type="radio" name="new_level" value="Manager" id="option2-lvl" class="hide" checked>
                                    <input type="radio" name="new_level" value="Cashier" id="option3-lvl" class="hide">
                                <?php elseif ($levelUser == "Cashier") : ?>
                                    <input type="radio" name="new_level" value="Admin" id="option1-lvl" class="hide">
                                    <input type="radio" name="new_level" value="Manager" id="option2-lvl" class="hide">
                                    <input type="radio" name="new_level" value="Cashier" id="option3-lvl" class="hide" checked>
                                <?php endif; ?>
                                <div class="label-field mY-b-20">
                                    Level
                                </div>
                                <div class="box fl-wrap">
                                    <label for="option1-lvl" class="box-radio">
                                        <div class="i-systemadministrator"></div>
                                        Admin
                                    </label>
                                    <label for="option2-lvl" class="box-radio">
                                        <div class="i-administrator"></div>
                                        Manager
                                    </label>
                                    <label for="option3-lvl" class="box-radio">
                                        <div class="i-collaboratormale"></div>
                                        Cashier
                                    </label>
                                </div>
                            </div>
                            <div class="list-box-field frame5">
                                <div class="label-field">
                                    Password
                                </div>
                                <div class="tf-default">
                                    <div class="icon-field">
                                        <div class="i-passwordfill"></div>
                                    </div>
                                    <div class="box-field">
                                        <input type="password" name="new_pass" id="new_pass" placeholder="Password" autocomplete="off">
                                        <span>Password</span>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box-field mY-t-10 frame5" id="img-box-field">
                                <div class="label-field">
                                    Profile Photo
                                </div>
                                <div class="bf-default fl-Y-center">
                                    <div class="imgf-default mX-r-10" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['SelectByID']['image']; ?>');">
                                        <label for="img" class="btnsquare-field">
                                            <div class="i-image"></div>
                                        </label>
                                    </div>
                                    <p id="fileimg" style="overflow-wrap: break-word; max-width: 150px;" class="font-14px font-weg-500 color-disabled mrgn-clear"><?= $data['SelectByID']['image']; ?></p>
                                    <input type="file" name="image" id="img" hidden>
                                </div>
                            </div>
                            <div class="end-box frame5" id="endb">
                                <button type="submit" class="btn-icon-text btn-clear">
                                    <p>Save changes</p>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/empcardDropdown.js"></script>
    <script src="<?= BASEURL; ?>/js/restrictAlphabet.js"></script>
    <script src="<?= BASEURL; ?>/js/previewImage.js"></script>