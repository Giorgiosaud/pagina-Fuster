<?php

class PrinciplesTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table('principles')->truncate();

		$principle              = new Principle;
		$principle->name        = 'Humildad';
		$principle->description = 'Significa, sencillamente, que no siempre tenemos la razón ni conocemos todas las respuestas. Ofrecer nuestra ayuda a un empleado y pedírsela cuando la necesitamos nos convierte en un equipo más unido y humano.';
		$principle->order       = '1';
		$principle->save();
		$principle              = new Principle;
		$principle->name        = 'Conviccion';
		$principle->description = 'Significa, sencillamente, que no siempre tenemos la razón ni conocemos todas las respuestas. Ofrecer nuestra ayuda a un empleado y pedírsela cuando la necesitamos nos convierte en un equipo más unido y humano.';
		$principle->order       = '2';
		$principle->save();
		$principle              = new Principle;
		$principle->name        = 'Creacion';
		$principle->description = 'Significa, sencillamente, que no siempre tenemos la razón ni conocemos todas las respuestas. Ofrecer nuestra ayuda a un empleado y pedírsela cuando la necesitamos nos convierte en un equipo más unido y humano.';
		$principle->order       = '3';
		$principle->save();
		$principle              = new Principle;
		$principle->name        = 'Mejora Continua';
		$principle->description = 'Significa, sencillamente, que no siempre tenemos la razón ni conocemos todas las respuestas. Ofrecer nuestra ayuda a un empleado y pedírsela cuando la necesitamos nos convierte en un equipo más unido y humano.';
		$principle->order       = '4';
		$principle->save();

		// Uncomment the below to run the seeder
		// DB::table('principles')->insert($principles);
	}

}
