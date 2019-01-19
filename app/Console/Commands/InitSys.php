<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class InitSys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:sys';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A command to init system setup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage users']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $role = Role::create(['name' => 'editor']);
        $permission = Permission::create(['name' => 'manage certificates']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $user_one = User::create([
            'name' => 'Dennis Chebon',
            'email' => 'chebon85@gmail.com',
            'password' => Hash::make('bonches'),
        ]);

        User::create([
            'name' => 'Derrick Rono',
            'email' => 'derrickrono@gmail.com',
            'password' => Hash::make('derrickrono'),
        ]);

        User::create([
            'name' => 'Omron Blauo',
            'email' => 'omronblauo@gmail.com',
            'password' => Hash::make('omronblauo'),
        ]);


        User::create([
            'name' => 'Lorraine Raine',
            'email' => 'lorraine@gmail.com',
            'password' => Hash::make('lorraine'),
        ]);

        User::create([
            'name' => 'Editor One',
            'email' => 'editorone@gmail.com',
            'password' => Hash::make('editorone'),
        ]);

        User::create([
            'name' => 'Editor Two',
            'email' => 'editortwo@gmail.com',
            'password' => Hash::make('editortwo'),
        ]);

        User::create([
            'name' => 'Editor Three',
            'email' => 'editorthree@gmail.com',
            'password' => Hash::make('editorthree'),
        ]);

        $users = User::all();

        foreach ($users as $user) {
            if ($user->id <= 4) {
                $user->assignRole('admin');
                continue;
            } else {
                $user->assignRole('editor');
            }
        }
    }
}
