<?php /* Smarty version 2.6.25, created on 2014-01-22 18:09:36
         compiled from site/en/top_menu.html */ ?>
            <!-- top bar -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <div id="mobileNav" class="pull-left"></div>
                        <ul class="nav nav_left">
                            <li>
                                <a data-toggle="modal" href="#bar_messages">Messages <span class="label label-important">3</span></a>
                            </li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a data-toggle="modal" href="#bar_tasks">Tasks <span class="label label-success">5</span></a>
                            </li>
                        </ul>
                        <ul class="nav nav_right">
                            <li class="dropdown dropdown-right">
                                <a data-toggle="dropdown" href="#"><i class="flag-us"></i> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="flag-jp"></i> Japan</a></li>
                                    <li><a href="#"><i class="flag-br"></i> Brasil</a></li>
                                    <li><a href="#"><i class="flag-ie"></i> Ireland</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown dropdown-right">
                                <a data-toggle="dropdown" href="#">John Smith <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_profile.html">Settings</a></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="#" class="jpanel-trigger"><i class="icon-align-justify icon-white"></i> Sidebar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- header -->
            <header id="header">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="logo_holder">
                                <a href="dashboard.html" class="main_logo"><img src="img/hagal_logo.png" alt=""></a>
                            </div>
                            <ul class="quick_links">
                                <li><a href="#" class="link_active"><i class="elusive-icon-dashboard"></i></a></li>
                                <li><a href="#"><i class="elusive-icon-envelope"></i></a></li>
                                <li><a href="#"><i class="elusive-icon-comment"></i><span class="label label-important">4</span></a></li>
                                <li><a href="#"><i class="elusive-icon-file-edit"></i></a></li>
                                <li><a href="#"><i class="elusive-icon-user"></i></a></li>
                                <li><a href="#"><i class="elusive-icon-graph"></i></a></li>
                                <li><a href="#"><i class="elusive-icon-tasks"></i><span class="label label-info">14</span></a></li>
                                <li><a href="#"><i class="elusive-icon-cog"></i></a></li>
                            </ul>
                            <form class="search_form">
                                <button><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            
            <!--  messages modal  -->
            <div id="bar_tasks" class="modal hide fade" role="dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Tasks</h3>
                </div>
                <div class="modal-body modal-body-a">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Priority</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="label label-success">Low</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-success progress-small"><div style="width: 40%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-important">High</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-danger progress-small"><div style="width: 80%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-success">Low</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-success progress-small"><div style="width: 40%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-warning">Medium</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-warning progress-small"><div style="width: 60%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-important">High</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-danger progress-small"><div style="width: 80%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!--  alerts modal  -->
            <div id="bar_messages" class="modal hide fade" role="dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Messages</h3>
                </div>
                <div class="modal-body modal-body-a">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:16px">lp</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>2.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>3.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
            </div>