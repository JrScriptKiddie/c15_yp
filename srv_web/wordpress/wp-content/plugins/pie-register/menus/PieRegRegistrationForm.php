<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php $piereg = get_option(OPTION_PIE_REGISTER); ?>
<div class="pieregister-admin" style="width:99%;overflow:hidden;">
  <div id="container">
    <div class="right_section">
      <div class="settings pie_wrap" style="padding-bottom:0px;">
        <h2>
          <?php _e("Pie Register Registration Form",'pie-register') ?>
        </h2>
        <?php
		if( isset($this->pie_post_array['error_message']) && !empty( $this->pie_post_array['error_message'] ) )
			echo '<div style="clear: both;float: none;"><p class="error">' . esc_html($this->pie_post_array['error_message']) . "</p></div>";
		if(isset( $this->pie_post_array['success_message'] ) && !empty( $this->pie_post_array['success_message'] ))
			echo '<div style="clear: both;float: none;"><p class="success">' . esc_html($this->pie_post_array['success_message']) . "</p></div>";
			?>
      </div>
      <div class="settings" style="padding-bottom:0px;">
        <div class="pieHelpTicket">
          	<?php 
              $newformurl 	= "javascript:;";
              $disableanchor 	= "button-disaled";
              $titlehover 	= 'title="With Pie Register Pro you can have an unlimited number of registration forms."';
			      ?>
            	<a 
            	href="<?php echo $newformurl; ?>" 
                <?php echo $titlehover; ?> 
                class="button button-large <?php echo $disableanchor; ?>">
                &nbsp; <?php _e("Add New","pie-register"); ?> &nbsp;
              </a>
		</div>
      </div>
      <div class="pieHelpTicket">
        <div class="settings" style="padding-bottom:0px;">
          <table cellspacing="0" class="piereg_form_table">
            <thead>
              <tr>
                <th></th>
                <th><?php _e("ID","pie-register"); ?></th>
                <th><?php _e("Form Title","pie-register"); ?></th>
                <th><?php _e("Views","pie-register"); ?></th>
                <th><?php _e("Submissions","pie-register"); ?></th>
                <th><?php _e("Shortcode","pie-register"); ?></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th><?php _e("ID","pie-register"); ?></th>
                <th><?php _e("Form Title","pie-register"); ?></th>
                <th><?php _e("Views","pie-register"); ?></th>
                <th><?php _e("Submissions","pie-register"); ?></th>
                <th><?php _e("Shortcode","pie-register"); ?></th>
              </tr>
            </tfoot>
            <tbody class="">
              <?php

$form_on_free	= get_option("piereg_form_free_id");

	$option = get_option("piereg_form_field_option_".$form_on_free);
	if( !empty($option) && is_array($option) && isset($option['Id']) && (!isset($option['IsDeleted']) || trim($option['IsDeleted']) != 1) )
	{			
		?>
      <tr>
        <td><?php if(trim($option['Status']) != "" and $option['Status'] == "enable"): ?>
          <a href="admin.php?page=pie-register&prfrmid=<?php echo $option['Id']; ?>&status=disenable"> <img title="Deactivate" alt="Deactivate" src="<?php echo plugins_url("../assets/images/active1.png",__FILE__); ?>"> </a>
          <?php else:  ?>
          <a href="admin.php?page=pie-register&prfrmid=<?php echo $option['Id']; ?>&status=enable"> <img title="Activate" alt="Activate" src="<?php echo plugins_url("../assets/images/active0.png",__FILE__); ?>"> </a>
          <?php endif; ?></td>
        <td class="column-id"><?php echo $option['Id']; ?></td>
        <td class="column-title"><strong><?php echo $option['Title']; ?></strong>
          <div class="piereg-actions">
            <span class="edit"><a class="underlinenone" href="admin.php?page=pr_new_registration_form&form_id=<?php echo $option['Id']; ?>&form_name=<?php echo str_replace(" ","_",$option['Title']); ?>" title="Edit this form">Edit</a> | </span>
            <span class="edit"><a onclick="javascript:confrm_box('Are you sure you want to delete this form?','admin.php?page=pie-register&prfrmid=<?php echo $option['Id']; ?>&action=delete');" title="Delete this form">Delete</a> | </span>
            <span class="edit"><a class="underlinenone" href="<?php echo get_permalink($piereg['alternate_register']); ?>/?pr_preview=1&form_id=<?php echo $option['Id']; ?>&prFormId=<?php echo $option['Id']; ?>&form_name=<?php echo str_replace(" ","_",$option['Title']); ?>" target="_blank" title="Preview this form">Preview</a> </span>
          </div>
        </td>
        <td class="column-date"><strong><?php echo $option['Views'] ?></strong></td>
        <td class="column-date"><strong><?php echo $option['Entries']; ?></strong></td>
        <td class="column-date" ><div class="style_textarea" onclick="selectText('piereg-select-all-text-onclick_<?php echo $option['Id']; ?>')" id="piereg-select-all-text-onclick_<?php echo $option['Id']; ?>" readonly="readonly"><?php echo '[pie_register_form id="'.$option['Id'].'" title="true" description="true" ]' ?></div></td>
      </tr>
              <?php 
		
			if( !$form_on_free )
			{
				update_option('piereg_form_free_id', $option['Id']);
				$form_on_free .= $option['Id'];
			}
	}
			if(!$option){ ?>
              <tr>
                <td colspan="6"><h3>
                    <?php _e("No Registration Form Found","pie-register"); ?>
                  </h3></td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <?php 
      if( current_user_can( 'administrator' ) ){
      do_action( 'admin_notices_specific_pages');	
      }
    ?>
    </div>
  </div>
</div>