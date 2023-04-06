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
                        <div>Dashboard</div>
                    </a>
                </li>
                <li class="list-active-type2">
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
                <input type="radio" name="radio-hed" class="hide" id="r-dtp-1" checked>
                <input type="radio" name="radio-hed" class="hide" id="r-dtp-2">
                <input type="radio" name="radio-hed" class="hide" id="r-dtp-3">
                <input type="radio" name="radio-hed" class="hide" id="r-dtp-4">
                <input type="radio" name="radio-hed" class="hide" id="r-dtp-5">
                <div class="box">
                    <div class="box-hed-ml">
                        <div class="list-hed scrolling-mini">
                            <label for="r-dtp-1">
                                <div label-tab="All" class="label-tabs"></div>
                            </label>
                            <label for="r-dtp-2">
                                <div label-tab="Admin" class="label-tabs"></div>
                            </label>
                            <label for="r-dtp-3">
                                <div label-tab="Manager" class="label-tabs"></div>
                            </label>
                            <label for="r-dtp-4">
                                <div label-tab="Cashier" class="label-tabs"></div>
                            </label>
                            <label for="r-dtp-5">
                                <div label-tab="New" class="label-tabs"></div>
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
                                            <div class="cb1">
                                                <?php foreach ($data['useraccount'] as $userAll) : ?>
                                                    <div class="list-card">
                                                        <div class="card-hed">
                                                            <div class="logo-card"></div>COFFEE
                                                            <div class="btn-card">
                                                                <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                    <span class="dropoff-span"></span>
                                                                </div>
                                                                <div class="dropcard hide">
                                                                    <div class="list-drop">
                                                                        <a href="<?= BASEURL; ?>/admin/personalinfo/<?= $userAll['id']; ?>">
                                                                            <div class="i-userfilled"></div>Profile
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a href="#">
                                                                            <div class="i-pinfilled"></div>Marks
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a onclick="HiConfirm('Delete account', 'Are you sure delete this account?, this will be permanent.', '/admin/deleteaccount/<?= $userAll['id']; ?>')">
                                                                            <div class="i-trashfilled"></div>Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="cd-bodyfield">
                                                                <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $userAll['image'] ?>');"></div>
                                                            </div>
                                                            <div class="cd-bodyfield">
                                                                <label id="cd0"><?= $userAll['name']; ?></label>
                                                                <p id="cd3"><?= $data['SearchDataDB']->singleSelectData("level", "personal_level", "WHERE personal_id IN (SELECT personal_id FROM data_personal WHERE personal_id = '" . $userAll['personal_id'] . "')")['level']; ?></p>
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
                                            <h1>Admin</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-2">
                                                <label for="dp-mnuv-2" class="dropdown-icon">
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
                                        <?php if ($data['CheckAdmin'] == 0) : ?>
                                            <div class="box-message">
                                                <div class="icon-message img-searchAccount"></div>
                                                <p>Data not available :(</p>
                                            </div>
                                        <?php elseif ($data['CheckAdmin'] > 0) : ?>
                                            <div class="cb1">
                                                <?php foreach ($data['useradmin'] as $userAdmin) : ?>
                                                    <div class="list-card">
                                                        <div class="card-hed">
                                                            <div class="logo-card"></div>COFFEE
                                                            <div class="btn-card">
                                                                <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                    <span class="dropoff-span"></span>
                                                                </div>
                                                                <div class="dropcard hide">
                                                                    <div class="list-drop">
                                                                        <a href="<?= BASEURL; ?>/admin/personalinfo/<?= $userAdmin['id']; ?>">
                                                                            <div class="i-userfilled"></div>Profile
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a href="#">
                                                                            <div class="i-pinfilled"></div>Marks
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a onclick="HiConfirm('Delete account', 'Are you sure delete this account?, this will be permanent.', '/admin/deleteaccount/<?= $userAdmin['id']; ?>')">
                                                                            <div class="i-trashfilled"></div>Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="cd-bodyfield">
                                                                <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $userAdmin['image'] ?>');"></div>
                                                            </div>
                                                            <div class="cd-bodyfield">
                                                                <label id="cd0"><?= $userAdmin['name']; ?></label>
                                                                <p id="cd3">ID : <?= $userAdmin['personal_id']; ?></p>
                                                                <p id="cd3"><?= $userAdmin['username']; ?></p>
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
                                            <h1>Manager</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-3">
                                                <label for="dp-mnuv-3" class="dropdown-icon">
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
                                        <?php if ($data['CheckManager'] == 0) : ?>
                                            <div class="box-message">
                                                <div class="icon-message img-searchAccount"></div>
                                                <p>Data not available :(</p>
                                            </div>
                                        <?php elseif ($data['CheckManager'] > 0) : ?>
                                            <div class="cb1">
                                                <?php foreach ($data['usermanager'] as $userManager) : ?>
                                                    <div class="list-card">
                                                        <div class="card-hed">
                                                            <div class="logo-card"></div>COFFEE
                                                            <div class="btn-card">
                                                                <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                    <span class="dropoff-span"></span>
                                                                </div>
                                                                <div class="dropcard hide">
                                                                    <div class="list-drop">
                                                                        <a href="<?= BASEURL; ?>/admin/personalinfo/<?= $userManager['id']; ?>">
                                                                            <div class="i-userfilled"></div>Profile
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a href="#">
                                                                            <div class="i-pinfilled"></div>Marks
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a onclick="HiConfirm('Delete account', 'Are you sure delete this account?, this will be permanent.', '/admin/deleteaccount/<?= $userManager['id']; ?>')">
                                                                            <div class="i-trashfilled"></div>Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="cd-bodyfield">
                                                                <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $userManager['image']; ?>');"></div>
                                                            </div>
                                                            <div class="cd-bodyfield">
                                                                <label id="cd0"><?= $userManager['name']; ?></label>
                                                                <p id="cd3">ID : <?= $userManager['personal_id']; ?></p>
                                                                <p id="cd3"><?= $userManager['username']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab tabs-4 dsp-flex fl-colm fl-1">
                                    <div class="tabs-hed h-60px padX-10">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>Cashier</h1>
                                        </div>
                                        <div class="content-box-2-4 fl-X-end fl-1">
                                            <div class="g1 dsp-flex fl-X-end sl">
                                                <input type="checkbox" name="dp-mnuv" id="dp-mnuv-3">
                                                <label for="dp-mnuv-3" class="dropdown-icon">
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
                                        <?php if ($data['CheckCashier'] == 0) : ?>
                                            <div class="box-message">
                                                <div class="icon-message img-searchAccount"></div>
                                                <p>Data not available :(</p>
                                            </div>
                                        <?php elseif ($data['CheckCashier'] > 0) : ?>
                                            <div class="cb1">
                                                <?php foreach ($data['usercashier'] as $userCashier) : ?>
                                                    <div class="list-card">
                                                        <div class="card-hed">
                                                            <div class="logo-card"></div>COFFEE
                                                            <div class="btn-card">
                                                                <div class="btn btn-carddrop-emp empcard-nonactive">
                                                                    <span class="dropoff-span"></span>
                                                                </div>
                                                                <div class="dropcard hide">
                                                                    <div class="list-drop">
                                                                        <a href="<?= BASEURL; ?>/admin/personalinfo/<?= $userCashier['id']; ?>">
                                                                            <div class="i-userfilled"></div>Profile
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a href="#">
                                                                            <div class="i-pinfilled"></div>Marks
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-drop">
                                                                        <a onclick="HiConfirm('Delete account', 'Are you sure delete this account?, this will be permanent.', '/admin/deleteaccount/<?= $userCashier['id']; ?>')">
                                                                            <div class="i-trashfilled"></div>Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="cd-bodyfield">
                                                                <div class="avatar-card" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $userCashier['image']; ?>');"></div>
                                                            </div>
                                                            <div class="cd-bodyfield">
                                                                <label id="cd0"><?= $userCashier['name']; ?></label>
                                                                <p id="cd3">ID : <?= $userCashier['personal_id']; ?></p>
                                                                <p id="cd3"><?= $userCashier['username']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab tabs-5 dsp-flex fl-colm fl-1 padX-10">
                                    <div class="tabs-hed h-60px">
                                        <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start">
                                            <h1>New</h1>
                                        </div>
                                    </div>
                                    <div class="tabs-body">
                                        <div class="content-box-2-4 fl-colm fl-1">
                                            <div class="content-box-2-4 fl-colm fl-1">
                                                <form id="form" onsubmit="allowsubmit()" action="<?= BASEURL; ?>/admin/addaccount" method="post" enctype="multipart/form-data">
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            ID Employee
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-pincode"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <p><?= $data['idGenerate']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Name
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-ballpointpen"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="text" name="name" id="name" autocomplete="off" required>
                                                                <span>Name</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Username
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-maleuser"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="text" name="username" id="username" autocomplete="off" required>
                                                                <span>Username</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Email
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-email"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="email" name="email" id="email" autocomplete="off" required>
                                                                <span>Email</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Phone
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-phone"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="text" name="phone" id="phone" onkeypress="return restrictAlphabets(event)" autocomplete="off" required>
                                                                <span>Phone</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Address
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-location"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="text" name="address" id="address" autocomplete="off" required>
                                                                <span>Address</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Birthday
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-gift"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="date" name="birth" id="birth" autocomplete="off" required>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="radio-box-manual">
                                                        <input type="radio" name="gender" value="Male" id="option1-mp" class="hide">
                                                        <input type="radio" name="gender" value="Female" id="option2-mp" class="hide">
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
                                                    <div class="radio-box-manual">
                                                        <input type="radio" name="level" value="Admin" id="option1-lvl" class="hide">
                                                        <input type="radio" name="level" value="Manager" id="option2-lvl" class="hide">
                                                        <input type="radio" name="level" value="Cashier" id="option3-lvl" class="hide">
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
                                                    <div class="list-box-field">
                                                        <div class="label-field">
                                                            Password
                                                        </div>
                                                        <div class="tf-default">
                                                            <div class="icon-field">
                                                                <div class="i-passwordfill"></div>
                                                            </div>
                                                            <div class="box-field">
                                                                <input type="password" name="password" id="password" autocomplete="off" required>
                                                                <span>Password</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="img-box-field mY-t-10" id="img-box-field">
                                                        <div class="label-field">
                                                            Profile Photo
                                                        </div>
                                                        <div class="bf-default fl-Y-center">
                                                            <div class="imgf-default mX-r-10" style="background-image: url('<?= BASEURL; ?>/img/logo_box_message/upload_to_cloud.png');">
                                                                <label for="img" class="btnsquare-field">
                                                                    <div class="i-image"></div>
                                                                </label>
                                                            </div>
                                                            <p id="fileimg" style="overflow-wrap: break-word; max-width: 150px;" class="font-14px font-weg-500 color-disabled mrgn-clear">No file choosen, yet.</p>
                                                            <input type="file" name="image" id="img" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="end-box" id="endb">
                                                        <button type="submit" id="btnsubmit" class="btntext-default">
                                                            Create account
                                                        </button>
                                                    </div>
                                                </form>
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
    </div>
</div>
<script src="<?= BASEURL; ?>/js/empcardDropdown.js"></script>
<script src="<?= BASEURL; ?>/js/restrictAlphabet.js"></script>
<script src="<?= BASEURL; ?>/js/previewImage.js"></script>