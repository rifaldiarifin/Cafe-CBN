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
                    <li class="list-active">
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
                    <li class="list-active">
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
                    <li>
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
                            <li>
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

            <div class="content">
                <div class="box fl-colm padY-b-10px box-shadow-2 border-rounded-20px overf-hide overview-employee frame0-9">
                    <div class="banner-box">
                        <div class="box fl-colm">
                            <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $data['SelectByID']['image']; ?>');" class="avatar-default frame0"></div>
                            <label class="frame1"><?= $data['SelectByID']['name']; ?></label>
                            <p class="frame2">Cashier</p>
                        </div>
                    </div>
                    <div class="box fl-X-betw fl-Y-center h-60px padX-20 frame3">
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
                        <div class="box fl-Y-center pad-10px">
                            <?php
                                $shift = $data['SearchDataDB']->singleSelectData("shift", "personal_shift", "WHERE personal_id = '" . $data['SelectByID']['personal_id'] . "'")['shift'];
                                if (($shift == 'Shift A') || ($shift == 'Shift B')) {
                                    $expl = explode(" ", $shift)[1];
                                }
                            ?>
                            <p class="font-14px color-disabled mX-r-10">Shift</p>
                            <p class="mrgn-clear text-box font-14px border-rounded-10px bg-accent-color"><?= $expl; ?></p>
                        </div>
                    </div>
                    <div class="box fl-colm padX-20 padY-b-10px">
                        <div class="textview-trnsp frame3">
                            <div class="tv-label">
                                Employee ID
                            </div>
                            <div class="tv-field">
                                <?= $data['SelectByID']['personal_id']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame4">
                            <div class="tv-label">
                                Username
                            </div>
                            <div class="tv-field">
                                <?= $data['SelectByID']['username']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame4">
                            <div class="tv-label">
                                Email
                            </div>
                            <div class="tv-field frame5">
                                <?= $data['SelectByID']['email']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame5">
                            <div class="tv-label">
                                Phone
                            </div>
                            <div class="tv-field">
                                <?= $data['SelectByID']['phone']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame5">
                            <div class="tv-label">
                                Address
                            </div>
                            <div class="tv-field frame5">
                                <?= $data['SelectByID']['address']; ?>
                            </div>
                        </div>
                        <div class="textview-trnsp frame5">
                            <div class="tv-label">
                                Gender
                            </div>
                            <div class="tv-field">
                                <?= $data['SearchDataDB']->singleSelectData("gender", "personal_gender", "WHERE personal_id = '" . $data['SelectByID']['personal_id'] . "'")['gender']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/empcardDropdown.js"></script>
    <script src="<?= BASEURL; ?>/js/restrictAlphabet.js"></script>