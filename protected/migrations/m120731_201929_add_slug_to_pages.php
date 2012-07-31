<?php

class m120731_201929_add_slug_to_pages extends CDbMigration
{
	public function safeUp()
	{
    $this->execute("ALTER TABLE pages ADD slug VARCHAR(40);");
	}

	public function safeDown()
	{
    $this->execute("ALTER TABLE pages DROP slug;");
	}

}
