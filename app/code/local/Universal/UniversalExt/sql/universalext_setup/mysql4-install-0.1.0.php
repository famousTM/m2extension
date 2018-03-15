<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table user(user_id int not null auto_increment, name varchar(100), primary key(user_id));
    insert into user values(1,'user1');
    insert into user values(2,'user2');
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 