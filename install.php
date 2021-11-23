<?php

{
    $Object = new ExtensionCommon;

    $Object -> sqlQuery(
        "CREATE TABLE VersionSoftware (
        ID INTEGER NOT NULL AUTO_INCREMENT, 
        HARDWARE_ID INTEGER NOT NULL,
        COLUMN_1 INTEGER NOT NULL,
        COLUMN_2 VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY (ID,HARDWARE_ID)) ENGINE=INNODB;"
    );
}

function extension_delete_example()
{
    $Object = new ExtensionCommon;
    $Object -> sqlQuery("DROP TABLE IF EXISTS `VersionSoftware`");
}

function extension_upgrade_example()
{

}

?>