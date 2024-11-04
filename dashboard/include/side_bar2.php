<?php require_once("../php/dashboard.php"); ?>
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li >
                            <a href="../"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../quotes/"><i class="fa fa-th"></i> Quote</a>
                        </li>
                        <li>
                            <a href="../customers/"><i class="fa fa-user"></i> Customers</a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="../email/">Compose Mail</a></li>
                                <li><a href="../email/sent.php">Sent Mails</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
