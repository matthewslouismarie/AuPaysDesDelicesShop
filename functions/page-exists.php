<?php

function page_exists( $slug ) {
	return null !== get_page_by_path( $slug );
}