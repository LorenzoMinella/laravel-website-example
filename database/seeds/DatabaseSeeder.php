<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(FaqCategorySeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(FormTableSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(GlosarySeeder::class);

    }
}
