<?php

class ServicesTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table('services')->truncate();

		$service              = new Service;
		$service->order       = '1';
		$service->size        = 'alto';
		$service->name        = 'Process Optimization';
		$service->shortName   = 'processOptimization';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '4';
		$service->size        = 'alto';
		$service->name        = 'Management System';
		$service->shortName   = 'managementSystem';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '5';
		$service->size        = 'alto';
		$service->name        = 'Training Groups & Individuals';
		$service->shortName   = 'trainingGroupsIndividuals';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '8';
		$service->size        = 'alto';
		$service->name        = 'Equipment Inspection';
		$service->shortName   = 'eqInspection';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '2';
		$service->size        = 'bajo';
		$service->name        = 'Cost Reduction';
		$service->shortName   = 'costReduction';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '3';
		$service->size        = 'bajo';
		$service->name        = 'Auditing';
		$service->shortName   = 'Auditing';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '6';
		$service->size        = 'bajo';
		$service->name        = 'Gis';
		$service->shortName   = 'gis';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();
		$service              = new Service;
		$service->order       = '7';
		$service->size        = 'bajo';
		$service->name        = 'Ohs Consultancy';
		$service->shortName   = 'ohsConsultancy';
		$service->description = 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ';
		$service->save();

		// Uncomment the below to run the seeder
		// DB::table('services')->insert($services);
	}

}
