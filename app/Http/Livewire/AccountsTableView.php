<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use App\Models\Account;

class AccountsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Account::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return ['Id', 'Name', 'Address', 'Contract Id', 'Contract Date'];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->id,
            $model->name,
            $model->address,
            $model->accountId,
            $model->contractDate
        ];
    }
}
