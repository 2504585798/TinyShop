<?php

use yii\db\Migration;

class m230619_064744_addon_tiny_shop_common_popup_adv extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addon_tiny_shop_common_popup_adv}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT COMMENT '序号'",
            'merchant_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '商户id'",
            'name' => "varchar(50) NOT NULL DEFAULT '' COMMENT '标题'",
            'cover' => "varchar(200) NULL DEFAULT '' COMMENT '图片'",
            'view' => "int(10) unsigned NULL DEFAULT '0' COMMENT '浏览量'",
            'start_time' => "int(10) NULL DEFAULT '0' COMMENT '开始时间'",
            'end_time' => "int(10) NULL DEFAULT '0' COMMENT '结束时间'",
            'jump_link' => "varchar(150) NULL DEFAULT '' COMMENT '跳转链接'",
            'jump_type' => "varchar(30) NULL DEFAULT '' COMMENT '跳转方式'",
            'extend_link' => "json NULL COMMENT '跳转链接'",
            'popup_mode' => "tinyint(4) NULL DEFAULT '1' COMMENT '弹出方式 1:首次弹出;2:每次弹出'",
            'popup_type' => "tinyint(4) NULL DEFAULT '1' COMMENT '弹出类型 1:图片;2:优惠券'",
            'sort' => "int(10) NULL DEFAULT '0' COMMENT '优先级'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COMMENT='扩展_文章_幻灯片表'");
        
        /* 索引设置 */
        $this->createIndex('start_time','{{%addon_tiny_shop_common_popup_adv}}','start_time, end_time, status',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addon_tiny_shop_common_popup_adv}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

