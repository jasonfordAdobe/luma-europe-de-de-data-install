<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Jason\LumaEuropeDEDE\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;

class Install implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
        /**
         * $this->process->loadFiles(<name of module>,<data files directory (defaults to fixtures)>
         *
         * the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         */

        $this->process->loadFiles('Jason_LumaEuropeDEDE','fixtures');

    }

    public static function getDependencies()
    {
        return [InstallStore::class];
    }

    public function getAliases()
    {
        return [];
    }
}