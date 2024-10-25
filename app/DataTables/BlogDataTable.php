<?php

namespace App\DataTables;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
{
    private $model;

    public function __construct() {
        $this->model = "'blog'";
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

            return ' <a href="'.route('blogs.edit',$row->id).'" class="edit" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="trash-btn" onClick="deleteConfirmation('.$row->id.','.$this->model.')" title="Delete">
                <i class="fas fa-trash"></i>
            </a>';
        })
        ->editColumn('title', function ($row) {
            return ucfirst($row->title) ;
        })
        ->editColumn('category_id', function ($row) {
            return ucfirst($row->category ? $row->category->name : '') ;
        })

        ->editColumn('category_id', function ($row) {
            return ucfirst($row->sub_category ? $row->sub_category->name : '') ;
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
    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery()->with('category','sub_category')->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('blog-table')
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
            Column::make('title'),
            Column::make('small_desc'),
            Column::make('meta_title'),
            Column::make('category_id'),
            Column::make('sub_category_id'),
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
        return 'Blog_' . date('YmdHis');
    }
}
