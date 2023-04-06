    <div class="main-container">
        <input type="checkbox" name="sidebar-toggle" id="sidebar-toggle">
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
                    <li>
                        <a href="<?= BASEURL; ?>/admin/datapersonal">
                            <div class="i-collaborator"></div>
                            <div class="list-title">Data Personal</div>
                        </a>
                    </li>
                    <li class="list-active">
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
                    <li>
                        <a href="<?= BASEURL; ?>/admin/datapersonal">
                            <div class="i-collaborator"></div>
                            <div class="list-title">Data Personal</div>
                        </a>
                    </li>
                    <li class="list-active">
                        <a href="<?= BASEURL; ?>/admin/activity">
                            <div class="i-activityfeed"></div>
                            <div class="list-title">Activity Log</div>
                        </a>
                    </li>
                </ul>
            </div>
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
            <div class="content fl-colm">
                <div class="content-1 fl-1">
                    <div class="content-box-2-1 fl-1">
                        <div class="content-box-2-5 dsp-flex fl-X-sp-beet fl-Y-center">
                            <h1 class="frame0-9">Activity</h1>
                            <div class="box-search-slide box-srch-nonactive">
                                <div class="icon-box-slide">
                                    <div class="i-search2"></div>
                                </div>
                                <form action="" method="post">
                                    <input type="text" id="search_act" placeholder="Search Activities">
                                </form>
                            </div>
                        </div>
                        <div id="act_parent" class="content-box-2-4 padY-10 fl-1 fl-colm scrollbar-default">
                            <?php if (sizeof($data['activityLog']) == 0) : ?>
                                <div class="box dsp-grid fl-center height-calc-200px">
                                    <div class="box-message">
                                        <div class="icon-message img-timeMachine"></div>
                                        <p>No activity logs :(</p>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="content-box-2-5 dsp-flex fl-colm" style="transition: var(--transition-02);">
                                    <div class="content-box-subtitle frame0">
                                        Today
                                    </div>
                                    <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE date = '" . date('d - m - Y') . "'") == 0) : ?>
                                        <div class="box fl-colm frame1">
                                            <span class="mY-dl-10"></span>
                                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">No activity logs.</p>
                                            <span class="mY-dl-10"></span>
                                        </div>
                                    <?php else : ?>
                                        <div class="box-log frame1 box-log-active">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Expand</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act1) : ?>
                                                    <?php if ($act1['date'] == date("d - m - Y")) : ?>
                                                        <?php
                                                        $name = $act1['personal_name'];
                                                        if ($act1['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act1['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act1['time']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $yestr = date('d - m - Y', strtotime(" -1 day"));
                                ?>
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE date = '" . $yestr . "'") > 0) : ?>
                                    <div class="content-box-2-5 dsp-flex fl-colm frame0" style="transition: var(--transition-02);">
                                        <div class="content-box-subtitle frame2">
                                            Yesterday
                                        </div>
                                        <div class="box-log frame2 box-log-nonactive frame2">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Collapse</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act2) : ?>
                                                    <?php if ($act2['date'] == $yestr) : ?>
                                                        <?php
                                                        $name = $act2['personal_name'];
                                                        if ($act2['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act2['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act2['date']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $old1 = date('d - m - Y', strtotime(" -2 day"));
                                $shortold1 = date('d F', strtotime(" -2 day"));
                                ?>
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE date = '" . $old1 . "'") > 0) : ?>
                                    <div class="content-box-2-5 dsp-flex fl-colm frame0" style="transition: var(--transition-02);">
                                        <div class="content-box-subtitle frame3">
                                            <?= "2 days ago"; ?>
                                        </div>
                                        <div class="box-log frame2 box-log-nonactive frame3">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Collapse</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act3) : ?>
                                                    <?php if ($act3['date'] == $old1) : ?>
                                                        <?php
                                                        $name = $act3['personal_name'];
                                                        if ($act3['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act3['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act3['date']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $old2 = date('d - m - Y', strtotime(" -3 day"));
                                $shortold2 = date('d F', strtotime(" -3 day"));
                                ?>
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE date = '" . $old2 . "'") > 0) : ?>
                                    <div class="content-box-2-5 dsp-flex fl-colm frame0" style="transition: var(--transition-02);">
                                        <div class="content-box-subtitle frame4">
                                            <?= "3 days ago"; ?>
                                        </div>
                                        <div class="box-log frame2 box-log-nonactive frame4">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Collapse</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act4) : ?>
                                                    <?php if ($act4['date'] == $old2) : ?>
                                                        <?php
                                                        $name = $act4['personal_name'];
                                                        if ($act4['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act4['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act4['date']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $old3 = date('d - m - Y', strtotime(" -4 day"));
                                $shortold3 = date('d F', strtotime(" -4 day"));
                                ?>
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE date = '" . $old3 . "'") > 0) : ?>
                                    <div class="content-box-2-5 dsp-flex fl-colm frame0" style="transition: var(--transition-02);">
                                        <div class="content-box-subtitle frame5">
                                            <?= "4 days ago"; ?>
                                        </div>
                                        <div class="box-log frame2 box-log-nonactive frame5">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Collapse</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act5) : ?>
                                                    <?php if ($act5['date'] == $old3) : ?>
                                                        <?php
                                                        $name = $act5['personal_name'];
                                                        if ($act5['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act5['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act5['date']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $ago = [
                                    'today' => date('d - m - Y'),
                                    'yesterday' => date('d - m - Y', strtotime(" -1 day")),
                                    'old1' => date('d - m - Y', strtotime(" -2 day")),
                                    'old2' => date('d - m - Y', strtotime(" -3 day")),
                                    'old3' => date('d - m - Y', strtotime(" -4 day")),
                                ];
                                ?>
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "activity_list", "WHERE NOT date = '" . date('d - m - Y') . "' AND NOT date = '" . $yestr . "' AND NOT date = '" . $old1 . "' AND NOT date = '" . $old2 . "' AND NOT date = '" . $old3 . "'") > 0) : ?>
                                    <div class="content-box-2-5 dsp-flex fl-colm frame0" style="transition: var(--transition-02);">
                                        <div class="content-box-subtitle frame5">
                                            A few days ago
                                        </div>
                                        <div class="box-log frame2 box-log-nonactive frame5">
                                            <div class="content-box-2-5 dsp-flex fl-row">
                                                <div class="content-box-2-5 dsp-flex fl-colm fl-X-center">
                                                    <label>Click to Collapse</label>
                                                </div>
                                            </div>
                                            <div class="content-box-2-5 for-msg-log padX-40 mX-t-20 dsp-flex fl-colm">
                                                <?php foreach ($data['activityLog'] as $act6) : ?>
                                                    <?php if (($act6['date'] !== $ago['today']) && ($act6['date'] !== $ago['yesterday']) && ($act6['date'] !== $ago['old1']) && ($act6['date'] !== $ago['old2']) && ($act6['date'] !== $ago['old3'])) : ?>
                                                        <?php
                                                        $name = $act6['personal_name'];
                                                        if ($act6['personal_name'] == $data['sessionData']['primary_data']['name']) {
                                                            $name = "You";
                                                        }
                                                        ?>
                                                        <div class="list-log">
                                                            <div class="message-log">
                                                                <?= str_replace('#', $name, $act6['description']); ?>
                                                            </div>
                                                            <div class="time-log">
                                                                <?= $act6['date']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/boxLogAct.js"></script>
    <script src="<?= BASEURL; ?>/js/boxSearchSlide.js"></script>
    <script src="<?= BASEURL; ?>/js/liveSearchAct.js"></script>