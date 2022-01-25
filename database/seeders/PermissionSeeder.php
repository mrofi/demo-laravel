<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPermission('cms.articles');
    }

    protected function createPermission(string $baseRouteName)
    {
        $actions = [
            'index', // datatable
            'create',
            'update',
            'delete',
            'view',
            'force_delete',
            'restore',
        ];

        foreach ($actions as $action) {
            Permission::findOrCreate($baseRouteName . '.' . $action);
        }
    }
}
