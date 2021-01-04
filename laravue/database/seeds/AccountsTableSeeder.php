<?php

use Illuminate\Database\Seeder;
use App\Laravue\Acl;
use App\Laravue\Models\Role;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountList = [
            "1234567890",
            "1234567891",
            "1234567892",
            "1234567893",
            "1234567894",
            "1234567895",
            "1234567896",
            "1234567897",
            "1234567898",
            "1234567899",
        ];

        foreach ($accountList as $fullAccount) {
            $account_no = (int)$fullAccount;
            $account = \App\Laravue\Models\Account::create([
                'client_id' => 'Null',
                'account_no' => $account_no,
            ]);
        }
    }
}
