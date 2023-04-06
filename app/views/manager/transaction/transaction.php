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
                    <li class="list-active">
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
                    <li class="list-active-type2">
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

            <div class="content fl-colm">
                <div class="content-1 fl-1">
                    <div class="content-box-2-1 fl-1">
                        <h1 class="frame0-9">Transaction</h1>
                        <div class="content-box-2-2 fl-1">
                            <div class="content-box-2-4 h-50px fl-X-center padX-10">
                                <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-start frame1">
                                    <h2 class="content-box-title">All Transaction</h2>
                                </div>
                                <div class="content-box-2-4 fl-row fl-1 fl-Y-center fl-X-end" style="transition: var(--transition-02);">
                                    <div class="g1 dsp-flex fl-center">
                                        <div class="btn-filter">
                                            Filter
                                            <div class="i-slider filter-nonactive"></div>
                                        </div>
                                        <span>Filter</span>
                                        <div class="box-dropinput hide">
                                            <label>Filter</label>
                                            <div id="dropdown-sprof" class="dropdown-sprof mY-b-10">
                                                <p>Select Employees</p>
                                                <div class="input-select" data-personalid="">
                                                    <div style="background-image: url('<?= BASEURL; ?>/img/avatar/blank_users.png');" class="avatar-input"></div>
                                                    <div class="name-input">
                                                        Select Employee
                                                    </div>
                                                    <div class="btndropdown dpicon-nonactive">
                                                        <div class="i-arrowtriangle"></div>
                                                    </div>
                                                </div>
                                                <div class="option-select scrollbar-default hide" id="option-select">
                                                    <?php foreach ($data['getAllCashier'] as $emp) : ?>
                                                        <div onclick="setValueEmp('<?= $emp['personal_id']; ?>', '<?= $emp['name']; ?>', '<?= $emp['image']; ?>');" class="list-select list-emp-filter" data-personalid="<?= $emp['personal_id']; ?>" data-name="<?= $emp['name']; ?>" data-image="<?= $emp['image']; ?>">
                                                            <div style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $emp['image']; ?>');" class="avatar-input">
                                                            </div>
                                                            <div class="name-input">
                                                                <?= $emp['name']; ?>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="content-box-2-4 fl-colm">
                                                <p>Select Date</p>
                                                <div class="content-box-2-4">
                                                    <div class="dropdown-default">
                                                        <div class="inputselect-default" data-day="" style="min-width: 80px;">
                                                            <input type="text" value="" id="day" placeholder="Day" readonly>
                                                            <div class="btnicon-idk dpicon-nonactive">
                                                                <div class="i-arrowtriangle"></div>
                                                            </div>
                                                        </div>
                                                        <div class="optionselect-default scrollbar-default hide">
                                                            <?php for ($x = 1; $x <= 31; $x++) : ?>
                                                                <?php if (strlen($x) == 1) {
                                                                    $day = "0" . $x;
                                                                } else {
                                                                    $day = $x;
                                                                }; ?>
                                                                <div onclick="setValueDate('<?= $day; ?>', '#day', 'day');" class="listselect-default" data-day="<?= $x; ?>">
                                                                    <?= $day; ?>
                                                                </div>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-default">
                                                        <div class="inputselect-default" data-month="" style="min-width: 80px;">
                                                            <input type="text" value="" id="month" placeholder="Month" readonly>
                                                            <div class="btnicon-idk dpicon-nonactive">
                                                                <div class="i-arrowtriangle"></div>
                                                            </div>
                                                        </div>
                                                        <div class="optionselect-default scrollbar-default hide">
                                                            <?php for ($x = 1; $x <= 12; $x++) : ?>
                                                                <?php if (strlen($x) == 1) {
                                                                    $month = "0" . $x;
                                                                } else {
                                                                    $month = $x;
                                                                }; ?>
                                                                <div onclick="setValueDate('<?= $month; ?>', '#month', 'month');" class="listselect-default" data-month="<?= $x; ?>">
                                                                    <?= $month; ?>
                                                                </div>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-default">
                                                        <div class="inputselect-default" data-year="" style="min-width: 80px;">
                                                            <input type="text" value="" id="year" placeholder="Year" readonly>
                                                            <div class="btnicon-idk dpicon-nonactive">
                                                                <div class="i-arrowtriangle"></div>
                                                            </div>
                                                        </div>
                                                        <div class="optionselect-default scrollbar-default hide">
                                                            <?php for ($x = 2000; $x <= 2099; $x++) : ?>
                                                                <div onclick="setValueDate('<?= $x; ?>', '#year', 'year');" class="listselect-default" data-year="<?= $x; ?>">
                                                                    <?= $x; ?>
                                                                </div>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="endbox-dropdown">
                                                <button id="usefilter" class="btntext-default">
                                                    Use
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="mX-l-10"></span>
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
                            <div class="content-box-2-3 for-tg-notf padX-10 fl-1">
                                <div class="content-box-2-4 padY-10 fl-1 fl-colm scrollbar-default" id="table-parent">
                                    <?php if ($data['SearchDataDB']->checkAvailable("date", "data_transactions") == 0) : ?>
                                        <div class="box fl-colm frame0">
                                            <span class="mY-dl-10"></span>
                                            <p class="color-disabled font-weg-600 mrgn-clear font-16px">No transaction history yet :(</p>
                                            <span class="mY-dl-10"></span>
                                        </div>
                                    <?php else : ?>
                                        <div class="content-box-2-5 dsp-flex fl-colm">
                                            <div class="content-box-subtitle frame1">
                                                Today
                                            </div>
                                            <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "data_transactions", "WHERE date = '" . date('d - m - Y') . "'") == 0) : ?>
                                                <div class="box fl-colm frame0">
                                                    <span class="mY-dl-10"></span>
                                                    <p class="color-disabled font-weg-600 mrgn-clear font-16px">No transaction history today.</p>
                                                    <span class="mY-dl-10"></span>
                                                </div>
                                            <?php else : ?>
                                                <table class="table-default frame2">
                                                    <thead>
                                                        <tr>
                                                            <th>Employee Name</th>
                                                            <th>No. Order</th>
                                                            <th>Order</th>
                                                            <th>Amount</th>
                                                            <th>Price</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Total Bill</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body">
                                                        <?php foreach ($data['HistoryTransaction'] as $today) : ?>
                                                            <?php if ($today['date'] == date("d - m - Y")) : ?>
                                                                <tr>
                                                                    <td data-label="Employee Name"><?= $today['employee_name']; ?></td>
                                                                    <td data-label="No. Order"><?= $today['no_order']; ?></td>
                                                                    <td data-label="Order"><?= str_replace(', ', ',<br>', $today['ordered_items']); ?></td>
                                                                    <td data-label="Amount"><?= str_replace(', ', ',<br>', $today['amount']); ?></td>
                                                                    <td data-label="Price"><?= str_replace(', ', ',<br>', $today['price']); ?></td>
                                                                    <td data-label="Date"><?= $today['date']; ?></td>
                                                                    <td data-label="Time"><?= $today['time']; ?></td>
                                                                    <td data-label="Total Bill"><?= $today['total_bill']; ?></td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "data_transactions", "WHERE NOT date = '" . date('d - m - Y') . "'") > 0) : ?>
                                            <div class="content-box-2-5 dsp-flex fl-colm" id="table-ago">
                                                <div class="content-box-subtitle frame2">
                                                    Ago
                                                </div>
                                                <table class="table-default frame3">
                                                    <thead>
                                                        <tr>
                                                            <th>Employee Name</th>
                                                            <th>No. Order</th>
                                                            <th>Order</th>
                                                            <th>Amount</th>
                                                            <th>Price</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Total Bill</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data['HistoryTransaction'] as $yesterday) : ?>
                                                            <?php if ($yesterday['date'] !== date("d - m - Y")) : ?>
                                                                <tr>
                                                                    <td data-label="Employee Name"><?= $yesterday['employee_name']; ?></td>
                                                                    <td data-label="No. Order"><?= $yesterday['no_order']; ?></td>
                                                                    <td data-label="Order"><?= str_replace(', ', ',<br>', $yesterday['ordered_items']); ?></td>
                                                                    <td data-label="Amount"><?= str_replace(', ', ',<br>', $yesterday['amount']); ?></td>
                                                                    <td data-label="Price"><?= str_replace(', ', ',<br>', $yesterday['price']); ?></td>
                                                                    <td data-label="Date"><?= $yesterday['date']; ?></td>
                                                                    <td data-label="Time"><?= $yesterday['time']; ?></td>
                                                                    <td data-label="Total Bill"><?= $yesterday['total_bill']; ?></td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= BASEURL; ?>/js/liveSearchTrans.js"></script>
    <script src="<?= BASEURL; ?>/js/transDropdown.js"></script>