<?php

class m120731_151314_pages extends CDbMigration
{
	public function safeUp()
	{
    $this->createTable('pages', 
      [
      'id' => 'pk',
      'header' => 'text',
      'content' => 'text',
      'seo_title' => 'text',
      'seo_keywords' => 'text',
      'seo_description' => 'text',

      'created_at' => 'datetime',
      'updated_at' => 'datetime',
      ]
    );
	}

	public function safeDown()
	{
    $this->dropTable('pages');
	}

}
