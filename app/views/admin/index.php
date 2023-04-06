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
                    <li class="list-active">
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
                    <li class="list-active-type2">
                        <a href="<?= BASEURL; ?>/admin">
                            <div class="i-dashboard"></div>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/admin/datapersonal">
                            <div class="i-collaborator"></div>
                            <div>Data Personal</div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL; ?>/admin/activity">
                            <div class="i-activityfeed"></div>
                            <div>Activity</div>
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
            <div class="content">
                <div class="content-1 fl-colm fl-1">
                    <div class="content-box-1-1">
                        <h1 class="frame0-9">Dashboard</h1>
                        <p class="p-m4-clear text-d font-16px frame0"><?= date("l, d M Y");?></p>
                        <span class="mY-dl-10"></span>
                        <div class="content-box-1-2">
                            <div class="cardview frame1">
                                <div class="iconcardview mY-b-10 stat-color-1">
                                    <div class="i-systemadministrator"></div>
                                </div>
                                <label>Admin</label>
                                <p><?= $data['CheckAdmin']; ?></p>
                                <a class="hyperlink-default" href="#">Details</a>
                            </div>
                            <span class="mX-dl-10"></span>
                            <div class="cardview frame2">
                                <div class="iconcardview mY-b-10 stat-color-2">
                                    <div class="i-administrator"></div>
                                </div>
                                <label>Manager</label>
                                <p><?= $data['CheckManager']; ?></p>
                                <a class="hyperlink-default" href="#">Details</a>
                            </div>
                            <span class="mX-dl-10"></span>
                            <div class="cardview frame3">
                                <div class="iconcardview mY-b-10 stat-color-2">
                                    <div class="i-collaboratormale"></div>
                                </div>
                                <label>Employee</label>
                                <p><?= $data['CheckCashier']; ?></p>
                                <a class="hyperlink-default" href="#">Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="content-box-2-1">
                        <h1 class="frame4">Account Board</h1>
                        <input type="checkbox" name="for-recent-transaction" id="for-recent-transaction">
                        <div class="content-box-2-2 for-tb-recnt-tr padY-10 frame5">
                            <div class="content-box-2-3 padX-10 overfY-auto scrollbar-default">
                                <table class="table-overview">
                                    <thead>
                                        <tr>
                                            <th>Personal ID</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['useraccount'] as $userAll) : ?>
                                            <?php
                                            $status = $data['SearchDataDB']->singleSelectData("status", "personal_status", "WHERE personal_id IN (SELECT personal_id FROM data_personal WHERE personal_id = '" . $userAll['personal_id'] . "')")['status'];
                                            if ($status == 1) {
                                                $status = "Online";
                                            } else {
                                                $status = "Offline";
                                            }
                                            ?>
                                            <tr>
                                                <td data-label="Personal ID"><?= $userAll['personal_id']; ?></td>
                                                <td data-label="Name"><?= $userAll['name']; ?></td>
                                                <td data-label="Username"><?= $userAll['username']; ?></td>
                                                <td data-label="Email"><?= $userAll['email']; ?></td>
                                                <td data-label="Level"><?= $data['SearchDataDB']->singleSelectData("level", "personal_level", "WHERE personal_id IN (SELECT personal_id FROM data_personal WHERE personal_id = '" . $userAll['personal_id'] . "')")['level']; ?></td>
                                                <td data-label="Status" class="dsp-flex fl-center">
                                                    <p class="<?php if ($status == 'Online') {echo 'mrgn-clear font-14px border-rounded-10px bg-accent-color-third color-white status-label';}else{echo 'mrgn-clear font-14px border-rounded-10px stat-color-1 color-white status-label';} ?>"><?= $status; ?></p>
                                                </td>
                                                <td><a class="hyperlink-default" href="<?= BASEURL; ?>/admin/personalinfo/<?= $userAll['id']; ?>">Details</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="btn-text frame5">
                            <label class="dropdown-arrow" for="for-recent-transaction">
                                <div class="i-dropdown"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>