<?php
namespace Litove\FirstUnit\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     * @SuppressWarnings(PMD.UnusedFormalParameter)
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {

        if (version_compare($context->getVersion(), '1.0.2') < 0) {

            $installer = $setup;

            $installer->startSetup();

            $table = $installer->getConnection()
                ->newTable($installer->getTable('litove_firstunit_table_102'))
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary'  => true,
                    ],
                    'Entity Id'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Name'
                )
                ->setComment('Litove FirstUnit Table')
            ;

            $installer->getConnection()->createTable($table);

            $installer->endSetup();
        }

    }
}