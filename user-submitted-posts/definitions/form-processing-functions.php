<?php

if ( ! defined( 'USP_INIT_FILE_REQUIRED' ) ) {
	die( "USP init file must be included before any other file." );
}

require( USP_FORM_EXTRACTING_FUNCTIONS_PATH );

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

function usp_get_post_id_from_result( array $result ) {
	if ( isset( $result['id'] ) ) {
		return $result['id'];
	} else {
		return false;
	}
}

function usp_get_error_from_result( array $result ) {
	if ( isset( $result['error']) ) {
		return array_filter( array_unique ( $result['error'] ) );
	} else {
		return false;
	}
}

function usp_get_errors_from_result( array $result ) {
	$error = usp_get_error_from_result( $result );
	
	if ( false !== $error ) {
		$errors_array = implode( ',', $error );
		$errors_array = trim( $errors_array, ',' );
		return $errors_array;
	} else {
		return 'error';
	}
}

function usp_redirect( $post, $post_id, $errors ) {
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
			$redirect = add_query_arg( array( 'usp_redirect' => '1', 'usp-error' => $errors ), $redirect );
		} else {
			$redirect = $_SERVER['REQUEST_URI'];
			$redirect = remove_query_arg( array( 'success', 'post_id'), $redirect );
			$redirect = add_query_arg( array( 'usp-error' => $errors ), $redirect );
		}
		do_action('usp_submit_error', $redirect);
	}
	wp_redirect( esc_url_raw( $redirect ) );
}

function usp_check_for_public_submission() {

	$title = usp_get_title_from_post_request( $_POST );
	$ip = sanitize_text_field( usp_get_ip_address() );
	$files = usp_get_files_from_post_request( $_POST );
	$author   = usp_get_author_username_from_post_request( $_POST );
	$url      = usp_get_author_url_from_post_request( $_POST );
	$email    = usp_get_email_from_post_request( $_POST );
	$tags     = usp_get_tags_from_post_request( $_POST );
	$captcha  = usp_get_captcha_from_post_request( $_POST );
	$verify   = usp_get_human_verification_from_post_request( $_POST );
	$content  = usp_get_content_from_post_request( $_POST );
	$category = usp_get_category_from_post_request( $_POST );
	
	$result = usp_create_public_submission( $title, $files, $ip, $author, $url, $email, $tags, $captcha, $verify, $content, $category );
	
	$post_id = usp_get_post_id_from_result( $result );
	$errors = usp_get_errors_from_result( $result );

	usp_redirect( $_POST, $post_id, $errors );

	exit();
}

function usp_check_required( $field ) {
	
	if ( USP_OPTIONS[$field] === 'show' ) {
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

	// check errors
	$new_post = array( 'id' => false, 'error' => false );
	
	$author_data        = usp_get_author( $author );
	$author             = $author_data['author'];
	$author_id          = $author_data['author_id'];
	$new_post['error'][] = $author_data['error'];
	
	$file_data          = usp_check_images( $files, $new_post );
	$file_count         = $file_data['file_count'];
	$new_post['error']   = array_unique( array_merge( $file_data['error'], $new_post['error'] ) );
	
	if ( isset( USP_OPTIONS['usp_title'] ) && USP_OPTIONS['usp_title']  == 'show' && empty( $title ) ) {
		$new_post['error'][] = 'required-title';
	}

	if ( isset( USP_OPTIONS['usp_url'] ) && USP_OPTIONS['usp_url'] == 'show' && empty( $url ) ) {
		$new_post['error'][] = 'required-url';
	}

	if ( isset( USP_OPTIONS['usp_tags'] ) && USP_OPTIONS['usp_tags'] == 'show' && empty( $tags ) ) {
		$new_post['error'][] = 'required-tags';
	}

	if ( isset( USP_OPTIONS['usp_category'] ) && USP_OPTIONS['usp_category'] == 'show' && empty ($category ) ) {
		$new_post['error'][] = 'required-category';
	}

	if ( isset( USP_OPTIONS['usp_content'] ) && USP_OPTIONS['usp_content'] == 'show' && empty( $content ) ) {
		$new_post['error'][] = 'required-content';
	}

	if ( isset( USP_OPTIONS['usp_email'] ) && USP_OPTIONS['usp_email'] != 'hide' && !usp_validateEmail( $email ) ) {
		$new_post['error'][] = 'required-email';
	}
	
	if ( isset( USP_OPTIONS['titles_unique']) && USP_OPTIONS['titles_unique'] && ! usp_check_duplicates( $title ) ) {
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
		
		// usp_send_mail_alert( $post_id, $title );
		
		do_action( 'usp_files_before', $files );
		
		$attach_ids = array();
		
		if ( $files && $file_count > 0 ) {
			
			usp_include_deps();
			
			for ( $i = 0; $i < $file_count; $i++ ) {
				$key = apply_filters( 'usp_file_key', USP_IMAGE_INPUT_NAME . '-{$i}' );
				
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
		
		if ( ! empty( $ip ) && ! USP_OPTIONS['disable_ip_tracking'] ) {
			update_post_meta( $post_id, 'user_submit_ip', $ip );
		}
	} else {
		$new_post['error'][] = 'post-fail';
	}
	
	return apply_filters( 'usp_new_post', $new_post );
}

function usp_get_author( $author ) {
	
	$error = false;
	
	$author_id = USP_OPTIONS['author'];
	
	if ( ! empty( $author ) ) {
		
		if ( USP_OPTIONS['usp_use_author'] ) {
			
			$author_info = get_user_by( 'login', $author );
			
			if ( $author_info ) {
				
				$author_id = $author_info->ID;
				$author = get_the_author_meta( 'display_name', $author_id );
			}
		}
	} else {
		if ( USP_OPTIONS['usp_name'] == 'show' ) {
			
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
	
	if ( USP_OPTIONS['usp_images'] == 'show' ) {
		
		if ( $file_count < USP_OPTIONS['min-images'] ) {
			$error[] = 'file-min';
		}

		if ( $file_count > USP_OPTIONS['max-images'] ) {
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
	
	$post_data = array();
	$post_data['post_title']   = $title;
	$post_data['post_content'] = $content;
	$post_data['post_author']  = $author_id;
	$post_data['post_status']  = apply_filters('usp_post_status', 'pending');
	
	$numberApproved = USP_OPTIONS['number-approved'];
	
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
	
	if ( USP_OPTIONS['usp_email_alerts'] == true ) {
		
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
		$subject = isset( USP_OPTIONS['email_alert_subject'] ) && ! empty( USP_OPTIONS['email_alert_subject'] ) ? USP_OPTIONS['email_alert_subject'] : $subject_default;
		$subject = preg_replace( $patterns, $replacements, $subject );
		$subject = apply_filters( 'usp_mail_subject', $subject );
		
		$message_default = 'Hello, there is a new user-submitted post:' . "\r\n\n" . 'Title: ' . $post_title . "\r\n\n" . 'Visit Admin Area: ' . $admin_url;
		$message = isset( USP_OPTIONS['email_alert_message'] ) && ! empty( USP_OPTIONS['email_alert_message'] ) ? USP_OPTIONS['email_alert_message'] : $message_default;
		$message = preg_replace( $patterns, $replacements, $message );
		$message = apply_filters( 'usp_mail_message', $message );
		
		$html = isset( USP_OPTIONS['usp_email_html'] ) ? USP_OPTIONS['usp_email_html'] : false;
		$format = $html ? 'text/html' : 'text/plain';
		
		//
		
		$default = get_bloginfo( 'admin_email' );
		
		$to   = isset( USP_OPTIONS['usp_email_address'] ) && ! empty( USP_OPTIONS['usp_email_address'] ) ? USP_OPTIONS['usp_email_address'] : $default;
		$from = isset( USP_OPTIONS['usp_email_from'] )    && ! empty( USP_OPTIONS['usp_email_from'] )    ? USP_OPTIONS['usp_email_from']    : $to;
		
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

/**
 * Determines if the GET request follows a successful USP submission.
 * 
 * @since 1.0.0
 * 
 * @global array $_GET Details about the GET request.
 * 
 * @return bool True if it follows a successful USP POST request, false
 * otherwise.
 */
function usp_is_successful_submission(): bool {
	if ( isset( $_GET['success'] ) && $_GET['success'] == '1' ) {
		return true;
	} else {
		return false;
	}
}