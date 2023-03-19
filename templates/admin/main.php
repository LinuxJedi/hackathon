<h2>MariaDB Health Checks</h2>
<div>
	<canvas id="mdbhc-chart"></canvas>
</div>
<div class="wrap">
	<?php settings_errors(); ?>
	<?php $active_tab = isset($_GET['tab']) ? strval($_GET['tab']) : 'general'; ?>
	<h2 class="nav-tab-wrapper">
		<a href="?page=mdbhc&tab=general" class="nav-tab <?php echo 'general' === $active_tab ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('General', 'mdbhc'); ?></a>
		<a href="?page=mdbhc&tab=alarms" class="nav-tab <?php echo 'alarms' === $active_tab ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Alarms', 'mdbhc'); ?></a>
		<a href="?page=mdbhc&tab=warnings" class="nav-tab <?php echo 'warnings' === $active_tab ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Warnings', 'mdbhc'); ?></a>
		<a href="?page=mdbhc&tab=events" class="nav-tab <?php echo 'events' === $active_tab ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('Events', 'mdbhc'); ?></a>
	</h2>
	<?php
	if ('general' === $active_tab) {
        mdbhc__template('templates/admin/main-general');
	}
	if ('alarms' === $active_tab) {
        mdbhc__template('templates/admin/main-alarms');
	}
	if ('warnings' === $active_tab) {
        mdbhc__template('templates/admin/main-warnings');
	}
	if ('events' === $active_tab) {
        mdbhc__template('templates/admin/main-events');
	}
	?>
</div>
