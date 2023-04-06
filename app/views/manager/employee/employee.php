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
                <div class="content-1 fl-colm fl-1">
                    <input type="radio" name="radio-hed" id="r-emp-1" checked>
                    <input type="radio" name="radio-hed" id="r-emp-2">
                    <input type="radio" name="radio-hed" id="r-emp-3">
                    <div class="box">
                        <div class="box-hed-ml">
                            <div class="list-hed scrolling-mini">
                                <label for="r-emp-1">
                                    <div class="emp-text-1"></div>
                                </label>
                                <label for="r-emp-2">
                                    <div class="emp-text-2"></div>
                                </label>
                                <label for="r-emp-3">
                                    <div class="emp-text-3"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="content-box-2-1 fl-1">
                        <div class="content-box-2-2 for-tabs-ml ">
                            <div class="content-box-2-3 scrollbar-default">
                                <div class="mytabs-ml dsp-flex fl-1">
                                    <div class="tab tabs-1 dsp-flex fl-colm fl-1">
                                        <div class="tabs-hed h-60px padX-10">
                                            <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                                <h1>All</h1>
                                            </div>
                                            <div class="content-box-2-4 fl-X-end fl-1">
                                                <div class="g1 dsp-flex fl-X-end sl">
                                                    <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                    <label for="dp-mnuv-1" class="dropdown-icon">
                                                        <div class="i-menuvertical"></div>
                                                    </label>
                                                    <span>More</span>
                                                    <div class="box-droplist">
                                                        <div class="listselect">
                                                            Apa? :v
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-body">
                                            <?php if ($data['CheckAll'] == 0) : ?>
                                                <div class="box-message">
                                                    <div class="icon-message img-searchAccount"></div>
                                                    <p>Data not available :(</p>
                                                </div>
                                            <?php elseif ($data['CheckAll'] > 0) : ?>
                                                <?php if ($data['empAllUnknown'] == !false) : ?>
                                                    <div class="box fl-colm padX-10">
                                                        <div class="subtitle-text">Shift Section</div>
                                                        <div class="font-14px colr-def">There are <span><?= $data['SearchDataDB']->checkAvailableByCondition("personal_id", "personal_shift", "WHERE shift = 'Unknown'"); ?></span> employees with unassigned sessions!</div>
                                                    </div>
                                                    <div class="cb1">
                                                        <?php foreach ($data['empAllUnknown'] as $empAllUnknown) : ?>
                                                            <div class="list-card">
                                                                <div class="card-hed">
                                                                    <div class="logo-card"></div>COFFEE
                                                                    <div class="btn-card">
                                                                        <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                            <span class="dropoff-span"></span>
                                                                        </div>
                                                                        <div class="dropcard hide">
                                                                            <div class="list-drop">
                                                                                <a href="<?= BASEURL; ?>/manager/employeeinfo/<?= $empAllUnknown['id']; ?>">
                                                                                    <div class="i-userfilled"></div>Profile
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-drop">
                                                                                <a href="<?= BASEURL; ?>/manager/newshiftA/<?= $empAllUnknown['personal_id']; ?>">
                                                                                    <div class="i-timesheet"></div>Set to A
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-drop">
                                                                                <a href="<?= BASEURL; ?>/manager/newshiftB/<?= $empAllUnknown['personal_id']; ?>">
                                                                                    <div class="i-timesheet"></div>Set to B
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="cd-bodyfield">
                                                                        <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $empAllUnknown['image'] ?>');"></div>
                                                                    </div>
                                                                    <div class="cd-bodyfield">
                                                                        <label id="cd0"><?= $empAllUnknown['name']; ?></label>
                                                                        <p id="cd1"><?= $data['SearchDataDB']->singleSelectData("level", "personal_level", "WHERE personal_id = '" . $empAllUnknown['personal_id'] . "'")['level']; ?></p>
                                                                        <p id="cd3"><?= $data['SearchDataDB']->singleSelectData("shift", "personal_shift", "WHERE personal_id = '" . $empAllUnknown['personal_id'] . "'")['shift']; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <span class="mY-dl-10 mX-dl-18 border-x"></span>
                                                <?php endif; ?>
                                                <div class="cb1">
                                                    <?php foreach ($data['empAllSession'] as $empAllSession) : ?>
                                                        <div class="list-card">
                                                            <div class="card-hed">
                                                                <div class="logo-card"></div>COFFEE
                                                                <div class="btn-card">
                                                                    <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                        <span class="dropoff-span"></span>
                                                                    </div>
                                                                    <div class="dropcard hide">
                                                                        <div class="list-drop">
                                                                            <a href="<?= BASEURL; ?>/manager/employeeinfo/<?= $empAllSession['id']; ?>">
                                                                                <div class="i-userfilled"></div>Profile
                                                                            </a>
                                                                        </div>
                                                                        <?php
                                                                        $chckShift = $data['SearchDataDB']->singleSelectData("shift", "personal_shift", "WHERE personal_id = '" . $empAllSession['personal_id'] . "'")['shift'];
                                                                        ?>
                                                                        <?php if ($chckShift == 'Shift A') : ?>
                                                                            <div class="list-drop">
                                                                                <a onclick="HiConfirm('Set to B', 'Set shift session to B with Employee ID <?= $empAllSession['personal_id']; ?>.', '/manager/setshiftB/<?= $empAllSession['personal_id']; ?>')">
                                                                                    <div class="i-timesheet"></div>Set to B
                                                                                </a>
                                                                            </div>
                                                                        <?php elseif ($chckShift == 'Shift B') : ?>
                                                                            <div class="list-drop">
                                                                                <a onclick="HiConfirm('Set to A', 'Set shift session to A with Employee ID <?= $empAllSession['personal_id']; ?>.', '/manager/setshiftA/<?= $empAllSession['personal_id']; ?>')">
                                                                                    <div class="i-timesheet"></div>Set to A
                                                                                </a>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cd-bodyfield">
                                                                    <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $empAllSession['image'] ?>');"></div>
                                                                </div>
                                                                <div class="cd-bodyfield">
                                                                    <label id="cd0"><?= $empAllSession['name']; ?></label>
                                                                    <p id="cd1"><?= $data['SearchDataDB']->singleSelectData("level", "personal_level", "WHERE personal_id = '" . $empAllSession['personal_id'] . "'")['level']; ?></p>
                                                                    <p id="cd3"><?= $chckShift; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="tab tabs-2 dsp-flex fl-colm fl-1">
                                        <div class="tabs-hed h-60px padX-10">
                                            <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                                <h1>Shift A</h1>
                                            </div>
                                            <div class="content-box-2-4 fl-X-end fl-1">
                                                <div class="g1 dsp-flex fl-X-end sl">
                                                    <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                    <label for="dp-mnuv-1" class="dropdown-icon">
                                                        <div class="i-menuvertical"></div>
                                                    </label>
                                                    <span>More</span>
                                                    <div class="box-droplist">
                                                        <div class="listselect">
                                                            Apa? :v
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-body">
                                            <?php if ($data['empShiftA'] == false) : ?>
                                                <div class="box-message">
                                                    <div class="icon-message img-searchAccount"></div>
                                                    <p>Data not available :(</p>
                                                </div>
                                            <?php else : ?>
                                                <div class="cb1">
                                                    <?php foreach ($data['empShiftA'] as $empShiftA) : ?>
                                                        <div class="list-card">
                                                            <div class="card-hed">
                                                                <div class="logo-card"></div>COFFEE
                                                                <div class="btn-card">
                                                                    <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                        <span class="dropoff-span"></span>
                                                                    </div>
                                                                    <div class="dropcard hide">
                                                                        <div class="list-drop">
                                                                            <a href="<?= BASEURL; ?>/manager/employeeinfo/<?= $empShiftA['id']; ?>">
                                                                                <div class="i-userfilled"></div>Profile
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cd-bodyfield">
                                                                    <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $empShiftA['image'] ?>');"></div>
                                                                </div>
                                                                <div class="cd-bodyfield">
                                                                    <label id="cd0"><?= $empShiftA['name']; ?></label>
                                                                    <p id="cd1"><?= $empShiftA['personal_id']; ?></p>
                                                                    <p id="cd3"><?= $data['SearchDataDB']->singleSelectData("shift", "personal_shift", "WHERE personal_id = '" . $empShiftA['personal_id'] . "'")['shift']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="tab tabs-3 dsp-flex fl-colm fl-1">
                                        <div class="tabs-hed h-60px padX-10">
                                            <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                                <h1>Shift B</h1>
                                            </div>
                                            <div class="content-box-2-4 fl-X-end fl-1">
                                                <div class="g1 dsp-flex fl-X-end sl">
                                                    <input type="checkbox" name="dp-mnuv" id="dp-mnuv-1">
                                                    <label for="dp-mnuv-1" class="dropdown-icon">
                                                        <div class="i-menuvertical"></div>
                                                    </label>
                                                    <span>More</span>
                                                    <div class="box-droplist">
                                                        <div class="listselect">
                                                            Apa? :v
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs-body">
                                            <?php if ($data['empShiftB'] == false) : ?>
                                                <div class="box-message">
                                                    <div class="icon-message img-searchAccount"></div>
                                                    <p>Data not available :(</p>
                                                </div>
                                            <?php else : ?>
                                                <div class="cb1">
                                                    <?php foreach ($data['empShiftB'] as $empShiftB) : ?>
                                                        <div class="list-card">
                                                            <div class="card-hed">
                                                                <div class="logo-card"></div>COFFEE
                                                                <div class="btn-card">
                                                                    <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                        <span class="dropoff-span"></span>
                                                                    </div>
                                                                    <div class="dropcard hide">
                                                                        <div class="list-drop">
                                                                            <a href="<?= BASEURL; ?>/manager/employeeinfo/<?= $empShiftB['id']; ?>">
                                                                                <div class="i-userfilled"></div>Profile
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="cd-bodyfield">
                                                                    <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $empShiftB['image'] ?>');"></div>
                                                                </div>
                                                                <div class="cd-bodyfield">
                                                                    <label id="cd0"><?= $empShiftB['name']; ?></label>
                                                                    <p id="cd1"><?= $empShiftB['personal_id']; ?></p>
                                                                    <p id="cd3"><?= $data['SearchDataDB']->singleSelectData("shift", "personal_shift", "WHERE personal_id = '" . $empShiftB['personal_id'] . "'")['shift']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/empcardDropdown.js"></script>
    <script src="<?= BASEURL; ?>/js/restrictAlphabet.js"></script>