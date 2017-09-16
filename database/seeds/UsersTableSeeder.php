<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'admin',
                'email' => 'admin@mct.com',
                'password' => '$2y$10$M8VE7IRZtlqcmHp9hW12OO1LEgQLA0YxjhUbO./dfyAwexKhI4Dim',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-07-02 18:55:14',
                'updated_at' => '2017-07-02 18:55:14',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Dany',
                'email' => 'Dany@yahoo.com',
                'password' => '$2y$10$3Oill1eP5hY8nudznGPTEeBkh6GiU1A3f0fhICVgipnMYZb.V7NBS',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-07-03 19:35:38',
                'updated_at' => '2017-07-03 19:35:38',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Linha',
                'email' => 'linha@k2.com',
                'password' => '$2y$10$yFR7yHQPxj4ifikjjuZd0eq2JSJ0nJrtQfodEyD/Gu4QOqQCG8vqm',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-07-03 19:36:23',
                'updated_at' => '2017-07-03 19:36:23',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'darrath',
                'email' => 'darrath@k2.com',
                'password' => '$2y$10$kcRe8t4kM66QrdB4EzTGsOowU/TVqkrTzdAVq0QH6nPO45eW9qoCK',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-07-03 19:37:00',
                'updated_at' => '2017-07-03 19:37:00',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'reach',
                'email' => 'reach@k2.com',
                'password' => '$2y$10$brD4/5sSEwi4gDx1mvOHSushWXhPkAEmr468F26koRrk4G.kXPki2',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2017-07-03 19:37:21',
                'updated_at' => '2017-07-03 19:37:21',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'sale',
                'email' => 'sale@k2.com',
                'password' => '$2y$10$yOr205vLyMxiaM.TrxX2vOGvAQyFS2WFqS8JQ86bYZVqNHfz29gsC',
                'role' => 'user',
                'remember_token' => NULL,
                'created_at' => '2017-07-03 19:41:25',
                'updated_at' => '2017-07-03 19:41:25',
            ),
        ));
        
        
    }
}