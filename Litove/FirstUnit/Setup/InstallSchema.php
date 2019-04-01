<?php
namespace Litove\FirstUnit\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     * @SuppressWarnings(PMD.UnusedFormalParameter)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        if ($installer->tableExists('litove_firstunit_table')) {
            return;
        }

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('litove_firstunit_table'))
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