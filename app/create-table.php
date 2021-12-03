<?php 

require '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager;


function start($table){
    echo "creating_".$table."_table".PHP_EOL;
}

function endMigrations($table){
    echo $table."_table_successfully_created_at_". date('Y-m-d H:i:s').PHP_EOL;
}
 $tables= [
     'users',
     'customers',
     'tables',
     'categories',
     'menus',
     'carts',
     'orders',
     'invoices',
     'customers'
    ];

foreach ($tables as $table){
    if (Manager::schema()->hasTable($table)) {
        endMigrations($table);
    }else {


        // users table --this table provided for admin
        Manager::schema()->dropIfExists('users');
        Manager::schema()->create('users', function ($table) {
            start('users');
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            endMigrations('users');
        });


        //customers table
        Manager::schema()->dropIfExists('customers');
        Manager::schema()->create('customers', function ($table) {
            start('customers');
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            endMigrations('customers');
        });
        
        //customers table
        Manager::schema()->dropIfExists('customers');
        Manager::schema()->create('customers', function ($table) {
            start('customers');
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            endMigrations('customers');
        });
    }


     

}
    

   







