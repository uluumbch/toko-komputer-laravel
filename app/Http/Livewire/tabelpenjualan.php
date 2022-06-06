<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{
    Button,
    Column,
    Exportable,
    Footer,
    Header,
    PowerGrid,
    PowerGridComponent,
    PowerGridEloquent
};

final class tabelpenjualan extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Penjualan>
     */
    public function datasource(): Builder
    {
        return Penjualan::query()->join('barang', 'penjualan.barang_id', '=', 'barang.id')
            ->select('penjualan.*', 'barang.nama as nama', 'barang.harga as harga_barang');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('nama')
            ->addColumn('harga_barang')
            ->addColumn('harga_jual', function (Penjualan $penjualan) {
                return "Rp" . number_format($penjualan->harga_jual, 0, ',', '.');
            })
            ->addColumn('total_harga', function (Penjualan $penjualan) {
                return "Rp" . number_format($penjualan->total_harga, 0, ',', '.');
            })
            ->addColumn('jumlah')
            ->addColumn('laba', function (Penjualan $penjualan) {
                return "Rp" . number_format($penjualan->laba, 0, ',', '.');
            })
            ->addColumn('created_at')
            ->addColumn('created_at_formatted', fn (Penjualan $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Nama', 'nama')
                ->searchable()
                ->makeInputText('nama')
                ->sortable(),
            Column::make('Harga Barang', 'harga_barang')
                ->sortable(),

            Column::make('Harga Jual', 'harga_jual',)
                ->sortable(),

            Column::make('Total Harga', 'total_harga')
                ->sortable(),

            Column::make('Jumlah ', 'jumlah')
                ->sortable(),

            Column::make('laba', 'laba')
                ->sortable(),

            Column::make('Created at', 'created_at')
                ->hidden(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->makeInputDatePicker('penjualan.created_at')
                ->searchable()
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Penjualan Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            //    Button::make('edit', 'Edit')
            //        ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //        ->route('penjualan.edit', ['penjualan' => 'id']),

            Button::make('destroy', 'Delete')
                ->target('')
                ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
                ->route('penjualan.destroy', ['penjualan' => 'id'])
                ->method('delete')
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Penjualan Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($penjualan) => $penjualan->id === 1)
                ->hide(),
        ];
    }
    */
}
