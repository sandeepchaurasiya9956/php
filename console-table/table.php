<?php
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Sandeep')
       ->addColumn('Sandeep@gmail.com')
    ->addRow()
        ->addColumn('Akash')
        ->addColumn('1002')
        ->addColumn('akash@gmail.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('Vipin')
        ->addColumn('Vipin@gmail.com')
    ->display()
;
?>