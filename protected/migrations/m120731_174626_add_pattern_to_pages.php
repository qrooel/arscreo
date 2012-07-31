<?php

class m120731_174626_add_pattern_to_pages extends CDbMigration
{
	public function safeUp()
	{
    $this->execute("ALTER TABLE pages ADD pattern VARCHAR(20);");
	}

	public function safeDown()
	{
    $this->execute("ALTER TABLE pages DROP pattern;");
	}
}
