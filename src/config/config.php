<?php
	$config = array(
		'jxglurl' => 'http://113.9.158.130/',	
		'mysql_host'=>getenv('MYSQL_PORT_3306_TCP_ADDR'),
		'mysql_port'=>getenv('MYSQL_PORT_3306_TCP_PORT'),
		'mysql_user'=>getenv('MYSQL_USERNAME'),
		'mysql_pass'=>getenv('MYSQL_PASSWORD'),
		'mysql_db'=>getenv('MYSQL_INSTANCE_NAME'),
        'weixin_token'=>getenv('WEIXIN_TOKEN'),
	);
?>
