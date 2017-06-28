<?php

$usp_options = array (
'author' => get_current_user_id(),
'categories' => 
array (
	0 => '1',
),
'number-approved' => -1,
'redirect-url' => '',
'error-message' => 'There was an error. Please ensure that you have added a title, some content, and that you have uploaded only images.',
'min-images' => 0,
'max-images' => 1,
'min-image-height' => 0,
'min-image-width' => 0,
'max-image-height' => 1500,
'max-image-width' => 1500,
'usp_name' => 'show',
'usp_url' => 'show',
'usp_email' => 'hide',
'usp_title' => 'show',
'usp_tags' => 'show',
'usp_category' => 'show',
'usp_images' => 'hide',
'upload-message' => 'Please select your image(s) to upload.',
'usp_response' => '2',
'usp_casing' => 0,
'usp_content' => 'show',
'success-message' => 'Success! Thank you for your submission.',
'usp_email_alerts' => 1,
'usp_email_html' => 0,
'usp_email_address' => 'louismarie.matthews@outlook.fr',
'usp_email_from' => 'louismarie.matthews@outlook.fr',
'usp_use_author' => 0,
'usp_use_url' => 0,
'usp_use_cat' => 0,
'usp_use_cat_id' => '',
'usp_richtext_editor' => 0,
'usp_add_another' => '',
'disable_required' => 0,
'titles_unique' => 0,
'email_alert_subject' => '',
'email_alert_message' => '',
);

function usp_get_default_title() {
	$time = date_i18n( 'Ymd', current_time( 'timestamp' ) ) . '-' . date_i18n( 'His', current_time( 'timestamp' ) );
	$title = esc_html__( 'User Submitted Post', 'usp' );
	$title = apply_filters( 'usp_default_title', $title, $time );
	return $title;
}

function usp_get_ip_address() {
	if ( isset( $_SERVER ) ) {
		if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif ( isset( $_SERVER['HTTP_CLIENT_IP'] ) ) {
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];
		} else {
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}
	} else {
		if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
			$ip_address = getenv( 'HTTP_X_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_CLIENT_IP' ) ) {
			$ip_address = getenv( 'HTTP_CLIENT_IP' );
		} else {
			$ip_address = getenv( 'REMOTE_ADDR' );
		}
	}
	return $ip_address;
}

function usp_check_for_public_submission() {

	global $usp_options;

	if ( ! is_user_logged_in() ) {
		echo "vous devez être connectés";
	}
	
	if ( isset( $_POST['user-submitted-post'], $_POST['usp-nonce'] ) && ! empty( $_POST['user-submitted-post'] ) && wp_verify_nonce( $_POST['usp-nonce'], 'usp-nonce' ) ) {
		$title = usp_get_default_title();
		
		if ( isset( $_POST['user-submitted-title'] ) && ( $usp_options['usp_title'] == 'show' || $usp_options['usp_title'] == 'optn' ) ) {
			$title = sanitize_text_field($_POST['user-submitted-title']);
		}
		
		$ip = sanitize_text_field( usp_get_ip_address() );
		
		$files = isset( $_FILES['user-submitted-image'] ) ? $_FILES['user-submitted-image'] : array();
		
		$author   = isset( $_POST['user-submitted-name'] )     ? sanitize_text_field( $_POST['user-submitted-name'] )     : '';
		$url      = isset( $_POST['user-submitted-url'] )      ? esc_url( $_POST['user-submitted-url'] )                  : '';
		$email    = isset( $_POST['user-submitted-email'] )    ? sanitize_email( $_POST['user-submitted-email'] )         : '';
		$tags     = isset( $_POST['user-submitted-tags'] )     ? sanitize_text_field( $_POST['user-submitted-tags'] )     : '';
		$captcha  = isset( $_POST['user-submitted-captcha'] )  ? sanitize_text_field( $_POST['user-submitted-captcha'] )  : '';
		$verify   = isset( $_POST['user-submitted-verify'] )   ? sanitize_text_field( $_POST['user-submitted-verify'] )   : '';
		$content  = isset( $_POST['user-submitted-content'] )  ? usp_sanitize_content( $_POST['user-submitted-content'] ) : '';
		$category = isset( $_POST['user-submitted-category'] ) ? intval( $_POST['user-submitted-category'] )              : '';
		
		$result = usp_create_public_submission( $title, $files, $ip, $author, $url, $email, $tags, $captcha, $verify, $content, $category );
		
		$post_id = false;
		
		if ( isset( $result['id'] ) ) $post_id = $result['id'];
		
		$error = false;
		
		if ( isset( $result['error']) ) {
			$error = array_filter( array_unique ($result['error'] ) );
		}
		
		if ( $error ) {
			$e = implode(',', $error);
			$e = trim($e, ',');
		} else {
			$e = 'error';
		}
		
		if ( $post_id ) {
			if ( ! empty( $_POST['redirect-override'] ) ) {
				$redirect = $_POST['redirect-override'];
				$redirect = remove_query_arg( array( 'usp-error' ), $redirect );
				$redirect = add_query_arg( array( 'usp_redirect' => '1', 'success' => 1, 'post_id' => $post_id ), $redirect );
			} else {
				$redirect = $_SERVER['REQUEST_URI'];
				$redirect = remove_query_arg( array( 'usp-error' ), $redirect );
				$redirect = add_query_arg( array( 'success' => 1, 'post_id' => $post_id ), $redirect );
			}
			do_action( 'usp_submit_success', $redirect );
		} else {
			if ( ! empty( $_POST['redirect-override'] ) ) {
				$redirect = $_POST['redirect-override'];
				$redirect = remove_query_arg( array( 'success', 'post_id' ), $redirect );
				$redirect = add_query_arg( array( 'usp_redirect' => '1', 'usp-error' => $e ), $redirect );
			} else {
				$redirect = $_SERVER['REQUEST_URI'];
				$redirect = remove_query_arg(array('success', 'post_id'), $redirect);
				$redirect = add_query_arg(array('usp-error' => $e), $redirect);
			}
			do_action('usp_submit_error', $redirect);
		}
		wp_redirect( esc_url_raw( $redirect ) );
		exit();
	}
}
add_action( 'parse_request', 'usp_check_for_public_submission', 1 );

function usp_error_message() {
	
	global $usp_options;
	
	$min = $usp_options['min-images'];
	$max = $usp_options['max-images'];
	
	if ( (int) $min > 1 ) {
		$min = ' (' . $min . esc_html__( ' files required', 'usp' ) . ')';
	} else {
		$min = ' (' . $min . esc_html__( ' file required', 'usp' ) . ')';
	}
	
	if ( (int) $max > 1 ) {
		$max = ' (limit: ' . $max . esc_html__(' files', 'usp') . ')';
	} else {
		$max = ' (limit: ' . $max . esc_html__(' file', 'usp') . ')';
	}
	
	$min_width  = ' (' . $usp_options['min-image-width']  . esc_html__(' pixels', 'usp') . ')';
	$max_width  = ' (' . $usp_options['max-image-width']  . esc_html__(' pixels', 'usp') . ')';
	$min_height = ' (' . $usp_options['min-image-height'] . esc_html__(' pixels', 'usp') . ')';
	$max_height = ' (' . $usp_options['max-image-height'] . esc_html__(' pixels', 'usp') . ')';
	
	if ( ! empty( $usp_options['error-message'] ) ) {
		$general_error = $usp_options['error-message'];
	} else {
		$general_error = esc_html__( 'An error occurred. Please go back and try again.', 'usp' );
	}
	
	if ( isset( $_GET['usp-error'] ) && ! empty( $_GET['usp-error'] ) ) {
		
		$error_string = sanitize_text_field( $_GET['usp-error'] );
		$error_array = explode( ',', $error_string );
		$error = array();
		
		foreach ( $error_array as $e ) {
			
			if     ($e == 'required-login')      $error[] = esc_html__( 'User login required', 'usp' );
			elseif ($e == 'required-name')       $error[] = esc_html__( 'User name required', 'usp' );
			elseif ($e == 'required-title')      $error[] = esc_html__( 'Post title required', 'usp' );
			elseif ($e == 'required-url')        $error[] = esc_html__( 'User URL required', 'usp' );
			elseif ($e == 'required-tags')       $error[] = esc_html__( 'Post tags required', 'usp' );
			elseif ($e == 'required-category')   $error[] = esc_html__( 'Post category required', 'usp' );
			elseif ($e == 'required-content')    $error[] = esc_html__( 'Post content required', 'usp' );
			elseif ($e == 'required-recaptcha')  $error[] = esc_html__( 'Correct captcha required', 'usp' );
			elseif ($e == 'required-captcha')    $error[] = esc_html__( 'Correct captcha required', 'usp' );
			elseif ($e == 'required-email')      $error[] = esc_html__( 'User email required', 'usp' );
			elseif ($e == 'spam-verify')         $error[] = esc_html__( 'Non-empty value for hidden field', 'usp' );
			elseif ($e == 'file-min')            $error[] = esc_html__( 'Minimum number of images not met', 'usp' ) . $min;
			elseif ($e == 'file-max')            $error[] = esc_html__( 'Maximum number of images exceeded ', 'usp' ) . $max;
			elseif ($e == 'width-min')           $error[] = esc_html__( 'Minimum image width not met', 'usp' ) . $min_width;
			elseif ($e == 'width-max')           $error[] = esc_html__( 'Image width exceeds maximum', 'usp' ) . $max_width;
			elseif ($e == 'height-min')          $error[] = esc_html__( 'Minimum image height not met', 'usp' ) . $min_height;
			elseif ($e == 'height-max')          $error[] = esc_html__( 'Image height exceeds maximum', 'usp' ) . $max_height;
			elseif ($e == 'file-type')           $error[] = esc_html__( 'File type not allowed (please upload images only)', 'usp' );
			elseif ($e == 'file-error')          $error[] = esc_html__( 'The selected files could not be uploaded to the server', 'usp' ); // general file(s) error
			
			// check permissions on /uploads/ directory, check error log for the following error:
			// PHP Warning: mysql_real_escape_string() expects parameter 1 to be string, object given in /wp-includes/wp-db.php
			elseif ( $e == 'file-upload' )       $error[] = esc_html__('The file(s) could not be uploaded', 'usp'); 
			
			elseif ( $e == 'post-fail' )         $error[] = esc_html__('Post not created. Please contact the site administrator for help.', 'usp');
			elseif ( $e == 'duplicate-title' )   $error[] = esc_html__('Duplicate post title. Please try again.', 'usp');
			
			elseif ( $e == 'error' )             $error[] = $general_error;
			
		}
		
		$output = '';
		
		foreach ($error as $e) {
			
			$output .= "\t\t\t".'<div class="usp-error">'. esc_html__('Error: ', 'usp') . $e .'</div>'."\n";
			
		}
		
		$return = '<div id="usp-error-message">'."\n". $output ."\t\t".'</div>'."\n";
		
		return apply_filters('usp_error_message', $return);
		
	}
	
	return false;
	
}


function usp_check_required( $field ) {
	
	global $usp_options;
	
	if ( $usp_options[$field] === 'show' ) {
		return true;
	} else {
		return false;
	}
}

function usp_sanitize_content( $content ) {
	
	$allowed_tags = wp_kses_allowed_html( 'post' );
	
	$allowed_tags['style'] = array(
	'types' => array()
	);
	
	$patterns = array( '/target="_blank"/i', "/target='_blank'/i" );
	
	$replacements = array( '', '' );
	
	$content = wp_kses( stripslashes( $content ), $allowed_tags );
	
	$content = preg_replace( $patterns, $replacements, $content );
	
	return $content;
	
}

function usp_create_public_submission( $title, $files, $ip, $author, $url, $email, $tags, $captcha, $verify, $content, $category ) {
	
	global $usp_options;
	
	// check errors
	$new_post = array( 'id' => false, 'error' => false );
	
	$author_data        = usp_get_author( $author );
	$author             = $author_data['author'];
	$author_id          = $author_data['author_id'];
	$new_post['error'][] = $author_data['error'];
	
	$file_data          = usp_check_images( $files, $new_post );
	$file_count         = $file_data['file_count'];
	$new_post['error']   = array_unique( array_merge( $file_data['error'], $new_post['error'] ) );
	
	if ( isset( $usp_options['usp_title'] ) && $usp_options['usp_title']  == 'show' && empty( $title ) ) {
		$new_post['error'][] = 'required-title';
	}

	if ( isset( $usp_options['usp_url'] ) && $usp_options['usp_url'] == 'show' && empty( $url ) ) {
		$new_post['error'][] = 'required-url';
	}

	if ( isset( $usp_options['usp_tags'] ) && $usp_options['usp_tags'] == 'show' && empty( $tags ) ) {
		$new_post['error'][] = 'required-tags';
	}

	if ( isset( $usp_options['usp_category'] ) && $usp_options['usp_category'] == 'show' && empty ($category ) ) {
		$new_post['error'][] = 'required-category';
	}

	if ( isset( $usp_options['usp_content'] ) && $usp_options['usp_content'] == 'show' && empty( $content ) ) {
		$new_post['error'][] = 'required-content';
	}

	if ( isset( $usp_options['usp_email'] ) && $usp_options['usp_email'] != 'hide' && !usp_validateEmail( $email ) ) {
		$new_post['error'][] = 'required-email';
	}
	
	if ( isset( $usp_options['titles_unique']) && $usp_options['titles_unique'] && ! usp_check_duplicates( $title ) ) {
		$new_post['error'][] = 'duplicate-title';
	}

	if ( ! empty( $verify ) ) {
		$new_post['error'][] = 'spam-verify';
	}
	
	foreach ( $new_post['error'] as $e ) {
		if ( ! empty( $e ) ) {
			unset($new_post['id']);
			return $new_post;
		}
	}
	
	// submit post
	$post_data = usp_prepare_post( $title, $content, $author_id, $author, $ip );
	
	do_action( 'usp_insert_before', $post_data );
	$new_post['id'] = wp_insert_post( $post_data );
	do_action( 'usp_insert_after', $new_post );
	
	if ( $new_post['id'] ) {
		
		$post_id = $new_post['id'];
		
		wp_set_post_tags( $post_id, $tags );
		
		wp_set_post_categories( $post_id, array( $category ) );
		
		usp_send_mail_alert( $post_id, $title );
		
		do_action( 'usp_files_before', $files );
		
		$attach_ids = array();
		
		if ( $files && $file_count > 0 ) {
			
			usp_include_deps();
			
			for ( $i = 0; $i < $file_count; $i++ ) {
				$key = apply_filters( 'usp_file_key', 'user-submitted-image-{$i}' );
				
				$_FILES[$key]             = array();
				$_FILES[$key]['name']     = $files['name'][$i];
				$_FILES[$key]['tmp_name'] = $files['tmp_name'][$i];
				$_FILES[$key]['type']     = $files['type'][$i];
				$_FILES[$key]['error']    = $files['error'][$i];
				$_FILES[$key]['size']     = $files['size'][$i];
				
				$attach_id = media_handle_upload( $key, $post_id );
				
				if ( ! is_wp_error( $attach_id ) && wp_attachment_is_image( $attach_id ) ) {
					$attach_ids[] = $attach_id;
					add_post_meta( $post_id, 'user_submit_image', wp_get_attachment_url( $attach_id ) );
				} else {
					wp_delete_attachment( $attach_id );
					wp_delete_post( $post_id, true );
					$new_post['error'][] = 'file-upload';
					unset( $new_post['id'] );
					return $new_post;
				}
			}
		}
		
		do_action( 'usp_files_after', $attach_ids );
		
		update_post_meta( $post_id, 'is_submission', true );
		
		if ( ! empty( $author ) ) {
			update_post_meta( $post_id, 'user_submit_name', $author );
		}

		if ( ! empty( $email ) ) {
			update_post_meta( $post_id, 'user_submit_email', $email );
		}

		if ( ! empty( $url ) ) {
			update_post_meta( $post_id, 'user_submit_url', $url );
		}
		
		if ( ! empty( $ip ) && ! $usp_options['disable_ip_tracking'] ) {
			update_post_meta( $post_id, 'user_submit_ip', $ip );
		}
	} else {
		$new_post['error'][] = 'post-fail';
	}
	
	return apply_filters( 'usp_new_post', $new_post );
}

function usp_get_author( $author ) {
	
	global $usp_options;
	
	$error = false;
	
	$author_id = $usp_options['author'];
	
	if ( ! empty( $author ) ) {
		
		if ( $usp_options['usp_use_author'] ) {
			
			$author_info = get_user_by( 'login', $author );
			
			if ( $author_info ) {
				
				$author_id = $author_info->ID;
				$author = get_the_author_meta( 'display_name', $author_id );
			}
		}
	} else {
		if ( $usp_options['usp_name'] == 'show' ) {
			
			$error = 'required-name';
		} else {
			$author = get_the_author_meta( 'display_name', $author_id );
		}
	}
	
	$author_data = array(
	'author'    => $author,
	'author_id' => $author_id,
	'error'     => $error
	);
	
	return $author_data;
	
}

function usp_check_images( $files, $new_post ) {
	
	global $usp_options;
	
	$temp = false;
	$errr = false;
	$error = array();
	
	if ( isset( $files['tmp_name'] ) ) {
		$temp = array_filter( $files['tmp_name'] );
	}

	if ( isset($files['error'] ) ) {
		$errr = array_filter( $files['error'] );
	}
	
	$file_count = 0;
	
	if ( ! empty( $temp ) ) {
		
		foreach ( $temp as $key => $value ) {
			if ( is_uploaded_file( $value ) ) {
				$file_count++;
			}
		}
	}
	
	if ( $usp_options['usp_images'] == 'show' ) {
		
		if ( $file_count < $usp_options['min-images'] ) {
			$error[] = 'file-min';
		}

		if ( $file_count > $usp_options['max-images'] ) {
			$error[] = 'file-max';
		}
		
		for ( $i = 0; $i < $file_count; $i++ ) {
			
			$image = @getimagesize( $temp[ $i ] );
			
			if ( false === $image ) {
				
				$error[] = 'file-type';
				break;
				
			} else {
				
				if ( isset( $temp[$i] ) && ! exif_imagetype( $temp[ $i ] ) ) {
					
					$error[] = 'file-type';
					break;
				}
				
				if ( isset( $image[0]) && ! usp_width_min( $image[0] ) ) {
					
					$error[] = 'width-min';
					break;
				}
				
				if ( isset( $image[0] ) && ! usp_width_max( $image[0] ) ) {
					
					$error[] = 'width-max';
					break;
				}
				
				if ( isset( $image[1] ) && ! usp_height_min( $image[1] ) ) {
					
					$error[] = 'height-min';
					break;
				}
				
				if ( isset( $image[1] ) && ! usp_height_max( $image[1] ) ) {
					
					$error[] = 'height-max';
					break;
				}
				
				if ( isset( $errr[ $i ] ) && $errr[ $i ] == 4 ) {
					
					$error[] = 'file-error';
					break;
				}
			}
		}
	} else {

		$files = false;
	}
	
	$file_data = array(
	'error'      => $error,
	'file_count' => $file_count
	);
	
	return $file_data;
	
}

function usp_prepare_post( $title, $content, $author_id, $author, $ip ) {
	
	global $usp_options;
	
	$post_data = array();
	$post_data['post_title']   = $title;
	$post_data['post_content'] = $content;
	$post_data['post_author']  = $author_id;
	$post_data['post_status']  = apply_filters('usp_post_status', 'pending');
	
	$numberApproved = $usp_options['number-approved'];
	
	if ( $numberApproved == 0 ) {
		
		$post_data['post_status'] = apply_filters( 'usp_post_publish', 'publish' );
		
	} elseif ( $numberApproved == -1 ) {
		
		$post_data['post_status'] = apply_filters( 'usp_post_moderate', 'pending' );
		
	} elseif ( $numberApproved == -2 ) {
		
		$post_data['post_status'] = apply_filters( 'usp_post_draft', 'draft' );
		
	} else {
		
		$posts = get_posts( array( 'post_status' => 'publish', 'meta_key' => 'user_submit_name', 'meta_value' => $author ) );
		
		$counter = 0;
		
		foreach ( $posts as $post ) {
			
			$submitterName = get_post_meta( $post->ID, 'user_submit_name', true );
			$submitterIp   = get_post_meta( $post->ID, 'user_submit_ip', true );
			
			if ( $submitterName == $author && $submitterIp == $ip ) {
				$counter++;
			}
		}
		
		if ( $counter >= $numberApproved ) {
			$post_data['post_status'] = apply_filters( 'usp_post_approve', 'publish' );
		}
		
	}
	
	return apply_filters('usp_post_data', $post_data);
}

function usp_send_mail_alert( $post_id, $title ) {
	
	global $usp_options;
	
	if ( $usp_options['usp_email_alerts'] == true ) {
		
		$blog_url   = get_bloginfo( 'url' );     // %%blog_url%%
		$blog_name  = get_bloginfo( 'name' );    // %%blog_name%%
		$post_url   = get_permalink( $post_id ); // %%post_url%%
		$admin_url  = admin_url();             // %%admin_url%%
		$post_title = $title;                  // %%post_title%%
		
		$patterns = array();
		$patterns[0]  = "/%%blog_url%%/";
		$patterns[1]  = "/%%blog_name%%/";
		$patterns[2]  = "/%%post_url%%/";
		$patterns[3]  = "/%%admin_url%%/";
		$patterns[4]  = "/%%post_title%%/";
		
		$replacements = array();
		$replacements[0]  = $blog_url;
		$replacements[1]  = $blog_name;
		$replacements[2]  = $post_url;
		$replacements[3]  = $admin_url;
		$replacements[4]  = $post_title;
		
		//
		
		$subject_default = $blog_name  . ': New user-submitted post!';
		$subject = isset( $usp_options['email_alert_subject'] ) && ! empty( $usp_options['email_alert_subject'] ) ? $usp_options['email_alert_subject'] : $subject_default;
		$subject = preg_replace( $patterns, $replacements, $subject );
		$subject = apply_filters( 'usp_mail_subject', $subject );
		
		$message_default = 'Hello, there is a new user-submitted post:' . "\r\n\n" . 'Title: ' . $post_title . "\r\n\n" . 'Visit Admin Area: ' . $admin_url;
		$message = isset( $usp_options['email_alert_message'] ) && ! empty( $usp_options['email_alert_message'] ) ? $usp_options['email_alert_message'] : $message_default;
		$message = preg_replace( $patterns, $replacements, $message );
		$message = apply_filters( 'usp_mail_message', $message );
		
		$html = isset( $usp_options['usp_email_html'] ) ? $usp_options['usp_email_html'] : false;
		$format = $html ? 'text/html' : 'text/plain';
		
		//
		
		$default = get_bloginfo( 'admin_email' );
		
		$to   = isset( $usp_options['usp_email_address'] ) && ! empty( $usp_options['usp_email_address'] ) ? $usp_options['usp_email_address'] : $default;
		$from = isset( $usp_options['usp_email_from'] )    && ! empty( $usp_options['usp_email_from'] )    ? $usp_options['usp_email_from']    : $to;
		
		$to   = explode( ',', $to );
		$from = explode( ',', $from );
		
		$address = array();
		
		foreach ( $to as $k => $v ) {
			$address[$k]['to']   = trim( $v );
		}

		foreach ( $from as $k => $v ) {
			$address[$k]['from'] = trim( $v );
		}
		
		if ( ! empty( $address[0] ) ) {
			
			foreach ( $address as $k => $v ) {
				
				$address_to   = isset( $v['to'] )   && ! empty( $v['to'] )   ? $v['to']   : $default;
				$address_from = isset( $v['from'] ) && ! empty( $v['from'] ) ? $v['from'] : $default;
				
				$headers  = 'X-Mailer: User Submitted Posts' . "\n";
				$headers .= 'From: ' . $blog_name . ' <' . $address_from . '>' . "\n";
				$headers .= 'Reply-To: ' . $blog_name . ' <' . $address_from . '>' . "\n";
				$headers .= 'Content-Type: ' . $format . '; charset=' . get_option( 'blog_charset', 'UTF-8' ) . "\n";
				
				wp_mail( $address_to, $subject, $message, $headers );
			}
		}
	}
}