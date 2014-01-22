<?php /* Smarty version 2.6.25, created on 2014-01-22 18:09:36
         compiled from site/en/dashboard.html */ ?>
    <body>
        <!-- main wrapper (without footer) -->
        <div id="main-wrapper">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'site/en/top_menu.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


            <section id="main_section">
                <div class="container-fluid">
                    <div id="contentwrapper">
                        <div id="content">

                            <!-- breadcrumbs -->
                            <section id="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><a href="#">Dashboard</a></li>                                    
                                </ul>
                            </section>

                            <!-- main content -->
                            <div class="row-fluid">
                                <div class="stat_boxes">
                                    <div class="row-fluid">
                                        <div class="span3 stat_box">
                                            <div class="peity_canvas peity_bar_up">2,5,3,6,8,5</div>
                                            <h2 class="stat_title">$10 233,23</h2>
                                            <p class="stat_expl">Sale (last week)</p>
                                        </div>
                                        <div class="span3 stat_box">
                                            <div class="peity_canvas peity_bar_down">9,6,7,4,6,3</div>
                                            <h2 class="stat_title">$80 173,81</h2>
                                            <p class="stat_expl">Sale (last month)</p>
                                        </div>
                                        <div class="span3 stat_box">    
                                            <div class="peity_canvas peity_line_up">3,5,9,7,12,8,16</div>
                                            <h2 class="stat_title">13 801</h2>
                                            <p class="stat_expl">Users (last 24h)</p>
                                        </div>
                                        <div class="span3 stat_box">    
                                            <div class="peity_canvas peity_line_down">16,8,12,7,6,5,3</div>
                                            <h2 class="stat_title">346 216</h2>
                                            <p class="stat_expl">Users (last month)</p>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span3 stat_box">
                                            <div class="stat_ico"><i class="elusive-icon-tag"></i></div>
                                            <h2 class="stat_title"><a href="#">16</a></h2>
                                            <p class="stat_expl">New Products</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-user"></i></div>
                                            <h2 class="stat_title"><a href="#">132</a></h2>
                                            <p class="stat_expl">New Users</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-shopping-cart"></i></div>
                                            <h2 class="stat_title"><a href="#">234</a></h2>
                                            <p class="stat_expl">New Sales</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-comment"></i></div>
                                            <h2 class="stat_title"><a href="#">21</a></h2>
                                            <p class="stat_expl">New Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- #content end -->
                    </div>
                    <!-- #contentwrapper end -->

                    <!-- side menu -->
                    <aside id="menu">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'site/en/left_menu.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </aside>

                    <!-- jPanel sidebar -->
                    <aside id="jpanel_side" class="jpanel_sidebar">
                        <div class="jpanel_inner">
                            <span class="close jpanel_close">×</span>
                            <h4 class="heading_a">Actions</h4>
                            <a href="#" class="btn btn-block">Button</a>
                            <a href="#" class="btn btn-block">Another Button</a>
                            <div class="sep_a"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt praesentium aliquam provident aperiam ullam illum aliquid ad at unde excepturi nulla id impedit est quasi quis architecto nobis in.</p>
                            <div class="sep_a"></div>
                            <div class="progress progress-info progress-small"><div class="bar" style="width: 20%"></div></div>
                            <div class="help-block">CPU Usage</div>
                            <div class="progress progress-success progress-small"><div class="bar" style="width: 40%"></div></div>
                            <div class="help-block">Disk Usage</div>
                            <div class="progress progress-warning progress-small"><div class="bar" style="width: 60%"></div></div>
                            <div class="help-block">DB Usage</div>
                            <div class="progress progress-danger progress-small"><div class="bar" style="width: 80%"></div></div>
                            <div class="help-block">Server Usage</div>
                        </div>
                    </aside>
                    <!-- sticky footer space -->
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <!-- #main-wrapper end -->

        <!-- footer -->
        <footer id="footer">
            <div class="row-fluid">
                <div class="span3">
                    &copy; Your Company 2013
                </div>
                <div class="span9">
                    <ul>
                        <li><a href="#">First link</a></li>
                        <li>&middot;</li>
                        <li><a href="#">Second link</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        