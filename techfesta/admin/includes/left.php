<?php
if(!isset($_COOKIE['name'])){
    header('Location: /techfesta/admin');
}
?>
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            <strong>Gym Center</strong>
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="/techfesta/admin/home">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-folder">
                            <span class="pull-right label label-primary">182</span>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>View Public</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="/techfesta/admin/table_pack1">
                                        Package 1
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/table_pack2">
                                        Package 2
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/table_pack3">
                                        Package 3
                                </a>
                            </li>
                           <!--  <li>
                                <a href="/techfesta/admin/all_package">
                                        All Package
                                </a>
                            </li> -->
                            <li>
                                <a href="/techfesta/admin/news">
                                        Newsletter
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-edit" aria-hidden="true"></i>
                            <span>Modify</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="/techfesta/admin/admin_pages">
                                        Admin Pages
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/view_web_pages">
                                        Website Pages
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/menu">
                                        Menu
                                </a>
                            </li>
                        </ul> 
                    </li>
                       <li class="nav-parent">
                        <a>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>Add</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="/techfesta/admin/new_page">
                                        Admin Pages
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/web_pages">
                                        Website Pages
                                </a>
                            </li>
                            <li>
                                <a href="/techfesta/admin/add_menu">
                                        Menu
                                </a>
                            </li>
                        </ul> 
                    </li>
                    <!-- <li class="nav-parent">
                        <a>
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="nav nav-children">               
                            <li>
                                <a href="pages-recover-password">
                                        Recover Password
                                </a>
                            </li>
                            <li>
                                <a href="pages-lock-screen.html">
                                        Locked Screen
                                </a>
                            </li>
                            <li>
                                <a href="pages-user-profile.html">
                                        User Profile
                                </a>
                            </li>
                            <li>
                                <a href="pages-session-timeout.html">
                                        Session Timeout
                                </a>
                            </li>
                           
                            <li>
                                <a href="pages-timeline.html">
                                        Timeline
                                </a>
                            </li>
                            <li>
                                <a href="pages-media-gallery.html">
                                        Media Gallery
                                </a>
                            </li>
                           
        
                            <li>
                                <a href="pages-404.html">
                                        404
                                </a>
                            </li>
                            <li>
                                <a href="pages-500.html">
                                        500
                                </a>
                            </li>
                            <li>
                                <a href="pages-log-viewer.html">
                                        Log Viewer
                                </a>
                            </li>
                            <li>
                                <a href="pages-search-results.html">
                                        Search Results
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <span>Comments</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="/techfesta/admin/user_comments">
                                    Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-parent">
                        <a>
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="ui-elements-typography.html">
                                        Typography
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-icons.html">
                                        Icons
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-tabs.html">
                                        Tabs
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-panels.html">
                                        Panels
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-widgets.html">
                                        Widgets
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-portlets.html">
                                        Portlets
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-buttons.html">
                                        Buttons
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-alerts.html">
                                        Alerts
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-notifications.html">
                                        Notifications
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-modals.html">
                                        Modals
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-lightbox.html">
                                        Lightbox
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-progressbars.html">
                                        Progress Bars
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-sliders.html">
                                        Sliders
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-carousels.html">
                                        Carousels
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-accordions.html">
                                        Accordions
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-nestable.html">
                                        Nestable
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-tree-view.html">
                                        Tree View
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-grid-system.html">
                                        Grid System
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-charts.html">
                                        Charts
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-animations.html">
                                        Animations
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-extra.html">
                                        Extra
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="forms-basic.html">
                                        Basic
                                </a>
                            </li>
                            <li>
                                <a href="forms-advanced.html">
                                        Advanced
                                </a>
                            </li>
                            <li>
                                <a href="forms-validation.html">
                                        Validation
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                        Layouts
                                </a>
                            </li>
                            <li>
                                <a href="forms-wizard.html">
                                        Wizard
                                </a>
                            </li>
                            <li>
                                <a href="forms-code-editor.html">
                                        Code Editor
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="tables-basic.html">
                                        Basic
                                </a>
                            </li>
                            <li>
                                <a href="tables-advanced.html">
                                        Advanced
                                </a>
                            </li>
                            <li>
                                <a href="tables-responsive.html">
                                        Responsive
                                </a>
                            </li>
                            <li>
                                <a href="tables-editable.html">
                                        Editable
                                </a>
                            </li>
                            <li>
                                <a href="tables-ajax.html">
                                        Ajax
                                </a>
                            </li>
                            <li>
                                <a href="tables-pricing.html">
                                        Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-parent">
                        <a>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="maps-google-maps.html">
                                        Basic
                                </a>
                            </li>
                            <li>
                                <a href="maps-google-maps-builder.html">
                                        Map Builder
                                </a>
                            </li>
                            <li>
                                <a href="maps-vector.html">
                                        Vector
                                </a>
                            </li>
                        </ul>
                    </li> 
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-columns" aria-hidden="true"></i>
                            <span>Layouts</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="layouts-default.html">
                                        Default
                                </a>
                            </li>
                            <li>
                                <a href="layouts-boxed.html">
                                        Boxed
                                </a>
                            </li>
                            <li>
                                <a href="layouts-menu-collapsed.html">
                                        Menu Collapsed
                                </a>
                            </li>
                            <li>
                                <a href="layouts-scroll.html">
                                        Scroll
                                </a>
                            </li>
                        </ul>
                    </li>   -->
        
                </ul>
            </nav>

            <hr class="separator" />
        </div>
    </div>

</aside>
<!-- end: sidebar -->