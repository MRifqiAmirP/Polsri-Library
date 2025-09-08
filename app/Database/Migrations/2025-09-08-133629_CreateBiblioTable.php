<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBiblioTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'biblio_id'        => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'gmd_id'           => ['type' => 'INT', 'constraint' => 3, 'null' => true],
            'title'            => ['type' => 'TEXT', 'null' => false],
            'sor'              => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
            'edition'          => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'isbn_issn'        => ['type' => 'VARCHAR', 'constraint' => 32, 'null' => true],
            'publisher_id'     => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'publish_year'     => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'collation'        => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'series_title'     => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
            'call_number'      => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'language_id'      => ['type' => 'CHAR', 'constraint' => 5, 'default' => 'en'],
            'source'           => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
            'publish_place_id' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'classification'   => ['type' => 'VARCHAR', 'constraint' => 40, 'null' => true],
            'notes'            => ['type' => 'TEXT', 'null' => true],
            'image'            => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'file_att'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'opac_hide'        => ['type' => 'SMALLINT', 'constraint' => 1, 'default' => 0],
            'promoted'         => ['type' => 'SMALLINT', 'constraint' => 1, 'default' => 0],
            'labels'           => ['type' => 'TEXT', 'null' => true],
            'frequency_id'     => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'spec_detail_info' => ['type' => 'TEXT', 'null' => true],
            'content_type_id'  => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'media_type_id'    => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'carrier_type_id'  => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'input_date'       => ['type' => 'DATETIME', 'null' => true],
            'last_update'      => ['type' => 'DATETIME', 'null' => true],
            'uid'              => ['type' => 'INT', 'constraint' => 11, 'null' => true],
        ]);

        $this->forge->addKey('biblio_id', true);
        $this->forge->createTable('biblio');
    }

    public function down()
    {
        //
    }
}
