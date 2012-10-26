<?php
/**
 * params-private.php
 *
 * Common parameters for the application on private -your local environment
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 1:41 PM
 */
/**
 * Replace following tokens for correspondent configuration data
 *
 * {DATABASE-NAME} ->   database name
 * {DATABASE-HOST} -> database server host name or ip address
 * {DATABASE-USERNAME} -> user name access
 * {DATABASE-PASSWORD} -> user password
 *
 * {DATABASE-TEST-NAME} ->   Test database name
 * {DATABASE-TEST-HOST} -> Test database server host name or ip address
 * {DATABASE-USERNAME} -> Test user name access
 * {DATABASE-PASSWORD} -> Test user password
 */
return array(
	'env.code' => 'private',
        'local.path' => '',
	// DB connection configurations
	'db.name' => 'speedelo',
	'db.connectionString' => 'mysql:host=localhost;dbname=speedelo',
	'db.username' => 'root',
	'db.password' => '',

	// test database {
	'testdb.name' => 'speedelo_test',
	'testdb.connectionString' => 'mysql:host=localhost;dbname=speedelo_test',
	'testdb.username' => 'root',
	'testdb.password' => '',

);
