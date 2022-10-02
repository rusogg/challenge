<?php

namespace App\Http\Livewire;

use App\Models\Discounts;
use App\Models\Regions;
use App\Models\Brands;
use App\Models\Access_types;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class DiscountsTable extends PowerGridComponent
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
    * @return Builder<\App\Models\Discounts>
    */
    public function datasource(): ?Builder
    {
        return Discounts::query()
        ->join('brands', function ($brands) {
            $brands->on('discounts.brand_id', '=', 'brands.id');
        })
        ->join('regions', function ($regions) {
            $regions->on('discounts.region_id', '=', 'regions.id');
        })
        ->join('access_types', function ($access_types) {
            $access_types->on('discounts.access_type_code', '=', 'access_types.code');
        })
        ->join('discount_ranges', function ($discount_ranges) {
            $discount_ranges->on('discounts.id', '=', 'discount_ranges.discount_id');
        })
        ->where(
            'discounts.active', '1',
        )
        ->select([
            'discounts.*',
            'brands.name as brands_name',
            'discounts.id as discounts_id',
            'discounts.start_date as start_date',
            'discounts.priority as discount_priority',
            'discounts.name as discount_name',
            'discounts.end_date as end_date',
            'access_types.name as access_types_name',
            'discount_ranges.from_days as discount_from',
            'discount_ranges.code as discount_code',
            'discount_ranges.to_days as discount_to',
            'discount_ranges.discount as discount_gsa',
            'regions.code as regions_name',
        ])
        
        
            ;
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
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */

        

    public function labels(): string
    {
        return match ($this) {
            Brands::WHERE('access_type_code = 1')         => "Activo",
            Brands::WHERE('access_type_code = 0')         => "Inactivo",
        };
    }



    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('Estado', function (Discounts $model) {
                return ($model->active ? 'Activo' : 'Inactivo');
              })
              ->addColumn('Periodo', function (Discounts $model) {
                return ($model->discount_from . "-" .  $model->discount_to);
              })
            ->addColumn('PeriodoPromo', fn (Discounts $model) => (string)Carbon::parse($model->start_date)->format('d/m/Y') . " " ."-". " " . (string)Carbon::parse($model->start_date)->format('d/m/Y')  );
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

            Column::make('Rentadora', 'brands_name')
            ->searchable()
            ->sortable()
            ->makeInputSelect(Brands::all(), 'name', 'discounts.brand_id', ['live-search' => true])
            ->visibleInExport(true)
            ,

            Column::make('Región', 'regions_name')
            ->searchable()
            ->sortable()
            ->makeInputSelect(Regions::all(), 'code', 'discounts.region_id', ['live-search' => true])
            ->visibleInExport(true),

            Column::make('Nomb.', 'discount_name')
            ->searchable()
            ->sortable()
            ->makeInputText(dataField: 'discounts.name')
            ->visibleInExport(true)
            ,

            Column::make('Tipo Acceso', 'access_types_name')
            ->searchable()
            ->sortable()
            ->visibleInExport(true)
            ,

            Column::make('Estado','Estado', 'active')
            ->searchable()
            ->sortable()
            ->visibleInExport(true),

            Column::make('Periodo', 'Periodo')
            ->searchable()
            ->sortable()
            ->visibleInExport(true),

            Column::make('AWD/BCD', 'discount_code')
            ->searchable()
            ->sortable()
            ->makeInputText(dataField: 'discount_ranges.code')
            ->visibleInExport(true),

            Column::make('Desc GSA', 'discount_gsa')
            ->searchable()
            ->sortable()
            ->visibleInExport(true),

            Column::make('Periodo de Promo', 'PeriodoPromo')
            ->searchable()
            ->sortable()
            ->visibleInExport(true),

            Column::make('Prioridad', 'discount_priority')
            ->searchable()
            ->sortable()
            ->visibleInExport(true),

            

            

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Discounts Action Buttons.
     *
     * @return array<int, Button>
     */

    
    public function actions(): array
    {
       return [
           Button::make('edit', 'Editar')
               ->class(' btn btn-warning cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('formulario.edit', ['discounts_id']),

               Button::make('delete', 'Borrar')
               ->class(' btn btn-danger cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('formulario.show', ['discounts_id']),

          
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
     * PowerGrid Discounts Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($discounts) => $discounts->id === 1)
                ->hide(),
        ];
    }
    */
}
