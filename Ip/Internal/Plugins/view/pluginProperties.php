<div class="page-header">
    <h1><?php _e('Plugin configuration', 'Ip-admin'); ?></h1>
</div>
<div class="_actions clearfix">
    <?php if ($plugin['active']) { ?>
        <button class="ipsDeactivate btn btn-new" type="button" role="button"><?php _e('Deactivate', 'Ip-admin'); ?></button>
    <?php } else { ?>
        <button class="ipsDelete btn btn-danger pull-right" type="button" role="button"><?php _e('Delete', 'Ip-admin'); ?><i class="fa fa-fw fa-trash-o"></i></button>
        <button class="ipsActivate btn btn-new" type="button" role="button"><?php _e('Activate', 'Ip-admin'); ?></button>
    <?php } ?>
</div>
<h2><?php echo esc($plugin['title']); ?></h2>
<p><?php echo esc($plugin['description']); ?></p>
<ul class="_details">
    <li><strong><?php _e('Author', 'Ip-admin'); ?>:</strong> <?php echo esc($plugin['author']); ?></li>
    <li><strong><?php _e('Name', 'Ip-admin'); ?>:</strong> <?php echo esc($plugin['name']); ?></li>
    <li><strong><?php _e('Version', 'Ip-admin'); ?>:</strong> <?php echo esc($plugin['version']); ?></li>
</ul>
<?php if ($form) { ?>
    <?php echo $form->render(); ?>
<?php } ?>
