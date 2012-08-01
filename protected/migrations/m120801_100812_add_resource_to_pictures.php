<?php

class m120801_100812_add_resource_to_pictures extends CDbMigration
{
	public function safeUp()
	{
    $this->execute("ALTER TABLE pictures ADD resource_type VARCHAR(40);");
    $this->execute("ALTER TABLE pictures ADD resource_id VARCHAR(40);");
	}

	public function safeDown()
	{
    $this->execute("ALTER TABLE pictures DROP resource_type;");
    $this->execute("ALTER TABLE pictures DROP resource_id;");
	}
}
