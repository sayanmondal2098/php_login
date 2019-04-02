<?php
if(!isset($_COOKIE['name'])){
    header('Location: /techfesta/admin');
}?>
<header class="page-header">
    <h2>Welcome to Gym Center</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="/techfesta/">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>