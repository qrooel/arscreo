<?php

class m120801_095536_create_pictures_table extends CDbMigration
{
	public function safeUp()
	{
    $this->createTable('pictures', 
      [
      'id'          => 'pk',
      'file_name'   => 'string',
      'extension'   => 'string',
      'size'        => 'string',
      'mime_type'   => 'string',
      'description' => 'string',

      'created_at'  => 'datetime',
      'updated_at'  => 'datetime',
      ]
    );
	}

	public function safeDown()
	{
    $this->dropTable('pictures');
	}
}
