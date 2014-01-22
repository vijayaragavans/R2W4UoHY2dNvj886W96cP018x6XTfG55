<?php /* Smarty version 2.6.25, created on 2014-01-22 19:12:57
         compiled from site/en/upload.html */ ?>
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
                                                                        
                                </ul>
                            </section>

                            <!-- main content -->
                            <div class='box_a'>
                            	<div class='box_a_heading'>
                            		Upload Data
                            	</div>
                            	
                            	<form name='uploaddata_form' id='uploaddata_form' method='POST' action='<?php echo $this->_tpl_vars['base_url']; ?>
upload/upload_data/' enctype="multipart/form-data" >
                            	<div class='box_a_content'>
                            		
                            		<div class='formSep'>
                            			<label>Third Party:</label>
                            			<select name='provider' id='provider'>
                            				<option>Flipkart</option>
                            				<option>Snapdeal</option>
                            			</select>
                            		</div>
                            		<div class='formSep'>
                            			<label>Categories:</label>
										<select name='categories' id='categories'>
												<option value='' disabled selected >Select</option>
										    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['category']):
?>
												<option value='<?php echo $this->_tpl_vars['category']['main_category_id']; ?>
'><?php echo $this->_tpl_vars['category']['category_name']; ?>
</option>
								            <?php endforeach; endif; unset($_from); ?>
										</select>
                            			
                            		</div>
                            		
                            		<div class='formSep'>
                            			<label>File:</label>
                            			<input type='file' name='upfile' id='upfile' />
                            		</div>
                            		
                            		<div class='formSep'>
                            			<input type='submit' name='sub_btn' id='sub_btn' class='btn btn-primary' value='Upload' />
                            		</div>
                            	</div>
                            	</form>
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
                    
                    <!-- sticky footer space -->
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <!-- #main-wrapper end -->
