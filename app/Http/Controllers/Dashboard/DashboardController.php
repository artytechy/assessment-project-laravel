<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UserList;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = [...$request->only(['search'])];

        $query = UserList::query();

        $columns = \Schema::getColumnListing('user_lists');

        foreach ($columns as $column) {
            $query->when($search['search'] ?? false, fn ($query, $value) => $query->orWhere($column, 'LIKE', "%{$value}%"));
        }

        return inertia('Dashboard/Index', [
            'user_lists' => $query->paginate(20)->onEachSide(0)->withQueryString(),
            'search' => $search
        ]);
    }
}
