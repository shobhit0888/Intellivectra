<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    private $model;

    public function __construct() {
        $this->model = "'category'";
    }
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addIndexColumn()

        ->addColumn('action', function($row){

            return ' <a href="'.route('category.edit',$row->id).'" class="edit" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="trash-btn" onClick="deleteConfirmation('.$row->id.','.$this->model.')" title="Delete">
                <i class="fas fa-trash"></i>
            </a>';
        })
        ->editColumn('name', function ($row) {
            return ucfirst($row->name) ;
        })

        ->editColumn('is_active', function ($row) {
            $check = '';
            if($row->is_active){
                $check = 'checked';
            }
            return '  <div class="cust_management"> <div class="toggle-switch">
                <label for="cb-switch_'.$row->id.'">
                <input type="checkbox" id="cb-switch_'.$row->id.'"  onchange="statusChange('.$row->id.','.$this->model.')" value="" '.$check.'>
                <span>
                    <small></small>
                </span>
                </label>
            </div></div>';
        })

        ->rawColumns(['action','is_active'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Category $model): QueryBuilder
    {
        return $model->newQuery()->with('childs')->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('category-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            // Column::make('parent_id'),
            Column::make('name'),
            Column::make('small_desc'),
            Column::make('is_active'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }
}
