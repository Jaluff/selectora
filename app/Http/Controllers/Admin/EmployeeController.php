<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    /*   if (request()->ajax()) {
      $employees = Employee::with(['jobProfile', 'qualities', 'references']); //select(['id', 'name', 'email', 'created_at'])
      // where('foto', '!=', '');
      return DataTables::of($employees)
        ->addColumn('experiencia', function ($row) {
          //dd($row->jobProfile);
          return isset($row->jobProfile->experiencia) ? $row->jobProfile->experiencia : 'No disponible';
        })
        ->addColumn('action', function ($row) {
          return '
          <a
          href="' . route('employee.edit', $row->id) . '"
           class="btn btn-sm btn-primary">
           Editar
           </a>';
        })
        ->rawColumns(['action'])
        ->make(true);
    } */

    return view('admin.employees.employees');
  }

  public function getData(Request $request)
  {
    $query = Employee::with(['jobProfile', 'qualities', 'references']);

    // Filtros dinámicos
    if ($request->has('filters')) {
      foreach ($request->filters as $filter) {
        if (!empty($filter['field']) && !empty($filter['operator']) && $filter['value'] !== null) {

          // Verificamos si el campo es de relación (ej: jobProfile.experiencia)
          if (str_contains($filter['field'], '.')) {
            [$relation, $column] = explode('.', $filter['field']);

            $query->whereHas($relation, function ($q) use ($column, $filter) {
              switch ($filter['operator']) {
                case 'like':
                  $q->where($column, 'LIKE', "%{$filter['value']}%");
                  break;
                case 'equals':
                  $q->where($column, $filter['value']);
                  break;
              }
            });
          } else {
            // Campo directo de employees
            switch ($filter['operator']) {
              case 'like':
                $query->where($filter['field'], 'LIKE', "%{$filter['value']}%");
                break;
              case 'equals':
                $query->where($filter['field'], $filter['value']);
                break;
            }
          }
        }
      }
    }

    return DataTables::of($query)
      ->setRowId('id')
      ->addColumn('experiencia', function ($row) {
        return $row->jobProfile->experiencia ?? 'No disponible';
      })
      ->addColumn('action', function ($row) {
        return '
            <a href="' . route('employee.edit', $row->id) . '"
               class="btn btn-sm btn-primary">
               Editar
            </a>';
      })
      ->rawColumns(['action'])
      ->make(true);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Employee $employee)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Employee $employee)
  {
    $employee = Employee::find($employee->id);
    return view('admin.employees.edit', compact('employee'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Employee $employee)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Employee $employee)
  {
    //
  }
}
