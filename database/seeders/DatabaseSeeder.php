<?php

namespace Database\Seeders;

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
    }
}
