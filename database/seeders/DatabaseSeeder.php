<?php

namespace Database\Seeders;

use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $this->call(AdminNotificationsTableSeeder::class);
        $this->call(AdminPasswordResetsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(BidsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DepositsTableSeeder::class);
        $this->call(EmailLogsTableSeeder::class);
        $this->call(EmailSmsTemplatesTableSeeder::class);
        $this->call(ExtensionsTableSeeder::class);
        $this->call(FrontendsTableSeeder::class);
        $this->call(GatewayCurrenciesTableSeeder::class);
        $this->call(GatewaysTableSeeder::class);
        $this->call(GeneralSettingsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MerchantPasswordResetsTableSeeder::class);
        $this->call(MerchantsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(SmsGatewaysTableSeeder::class);
        $this->call(SupportAttachmentsTableSeeder::class);
        $this->call(SupportMessagesTableSeeder::class);
        $this->call(SupportTicketsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(UserLoginsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(WinnersTableSeeder::class);
        $this->call(WithdrawMethodsTableSeeder::class);
        $this->call(WithdrawalsTableSeeder::class);

        Product::factory(1000)->cars()->create();
        Product::factory(10)->jewerly()->create();
        Product::factory(20)->cars()->expired()->create();
        Product::factory(20)->jewerly()->expired()->create();

        foreach(range(1,4) as $i => $b){
            User::factory(1)->bidders($i+1)->create();
            Merchant::factory(1)->merchants($i+1)->create();
        }
    }
}
