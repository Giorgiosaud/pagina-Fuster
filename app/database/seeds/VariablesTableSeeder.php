<?php

class VariablesTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table('variables')->truncate();

		$variable              = new Variable;
		$variable->name        = 'Shortdescription';
		$variable->description = 'We offer consultancy in operational process optimisation for the oil and gas, mining and construction industry, integrating environmental and safety ca';
		$variable->save();
		$variable              = new Variable;
		$variable->name        = 'Description';
		$variable->description = '<p><strong>FUSTER</strong> IS A GROUP OF DEVELOPMENT PROFESSIONALS WITH EXPERIENCE IN THE RESOURCES INDUSTRY.</p>';
		$variable->save();
		$variable              = new Variable;
		$variable->name        = 'Address';
		$variable->description = '<p style="text-align: left;" data-mce-style="text-align: left;">+61(08)9221 5928</p><p style="text-align: left;" data-mce-style="text-align: left;">fuster@fusterpl.com</p><p style="text-align: left;" data-mce-style="text-align: left;">1307/237 Adelaide Tce, Perth, WA 6000, AU</p>';
		$variable->save();

		// Uncomment the below to run the seeder
		// DB::table('variables')->insert($variables);
	}

}
