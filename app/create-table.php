<?php 

require '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;


function start($table){
    echo "creating_".$table."_table".PHP_EOL;
}

function endMigrations($table){
    echo $table."_table_successfully_created_at_". date('Y-m-d H:i:s').PHP_EOL;
}
 $tables= [
     'admins',

     'categories',
     'menus',
     'carts',
     'invoices',
     'tables',
     'orders',
     'ratings'
    ];

foreach ($tables as $table){
    if (Manager::schema()->hasTable($table)) {
         endMigrations($table);
    }else {


        // users table --this table provided for admin
        Manager::schema()->dropIfExists('admins');
        Manager::schema()->create('admins', function (Blueprint $table) {
            start('admins');
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            endMigrations('admins');
        });


        //customers table
        Manager::schema()->dropIfExists('customers');
        Manager::schema()->create('customers', function (Blueprint $table) {
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
        
        //categories table
        Manager::schema()->dropIfExists('categories');
        Manager::schema()->create('categories', function (Blueprint $table) {
            start('categories');
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('slug')->unique();
            $table->timestamps();
            endMigrations('categories');
        });

        //menus table
        Manager::schema()->dropIfExists('menus');
        Manager::schema()->create('menus', function (Blueprint $table) {
            start('menus');
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('category_id');
            $table->text('description');
            $table->bigInteger('price');
            $table->enum('stock',array('tersedia','habis'))->default('tersedia');
            $table->integer('discount');
            $table->integer('sold');
            $table->integer('rating');
            $table->timestamps();

            //relationship category
            $table->foreign('category_id')->references('id')->on('categories');
            endMigrations('menus');
        });


        //carts table
        Manager::schema()->dropIfExists('carts');
        Manager::schema()->create('carts', function (Blueprint $table) {
            start('carts');
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('customer_id');
            $table->integer('qty');
            $table->bigInteger('price');
            $table->timestamps();

            //relationship menu
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('customer_id')->references('id')->on('customers');
            endMigrations('carts');
        });

        //invoices table
        Manager::schema()->dropIfExists('invoices');
        Manager::schema()->create('invoices', function (Blueprint $table) {
            start('invoices');
            $table->id();
            $table->string('invoice');
            $table->unsignedBigInteger('customer_id');
            $table->enum('status',array('pending','success','expired','failed'));
            $table->bigInteger('grand_total');
            $table->string('snap_token')->nullable();
            $table->timestamps();


                    //relationship customer
            $table->foreign('customer_id')->references('id')->on('customers');
            endMigrations('invoices');
        });

        //tables table
        Manager::schema()->dropIfExists('tables');
        Manager::schema()->create('tables', function (Blueprint $table) {
            start('tables');
            $table->id();
            $table->string('table');
            $table->timestamps();
            endMigrations('tables');
        });

        Manager::schema()->dropIfExists('orders');
        Manager::schema()->create('orders', function (Blueprint $table) {
            start('orders');
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('menu_id');
            $table->enum('status',array('dikonfirmasi','diproses','diantar','ditolak'));
            $table->integer('qty');
            $table->bigInteger('price');
            $table->timestamps();

            //relationship menu
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('invoice_id')->references('id')->on('invoices');
            endMigrations('orders');
        });

        Manager::schema()->dropIfExists('ratings');
        Manager::schema()->create('ratings', function (Blueprint $table) {
            start('ratings');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('customer_id');
            $table->integer('rating');
            $table->timestamps();


            //relationship product
            $table->foreign('menu_id')->references('id')->on('menus');

            //relationship order
            $table->foreign('order_id')->references('id')->on('orders'); 
                    
            //relationship customer
            $table->foreign('customer_id')->references('id')->on('customers');
            endMigrations('ratings');
        });
    }
}