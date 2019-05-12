<?php
    require 'config.php';

    use Illuminate\Database\Eloquent\Model;

    class Customer extends Model
    {
        public $timestamps = false;
    }

    $customer = new Customer();
    $customer->first_name = 'John';
    $customer->last_name = 'Titor';
    $customer->company = 'Company ABC';
    $customer->save();

    $customers = Customer::where('first_name', 'John')->get();

    foreach ($customers as $customer)
    {
        echo "First Name: " . $customer->first_name . "<br>";
        echo "Last Name: " . $customer->last_name . "<br>";
        echo "Company: " . $customer->company . "<br>";
        echo "<br>";
    }

    Customer::where('first_name', 'John')
            ->where('last_name', 'Titor')
            ->delete();

