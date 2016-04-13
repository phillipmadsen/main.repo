<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

	/**
	 * @return mixed
	 */
	public function getFaker()
	{
		if (empty($this->faker))
		{
			$faker = Faker\Factory::create();
			$faker->addProvider(new Faker\Provider\Base($faker));
			$faker->addProvider(new Faker\Provider\Lorem($faker));
			$faker->addProvider(new Faker\Provider\en_US\Person($faker));
			$faker->addProvider(new Faker\Provider\en_US\Address($faker));
			$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
			$faker->addProvider(new Faker\Provider\en_US\Company($faker));
			$faker->addProvider(new Faker\Provider\Internet($faker));
		}

		return $this->faker = $faker;
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call(ProductsTableSeeder::class);
		$this->command->question('Products table seeded!');
		// $this->call(UserTableSeeder::class);
		// $this->command->question('Users and Profiles tables seeded!');
		// $this->call(PagesTableSeeder::class); //
		// $this->command->question('Pages table seeded!');
		// $this->call(SchemaTableSeeder::class);
		// $this->command->question('Schemas table seeded!');

		// $this->call(FaqsTableSeeder::class);
		// $this->command->question('FAQs table seeded!');

		// $this->call(AuthorTableSeeder::class);
		// $this->command->info('Authors table seeded!');

		//$this->call(UsersTableSeeder::class);
		factory(App\User::class, 10)->create();

        Model::reguard();
	}
}
