<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

class PieReg_Admin_Notices_Paid {

    private static $_instance;
    private $admin_notices;

    public function __construct() {
        add_action( 'admin_init', array( $this, 'action_admin_init_pro' ) );
        add_action( 'admin_notices', array( $this, 'action_admin_notices_pro' ) , 10 ,1);
    }

    public static function get_instance_pro() {
        if ( ! ( self::$_instance instanceof self ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function action_admin_init_pro() {
        $dismiss_option = filter_input( INPUT_GET, 'piereg_dismiss', FILTER_SANITIZE_STRING );
        if ( is_string( $dismiss_option ) ) {
            update_option( $dismiss_option, true );
            wp_die();
        }
    }

    public function action_admin_notices_pro() {
        
        $current_screen         = get_current_screen();
       /*  $arrContextOptions=array(
            'sslverify' => false
        );   */        
        $request = wp_remote_get( 'https://store.genetech.co/updates/pie-register-premium/admin-notices.json');			

        if( is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) != 200 ) {
            // Request failed
            return false;
        }
			
		$response               = wp_remote_retrieve_body( $request );
        $notice_data            = json_decode($response , true );
        $set_current_screen     = substr($current_screen->id, strpos($current_screen->id, "_"));

        if( is_array($notice_data) && $set_current_screen === '_page_pie-about-us' || $set_current_screen === '_page_pie-register'){
            ?>
                <div class="piereg-notice-slider">
            <?php

            foreach ( $notice_data  as $admin_notice_index => $admin_notice ) {
                $admin_notice['id']                 = isset($admin_notice['id']) ? $admin_notice['id'] : '';
                $admin_notice['icon']               = isset($admin_notice['icon']) ? $admin_notice['icon'] : 'pieregister-logo';
                $admin_notice['button_1_url']       = isset($admin_notice['button_1_url']) ? $admin_notice['button_1_url'] : '';
                $admin_notice['button_1_text']      = isset($admin_notice['button_1_text']) ? $admin_notice['button_1_text'] : '';
                $admin_notice['button_2_url']       = isset($admin_notice['button_2_url']) ? $admin_notice['button_2_url'] : '';
                $admin_notice['button_2_text']      = isset($admin_notice['button_2_text']) ? $admin_notice['button_2_text'] : '';
                $admin_notice['expiry_date']        = isset($admin_notice['expiry_date']) ? $admin_notice['expiry_date'] : '';
                $admin_notice['plugin']             = isset($admin_notice['plugin']) ? $admin_notice['plugin'] : '';

                $plugin = plugin_basename(__DIR__);
                $plugin = substr($plugin, 0, strpos($plugin, "/"));

                if($admin_notice['plugin'] === 'free'){
                    $admin_notice['plugin'] = 'pie-register';
                }else if($admin_notice['plugin'] === 'paid'){
                    $admin_notice['plugin'] = 'pie-register-premium';
                }else if($admin_notice['plugin'] === ''){
                    $admin_notice['plugin'] = $plugin;
                }
               
                $current_date     = date("Y-m-d");
                if ( ! get_option( $admin_notice['id'] ) &&  $admin_notice['expiry_date'] !== $current_date && $admin_notice['expiry_date'] <  $current_date && $admin_notice['status'] === 'active' && $admin_notice['plugin'] === $plugin) {
                    $dismiss_url = add_query_arg( array(
                       'piereg_dismiss' => $admin_notice['id'],
                   ), admin_url() );
                    ?><div
                        class="notice piereg-notice notice-<?php echo $admin_notice['type'];

                        if ( isset($admin_notice['dismiss']) && $admin_notice['dismiss'] === 'true') {
                            echo ' is-dismissible" data-dismiss-url="' .  $dismiss_url ;
                        } ?>">
                        <div class="image">
                        <img src="<?php echo PIEREG_PLUGIN_URL. 'assets/images/'.$admin_notice['icon'].'.png' ?>" alt="<?php echo $admin_notice['icon'] ?>" >
                        </div>
                        <div class="content">
                            <h2><?php echo $admin_notice['heading']; ?></h2>
                            <p><?php echo $admin_notice['description']; ?></p>
                            <?php if(!empty($admin_notice['button_1_text']) || !empty($admin_notice['button_2_text'])){ ?>
                            <div class="buttons">
                                <?php if(!empty($admin_notice['button_1_text'])) {
                                    ?>
                                        <a class="cta-1" target="_blank" href="<?php echo $admin_notice['button_1_url'] ?>"><?php echo $admin_notice['button_1_text'] ?></a>
                                    <?php
                                } ?>
                                <?php if(!empty($admin_notice['button_2_text'])) {
                                    ?>
                                        <a class="cta-2" target="_blank" href="<?php echo $admin_notice['button_2_url'] ?>"><?php echo $admin_notice['button_2_text'] ?></a>
                                    <?php
                                }?>
                            </div>
                            <?php } ?>
                        </div>
                    </div><?php
                }
            }
            ?>
            </div>
            <?php
        }
    }

	public static function error_handler( $errno, $errstr, $errfile, $errline, $errcontext ) {
		if ( ! ( error_reporting() & $errno ) ) {
			return;
		}

		$message = "errstr: $errstr, errfile: $errfile, errline: $errline, PHP: " . PHP_VERSION . " OS: " . PHP_OS;

		$self = self::get_instance_pro();

		switch ($errno) {
			case E_USER_ERROR:
				$self->error( $message );
				break;

			case E_USER_WARNING:
				$self->warning( $message );
				break;

			case E_USER_NOTICE:
			default:
				$self->notice( $message );
				break;
		}

		error_log( $message );

		return true;
	}
}

new PieReg_Admin_Notices_Paid;