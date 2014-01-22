<?php /* Smarty version 2.6.25, created on 2014-01-22 18:08:03
         compiled from site/en/footer.html */ ?>

        
        <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/jquery.min.js"></script>
        <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/jquery.actual.min.js"></script>
        <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/jquery-validation/jquery.validate.js"></script>
            <!-- jQuery migrate -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/jquery-migrate-1.2.1.min.js"></script>
            
        <!-- jquery cookie plugin -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/jquery_cookie.js"></script>
        <!-- jquery tooltips -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/powertip/jquery.powertip.min.js"></script>
        <!-- off-canvas sidebar -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/jquery.jpanelmenu.js"></script>
        <!-- mobile navigation -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/tinynav.js"></script>

        <!-- common functions -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/hagal_common.js"></script>

    <!-- dashboard scripts -->
        <!-- jQuery UI -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/jqueryUI/jquery-ui-1.10.2.custom.min.js"></script>
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/jqueryUI/jquery.ui.touch-punch.min.js"></script>
        <!-- FullCalendar -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/fullcalendar/fullcalendar.js"></script>
        <!-- flot (charts) -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/flot/jquery.flot.min.js"></script>
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/flot/jquery.flot.resize.min.js"></script>
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/flot/jquery.flot.orderBars.js"></script>
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/flot/jquery.flot.tooltip.min.js"></script>
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/flot/jquery.flot.time.min.js"></script>
        <!-- peity (small charts) -->
            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/lib/peity/jquery.peity.min.js"></script>

            <script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/js/pages/hagal_dashboard.js"></script>

		<?php echo '
        <script>
            $(function() {
                
                //* validation
                $(\'#login_form\').validate({
                    onkeyup: false,
                    errorClass: \'error\',
                    validClass: \'valid\',
                    rules: {
                        l_username: { required: true, minlength: 3 },
                        l_password: { required: true, minlength: 3 }
                    },
                    errorPlacement: function(error, element) {
                        $(element).closest(\'div\').append(error);
                    }
                })
            });
        </script>
		'; ?>
  
</body>
</html>