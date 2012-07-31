<?php

class m120731_192519_add_menu_header_to_pages extends CDbMigration
{

	public function safeUp()
	{
    $this->execute("ALTER TABLE pages ADD menu_header VARCHAR(40);");
	}

	public function safeDown()
	{
    $this->execute("ALTER TABLE pages DROP menu_header;");
	}
}
