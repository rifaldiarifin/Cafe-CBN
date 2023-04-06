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
                    <li class="list-active-type2">
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
                    <div class="content-box-1-1">
                        <h1 class="frame0-9">Dashboard</h1>
                        <p class="p-m4-clear text-d font-16px frame0"><?= date("l, d M Y"); ?></p>
                        <span class="mY-dl-10"></span>
                        <div class="content-box-1-2">
                            <div class="cardview frame1">
                                <div class="iconcardview mY-b-10 stat-color-1 box-shadow-1">
                                    <div class="i-totalsales"></div>
                                </div>
                                <label>Total Sales</label>
                                <p>Rp <?= number_format($data['SearchDataDB']->sumData("total_bill", "data_transactions"), 0, ',', '.'); ?></p>
                                <a class="hyperlink-default" href="<?= BASEURL; ?>/manager/transaction">Details</a>
                            </div>
                            <span class="mX-dl-10"></span>
                            <div class="cardview frame2">
                                <div class="iconcardview mY-b-10 stat-color-2 box-shadow-1">
                                    <div class="i-purchaseOrderFill"></div>
                                </div>
                                <label>Total Order</label>
                                <p><?= $data['SearchDataDB']->checkAvailable("order_code", "data_transactions"); ?></p>
                                <a class="hyperlink-default" href="<?= BASEURL; ?>/manager/transaction">Details</a>
                            </div>
                            <span class="mX-dl-10"></span>
                            <div class="cardview frame3">
                                <div class="iconcardview mY-b-10 stat-color-3 box-shadow-1">
                                    <div class="i-book"></div>
                                </div>
                                <label>Total Menu</label>
                                <p><?= $data['SearchDataDB']->checkAvailable("product_code", "data_products"); ?></p>
                                <a class="hyperlink-default" href="<?= BASEURL; ?>/manager/productlist">Details</a>
                            </div>
                        </div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="content-box-2-1">
                        <div class="box fl-X-sp-beet frame4">
                            <h1>Recent Orders</h1>
                            <p class="mrgn-clear font-14px font-weg-500 color-disabled color-def dsp-flex fl-Y-center fl-X-end pad-10px">Sort 1 - 15</p>
                        </div>
                        <input type="checkbox" name="for-recent-transaction" id="for-recent-transaction">
                        <div class="content-box-2-2 for-tb-recnt-tr padY-10 frame5">
                            <div class="content-box-2-3 padX-10 overfY-auto scrollbar-default">
                                <?php if ($data['SearchDataDB']->checkAvailableByCondition("date", "data_transactions", "WHERE date = '" . date('d - m - Y') . "'") == 0) : ?>
                                    <div class="box fl-colm fl-1">
                                        <div class="box-message">
                                            <div class="icon-message img-purchaseOrder"></div>
                                            <p>No recent transaction today.</p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <table class="table-overview">
                                        <thead>
                                            <tr>
                                                <th>No. Order</th>
                                                <th>Order</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Total Bill</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['recentTransaction'] as $recent) : ?>
                                                <tr>
                                                    <td data-label="No. Order"><?= $recent['no_order']; ?></td>
                                                    <td style="white-space: nowrap;" data-label="Order"><?= str_replace(', ', ',<br>', $recent['ordered_items']); ?></td>
                                                    <td data-label="Price"><?= str_replace(', ', ',<br>', $recent['price']); ?></td>
                                                    <td data-label="Amount"><?= str_replace(', ', ',<br>', $recent['amount']); ?></td>
                                                    <td data-label="Date"><?= $recent['date']; ?></td>
                                                    <td data-label="Total Bill"><?= $recent['total_bill']; ?></td>
                                                    <td><a class="hyperlink-default" href="<?= BASEURL; ?>/manager/transaction">Details</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="btn-text frame5">
                            <label class="dropdown-arrow" for="for-recent-transaction">
                                <div class="i-dropdown"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <span class="mX-dl-10"></span>
                <div class="content-1 fl-colm">
                    <div class="content-box-2-1">
                        <h1 class="frame4">Recent Update</h1>
                        <div class="content-box-2-2 for-tb-recnt-updt padY-10 frame4">
                            <div class="content-box-2-3 padX-10 overfY-auto overfX-hide scrollbar-default">
                                <?php if ($data['SearchDataDB']->checkAvailable("activity_id", "activity_list") == 0) : ?>
                                    <div class="box fl-colm fl-1">
                                        <div class="box-message">
                                            <div class="icon-message img-purchaseOrder"></div>
                                            <p>No recent transaction today.</p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <?php foreach ($data['allActivity'] as $act) : ?>
                                        <div class="list-recnt">
                                            <div class="avatar-recnt" style="background-image: url('<?= BASEURL; ?>/img/avatar/<?= $act['image']; ?>');">
                                            </div>
                                            <div class="detail-recnt">
                                                <label><?= str_replace('#', '<span>' . $act["personal_name"] . '</span>', $act['description']); ?></label>
                                                <p><?= $act['time']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="content-box-2-1">
                        <h1 class="frame4">Most Ordered</h1>
                        <div class="content-box-2-2 for-tb-onl-acnt padY-10 frame5">
                            <div class="content-box-2-3 padX-10 scrollbar-default" style="min-height: 170px;">
                                <?php if ($data['SearchDataDB']->checkAvailable("id", "transaction_order") == 0) : ?>
                                    <div class="box fl-colm fl-1" style="transform: scale(0.8);">
                                        <div class="box-message">
                                            <div class="icon-message img-purchaseOrder"></div>
                                            <p>No orders yet.</p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <?php foreach ($data['mostOrdered'] as $toporder) : ?>
                                        <div class="list-view">
                                            <div class="logo-view" style="background-image: url('<?= BASEURL; ?>/img/product_images/<?= $toporder['product_directory']; ?>/<?= $toporder['product_image']; ?>');"></div>
                                            <div class="list-detail-view">
                                                <label><?= $toporder['product_name']; ?></label>
                                                <p><?= $toporder['total_order']; ?> Ordered</p>
                                            </div>
                                            <div class="box font-13px color-disabled">
                                                Rp <?= number_format($toporder['product_price'], 0, ',', '.'); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <span class="mY-dl-10"></span>
                    <div class="content-box-2-1 frame5">
                        <div class="btn-added-view">
                            <a href="<?= BASEURL; ?>/manager/productlist">
                                <button>
                                    Add Menu
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>