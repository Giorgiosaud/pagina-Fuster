<?php

class ProjectsTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table('projects')->truncate();

		$project              = new Project;
		$project->name        = 'Project 1';
		$project->description = 'Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ';
		$project->order       = '1';
		$project->save();
		$project              = new Project;
		$project->name        = 'Project 2';
		$project->description = 'Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ';
		$project->order       = '2';
		$project->save();
		$project              = new Project;
		$project->name        = 'Project 3';
		$project->description = 'Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ';
		$project->order       = '3';
		$project->save();
		$project              = new Project;
		$project->name        = 'Project 4';
		$project->description = 'Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor Lorem Ipsum Dolor ';
		$project->order       = '4';
		$project->save();

		// Uncomment the below to run the seeder
		// DB::table('projects')->insert($projects);
	}

}
