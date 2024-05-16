<aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?r=site/index" class="brand-link">
        <img src="<?php echo Yii::$app->request->baseUrl; ?>/uploads/logo/ab_logo.jpg" alt="Narono" class="brand-image">
        <span class="brand-text font-weight-light">ANNAB</span>
<!--        <span class="brand-text font-weight-light">NARONO</span>-->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php if (!isset($_SESSION['driver_login'])): ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php?r=site/index" class="nav-link site">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ภาพรวมระบบ
                            <!--                                <i class="right fas fa-angle-left"></i>-->
                        </p>
                    </a>
                </li>
<!--                <li class="nav-item has-treeview has-sub">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-building"></i>-->
<!--                        <p>-->
<!--                            ข้อมูลบริษัท-->
<!--                            <i class="fas fa-angle-left right"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        --><?php ////if (\Yii::$app->user->can('company/index')): ?>
<!--                            <li class="nav-item">-->
<!--                                <a href="index.php?r=company/index" class="nav-link company">-->
<!--                                    <i class="far fa-circlez nav-icon"></i>-->
<!--                                    <p>บริษัท</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        --><?php ////endif; ?>
<!--                    </ul>-->
<!--                </li>-->
                <?php if (1>0): ?>
                    <li class="nav-item has-treeview has-sub">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                ตั้งค่าทั่วไป
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?r=paymentmethod" class="nav-link paymentmethod">
                                    <i class="far fa-file-import nav-icon"></i>
                                    <p>วิธีชำระเงิน</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?r=paymentterm" class="nav-link paymentterm">
                                    <i class="far fa-file-import nav-icon"></i>
                                    <p>เงื่อนไขชำระเงิน</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?r=bank" class="nav-link bank">
                                    <i class="far fa-file-import nav-icon"></i>
                                    <p>ธนาคาร</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?r=bankaccount" class="nav-link bankaccount">
                                    <i class="far fa-file-import nav-icon"></i>
                                    <p>บัญชีธนาคาร</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ลูกค้า
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php //if (\Yii::$app->user->can('customergroup/index')): ?>
                            <li class="nav-item">
                                <a href="index.php?r=customergroup/index" class="nav-link customergroup">
                                    <i class="far fa-circlez nav-icon"></i>
                                    <p>กลุ่มลูกค้า</p>
                                </a>
                            </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customertype/index')): ?>
<!--                            <li class="nav-item">-->
<!--                                <a href="index.php?r=customertype/index" class="nav-link customertype">-->
<!--                                    <i class="far fa-circlez nav-icon"></i>-->
<!--                                    <p>ประเภทลูกค้า</p>-->
<!--                                </a>-->
<!--                            </li>-->
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customers/index')): ?>
                            <li class="nav-item">
                                <a href="index.php?r=customer" class="nav-link customer">
                                    <i class="far fa-circlez nav-icon"></i>
                                    <p>
                                        ลูกค้า
                                        <!--                                <span class="right badge badge-danger">New</span>-->
                                    </p>
                                </a>
                            </li>
                        <?php //endif; ?>

                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            พนักงาน
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php //if (\Yii::$app->user->can('position/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=department/index" class="nav-link department">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>แผนก</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('position/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=position/index" class="nav-link position">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ตำแหน่ง</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('employee/index')): ?>
                            <li class="nav-item">
                                <a href="index.php?r=employee/index" class="nav-link employee">
                                    <i class="far fa-circlez nav-icon"></i>
                                    <p>พนักงาน</p>
                                </a>
                            </li>
                        <?php //endif; ?>
                    </ul>
                </li>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cubes"></i>
                        <p>
                            จัดการสต๊อกสินค้า
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php //if (\Yii::$app->user->can('customergroup/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=productgroup/index" class="nav-link productgroup">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>กลุ่มสินค้า</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customergroup/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=product" class="nav-link product">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>สินค้า</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customergroup/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=warehouse" class="nav-link warehouse">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>คลังสินค้า</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customertype/index')): ?>
                        <!--                            <li class="nav-item">-->
                        <!--                                <a href="index.php?r=customertype/index" class="nav-link customertype">-->
                        <!--                                    <i class="far fa-circlez nav-icon"></i>-->
                        <!--                                    <p>ประเภทลูกค้า</p>-->
                        <!--                                </a>-->
                        <!--                            </li>-->
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('customers/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=stocksum" class="nav-link stocksum">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>
                                    สินค้าคงเหลือ
                                    <!--                                <span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=stocktrans" class="nav-link stocktrans">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>
                                    ประวัติทำรายการ
                                    <!--                                <span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>
                        <?php if (\Yii::$app->user->can('journalissue/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=journalissue" class="nav-link journalissue">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>
                                    เบิกสินค้า
                                    <!--                                <span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>

                        <?php endif; ?>

                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            คำสั่งซื้อ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php //if (\Yii::$app->user->can('position/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=order/index" class="nav-link order">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ใบสั่งซื้อ</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('position/index')): ?>
                        <li class="nav-item">
                            <a href="index.php?r=deliveryorder/index" class="nav-link deliveryorder">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ใบส่งของ</p>
                            </a>
                        </li>
                        <?php //endif; ?>
                        <?php //if (\Yii::$app->user->can('position/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=customerinvoice/index" class="nav-link customerinvoice">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p>ใบกำกับภาษี</p>-->
<!--                            </a>-->
<!--                        </li>-->
                        <?php //endif; ?>
                    </ul>
                </li>
<!--                <li class="nav-item has-treeview has-sub">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="nav-icon fas fa-chart-pie"></i>-->
<!--                        <p>-->
<!--                            รายงาน-->
<!--                            <i class="right fas fa-angle-left"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=report/workqueuedaily" class="nav-link workqueuedaily">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p>รายงานประจำวัน</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=cashrecordreport" class="nav-link cashrecordreport">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p>รายงานสรุปรับเงิน</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=report/report1" class="nav-link report">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p>จำนวนเที่ยววิ่ง</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!---->
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=report/report2" class="nav-link report">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p> สรุปน้ำมันแยกคัน </p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=carsummaryreport/index" class="nav-link carsummaryreport">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p> รายงานค่าเที่ยว </p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=cashrecordreportdaily/index" class="nav-link cashrecordreportdaily">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p> รายละเอียดเงินสดย่อย </p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!--                        --><?php ////if (\Yii::$app->user->can('salecomreport/index')): ?>
<!--                        <li class="nav-item">-->
<!--                            <a href="index.php?r=cashreportdaily/index" class="nav-link cashreportdaily">-->
<!--                                <i class="far fa-circlez nav-icon"></i>-->
<!--                                <p> รายงานเงินสดย่อย </p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        --><?php ////endif;?>
<!---->
<!--                    </ul>-->
<!--                </li>-->
                <?php // if (isset($_SESSION['user_group_id'])): ?>
                <?php //if ($_SESSION['user_group_id'] == 1): ?>
                <?php //if (\Yii::$app->user->identity->username == 'iceadmin'): ?>
                    <li class="nav-item has-treeview has-sub">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                ผู้ใช้งาน
                                <i class="fas fa-angle-left right"></i>
                                <!--                                <span class="badge badge-info right">6</span>-->
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php //if (\Yii::$app->user->can('usergroup/index')): ?>
                                <li class="nav-item">
                                    <a href="index.php?r=usergroup" class="nav-link usergroup">
                                        <i class="far fa-circlez nav-icon"></i>
                                        <p>กลุ่มผู้ใช้งาน</p>
                                    </a>
                                </li>
                            <?php //endif; ?>
                            <?php //if (\Yii::$app->user->can('user/index')): ?>
                                <li class="nav-item">
                                    <a href="index.php?r=user" class="nav-link user">
                                        <i class="far fa-circlez nav-icon"></i>
                                        <p>ผู้ใช้งาน</p>
                                    </a>
                                </li>
                            <?php //endif;?>

                            <?php //if (\Yii::$app->user->can('authitem/index')): ?>
                                <li class="nav-item">
                                    <a href="index.php?r=authitem" class="nav-link auth">
                                        <i class="far fa-circlez nav-icon"></i>
                                        <p>สิทธิ์การใช้งาน</p>
                                    </a>
                                </li>
                            <?php //endif;?>

                        </ul>
                    </li>
                <?php //if (\Yii::$app->user->can('dbbackup/backuplist')): ?>
                    <li class="nav-item has-treeview has-sub">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                สำรองข้อมูล
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?r=dbbackup/backuplist" class="nav-link dbbackup">
                                    <i class="far fa-file-archive nav-icon"></i>
                                    <p>สำรองข้อมูล</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?r=dbrestore/restorepage" class="nav-link dbrestore">
                                    <i class="fa fa-upload nav-icon"></i>
                                    <p>กู้คืนข้อมูล</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php //endif;?>
                <?php //endif; ?>
                <?php //endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <?php endif; ?>

    </div>
    <!-- /.sidebar -->
</aside>

