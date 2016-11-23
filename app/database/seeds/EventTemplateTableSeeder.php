<?php
use App\Models\EventTemplate;
class EventTemplateTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		EventTemplate::create(array('template_name'=>'Default', 'template_url'=>'default', 'template_image'=>'assets/img/templates/default.jpg'));
		EventTemplate::create(array('template_name'=>'Business', 'template_url'=>'business', 'template_image'=>'assets/img/templates/business.jpg'));
		EventTemplate::create(array('template_name'=>'Compact', 'template_url'=>'compact', 'template_image'=>'assets/img/templates/compact.jpg'));
		EventTemplate::create(array('template_name'=>'Traditional', 'template_url'=>'traditional', 'template_image'=>'assets/img/templates/traditional.jpg'));
		EventTemplate::create(array('template_name'=>'Official', 'template_url'=>'official', 'template_image'=>'assets/img/templates/official.jpg'));
		EventTemplate::create(array('template_name'=>'Official2', 'template_url'=>'official2', 'template_image'=>'assets/img/templates/official2.jpg'));
		EventTemplate::create(array('template_name'=>'Official3', 'template_url'=>'official3', 'template_image'=>'assets/img/templates/official3.jpg'));
		EventTemplate::create(array('template_name'=>'Urban', 'template_url'=>'urban', 'template_image'=>'assets/img/templates/urban.jpg'));
		EventTemplate::create(array('template_name'=>'Wedding2', 'template_url'=>'wedding2', 'template_image'=>'assets/img/templates/wedding2.jpg'));
		EventTemplate::create(array('template_name'=>'Wedding3', 'template_url'=>'wedding3', 'template_image'=>'assets/img/templates/wedding3.jpg'));
		EventTemplate::create(array('template_name'=>'Wedding4', 'template_url'=>'wedding4', 'template_image'=>'assets/img/templates/wedding4.jpg'));
		EventTemplate::create(array('template_name'=>'Wedding5', 'template_url'=>'wedding5', 'template_image'=>'assets/img/templates/wedding5.jpg'));


	}

}
