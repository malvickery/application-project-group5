<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class assignRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:assign';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates users and assigned roles ';

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
        $instructor = User::create([
            "name" => "Instructor",
            "email" => "instructor@track3.com",
            "password" => bcrypt("password"),
        ]);

        $student = User::create([
            "name" => "Student",
            "email" => "student@track3.com",
            "password" => bcrypt("password"),
        ]);

        $admin = User::create([
            "name" => "Admin",
            "email" => "admin@track3.com",
            "password" => bcrypt("password"),
        ]);

        $instructor->assignRole("instructor");
        $student->assignRole("student");
        $admin->assignRole("admin");
    }
}
