<?php

function display_custom_style() {
?>
<style type="text/css"> <?= osetin_get_field('custom_css_styles', 'option') ?></style>
<?php
}